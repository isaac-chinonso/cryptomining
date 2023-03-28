<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\DepositApprove;
use Illuminate\Http\Request;
use App\Models\Deposit;
use App\Models\Withdraw;
use App\Models\User;
use App\Mail\WithdrawApprove;
use Illuminate\Support\Facades\Mail;


class AdminPostController extends Controller
{
    public function activateuser($id)
    {

        User::where(['id' => $id])
            ->update(array('status' => 1));

        \Session::flash('Success_message', 'Activation Successfully');

        return back();
    }

    public function deactivateuser($id)
    {

        User::where(['id' => $id])
            ->update(array('status' => 0));

        \Session::flash('Success_message', 'Deactivation Successfully');

        return back();
    }


    public function approvedeposit($id)
    {

        Deposit::where(['id' => $id])
            ->update(array('status' => 1));

        $deposit = Deposit::where('id', $id)->first();

        Mail::to($deposit->user->email)->send(new DepositApprove($deposit));

        \Session::flash('Success_message', 'Deposit Approved Successfully');

        return back();
    }

    public function approvedwithdraw($id)
    {

        Withdraw::where(['id' => $id])
            ->update(array('status' => 1));

        $withdraw = Withdraw::where('id', $id)->first();

        Mail::to($withdraw->user->email)->send(new WithdrawApprove($withdraw));

        \Session::flash('Success_message', 'Paid and Approved Successfully');

        return back();
    }

    public function savedeposit(Request $request)
    {
        // Validation
        $this->validate($request, [
            'user_id' => 'required',
            'amount' => 'required',
            'payment_type' => 'required',
        ]);

        // Save Record into Deposit DB
        $deposit = new Deposit();
        $deposit->user_id = $request->input('user_id');
        $deposit->amount = $request->input('amount');
        $deposit->payment_type = $request->input('payment_type');
        $deposit->status = 1;
        $deposit->save();

        \Session::flash('Success_message', 'Deposit Added Successfully');

        return back();
    }

    public function deletedeposit($id)
    {
        // Delete Deposit
        $deposit = Deposit::where('id', $id)->first();
        $deposit->delete();

        \Session::flash('Success_message', 'Deposit Deleted Successfully');

        return back();
    }


    public function deletewithdraw($id)
    {
        // Delete Withdrawal
        $withdraw = Withdraw::where('id', $id)->first();
        $withdraw->delete();

        \Session::flash('Success_message', 'Withdrawal Request Deleted Successfully');

        return back();
    }
}
