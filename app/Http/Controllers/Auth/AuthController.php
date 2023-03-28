<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Models\User;
use App\Models\Profile;
use App\Mail\UserRegistration;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    // Login Function
    public function signin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput($request->all());
        }

        if (Auth::attempt(['username' => $request['username'], 'password' => $request['password'], 'role_id' => '1'])) {

            return redirect()->intended(route('admindashboard'));
        }

        if (Auth::attempt(['username' => $request['username'], 'password' => $request['password'], 'role_id' => '2', 'status' => '1'])) {

            return redirect()->intended(route('userdashboard'));
        }

        \Session::flash('warning_message', 'These credentials do not match our records.');

        return redirect()->back();
    }

    //Save Users Function
    public function savelogin(Request $request)
    {
        // Validation
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'confirm_email' => 'required',
            'username' => 'required',
            'terms' => 'required',
            'password' => 'required|min:4',
            'confirm_password' => 'required|same:password',
        ]);

        $link = Str::random(30);

        // Save Record into user DB
        $user = new User();
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->terms = $request->input('terms');
        $user->role_id = 2;
        $user->status = 1;

        if (User::where('email', '=', $user->email)->where('username', '=', $user->username)->where('role_id', '=', '2')->exists()) {
            return redirect()->back()->with('warning_message', 'user already exist');
        } else {
            $user->save();
        }
        // Save Record into picture DB
        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->fname = $request->input('fname');
        $profile->lname = $request->input('lname');
        $profile->interest = 0;
        $profile->save();

        Auth::login($user);

        $user = Auth::user();

        $this->email = $user->email;

        Mail::to($this->email)->send(new UserRegistration($user));

        \Session::flash('Success_message', 'You have successfully registered');

        return redirect()->route('userdashboard');
    }

    public function updateprofile(Request $request, $id)
    {
        $user = Auth::user();

        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'interest' => 'required',
        ]);

        $module = Profile::find($id);

        $module->fname = $request->input('fname');

        $module->lname = $request->input('lname');

        $module->interest = $request->input('interest');

        $module->save();

        \Session::flash('Success_message', 'Account SUccessfully Updated');
        return back();
    }

    // Logout Function
    public function logout()
    {
        $user = Auth::user();

        Auth::logout();
        return redirect()->route('login');
    }

    public function activatesystemuser($id)
    {
        $user = Auth::user();

        User::where(['id' => $id])
            ->update(array('status' => 1));

        \Session::flash('success_message', 'Activation Successfully');

        return redirect()->route('activatesuccess');
    }
}
