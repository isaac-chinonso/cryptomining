@extends('layout.master')
@section('title')
british capital raise
@endsection
@section('content')

<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area extra-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="google_translate_element"></div>
                <h4 class="title extra-padding">
                    Register
                </h4>
                <ul class="breadcrumb-list">
                    <li>
                        <a href="index.html">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li>
                        <span><i class="fas fa-chevron-right"></i> </span>
                    </li>
                    <li>
                        <a href="signup.html">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<!-- Signin Area Start -->
<section class="auth">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <div class="sign-form">
                    <div class="heading">
                        <h4 class="title">
                            Create account
                        </h4>
                        <p class="subtitle">
                            We Provide Progressive, Adaptable Investment Solutions
                        </p>
                    </div>
                    <form class="form-group mb-0" method="POST" action="{{ url('savelogin') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control " type="text" name="fname" placeholder="Enter First Name">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control " type="text" name="lname" placeholder="Enter Last Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control" type="email" name="email" placeholder="Email Address">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="email" name="confirm_email" placeholder="Confirm Email Address">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="username" placeholder="Username (login)">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control" type="password" name="password" placeholder="Password">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="password" name="confirm_password" placeholder="Confirm  Password">
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox  d-flex">
                            <input type="checkbox" class="custom-control-input" value="1" name="terms" id="remember" required>
                            <label class="custom-control-label ml-2" for="remember">I agree to the <a href="#" style="color: #DF515D;">Terms of Use</a> </label>
                        </div>
                        <button class="base-btn1" type="submit">Create Account</button>
                        <p class="reg-text text-center mb-0">Already have an acocunt? <a href="{{ url('login') }}">LogIn</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Signin Area End -->

@endsection