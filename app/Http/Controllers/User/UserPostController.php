<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\DepositRequest;
use App\Mail\WithdrawRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Deposit;
use App\Models\Withdraw;
use Illuminate\Support\Facades\Mail;

class UserPostController extends Controller
{
    public function saveinvest(Request $request)
    {
        $user = Auth::user();
        // Validation
        $this->validate($request, [
            'amount' => 'required',
            'payment_type' => 'required',
        ]);

        // Save Record into Deposit DB
        $deposit = new Deposit();
        $deposit->user_id = $user->id;
        $deposit->amount = $request->input('amount');
        $deposit->payment_type = $request->input('payment_type');
        $deposit->status = 0;
        $deposit->save();

        
        $this->email = $user->email;

        Mail::to($this->email)->send(new DepositRequest($deposit));

        \Session::flash('Success_message', 'Deposit Sent Successfully, Your deposit will be confirmed within 24hrs');

        return redirect()->route('userinvestmentorder');
    }

    public function savewithdraw(Request $request)
    {
        $user = Auth::user();
        // Validation
        $this->validate($request, [
            'amount' => 'required',
            'payment_type' => 'required',
            'wallet' => 'required',
        ]);

        // Save Record into Withdraw DB
        $withdraw = new Withdraw();
        $withdraw->user_id = $user->id;
        $withdraw->amount = $request->input('amount');
        $withdraw->payment_type = $request->input('payment_type');
        $withdraw->wallet = $request->input('wallet');
        $withdraw->status = 0;
        $withdraw->save();

        $user = Auth::user();
        
        $this->email = $user->email;

        Mail::to($this->email)->send(new WithdrawRequest($withdraw));

        \Session::flash('Success_message', 'Your withdraw request is processing,, We will notify you in 24hrs about your withdrawal and will be credited');

        return redirect()->route('userwithdraworder');
    }
}
