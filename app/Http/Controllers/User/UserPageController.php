<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Deposit;
use App\Models\Withdraw;
use Carbon\Carbon;

class UserPageController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $data['totaldeposit'] = Deposit::where('user_id', $user->id)->where('status', 1)->sum('amount');
        $data['recentdeposit'] = Deposit::where('user_id', $user->id)->where('status', 1)->latest('created_at')->limit(3)->get();
        $data['withdrawal'] = Withdraw::where('user_id', $user->id)->where('status', 1)->sum('amount');
        $data['date'] = Carbon::now()->format('Y-m-d');
        return view('user.dashboard', $data);
    }

    public function investplan()
    {
        return view('user.investment_plan');
    }

    public function invest()
    {
        return view('user.invest');
    }

    public function payment()
    {
        return view('user.payment');
    }

    public function investorder()
    {
        $user = Auth::user();
        $data['investment'] = Deposit::where('user_id', $user->id)->where('status', 1)->get();
        return view('user.invest_order', $data);
    }

    public function pendinginvest()
    {
        $user = Auth::user();
        $data['pendinginvestment'] = Deposit::where('user_id', $user->id)->where('status', 0)->get();
        return view('user.pending_deposit', $data);
    }

    public function withdrawal()
    {
        return view('user.withdrawform');
    }

    public function withdraworder()
    {
        $user = Auth::user();
        $data['withdrawal'] = Withdraw::where('user_id', $user->id)->where('status', 1)->get();
        return view('user.withdraw_order', $data);
    }

    public function pendingwithdraw()
    {
        $user = Auth::user();
        $data['pendingwithdrawal'] = Withdraw::where('user_id', $user->id)->where('status', 0)->get();
        return view('user.pending_withdrawal', $data);
    }
}
