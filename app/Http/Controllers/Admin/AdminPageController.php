<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Deposit;
use App\Models\Withdraw;
use App\Models\User;

class AdminPageController extends Controller
{
    public function dashboard()
    {
        $data['pendingdeposit'] = Deposit::where('status', 0)->count();
        $data['pendingwithdraw'] = Withdraw::where('status', 0)->count();
        $data['totaldeposit'] = Deposit::count();
        $data['alluser'] = User::where('role_id', 2)->count();
        return view('admin.dashboard', $data);
    }

    public function users()
    {
        $data['users'] = User::where('role_id', 2)->get();
        return view('admin.users', $data);
    }

    public function interest()
    {
        $data['users'] = User::where('role_id', 2)->get();
        $data['totaldeposit'] = Deposit::where('status', 1)->sum('amount');
        return view('admin.interest', $data);
    }

    public function userdeposit($id)
    {
        $data['userdeposit'] = Deposit::where('user_id', $id)->get();
        return view('admin.userdeposit', $data);
    }

    public function manualdeposit()
    {
        $data['users'] = User::where('role_id', 2)->get();
        return view('admin.manualdeposit', $data);
    }

    public function pendingdeposit()
    {
        $data['pendingdeposit'] = Deposit::where('status', 0)->get();
        return view('admin.pending_deposit', $data);
    }

    public function pendingwithdrawal()
    {
        $data['pendingwithdrawal'] = Withdraw::where('status', 0)->get();
        return view('admin.pending_withdraw', $data);
    }

    public function confirmwithdrawal()
    {
        $data['confirmwithdrawal'] = Withdraw::where('status', 1)->get();
        return view('admin.confirm_withdraw', $data);
    }

    public function confirmdeposit()
    {
        $data['confirmdeposit'] = Deposit::where('status', 1)->get();
        return view('admin.confirm_deposit', $data);
    }


}
