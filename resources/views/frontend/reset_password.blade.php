@extends('layout.master')
@section('title')
Password reset | british capital raise
@endsection
@section('content')

<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area extra-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="google_translate_element"></div>
                <h4 class="title extra-padding">
                    Password reset
                </h4>
                <ul class="breadcrumb-list">
                    <li>
                        <a href="#">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li>
                        <span><i class="fas fa-chevron-right"></i> </span>
                    </li>
                    <li>
                        <a href="#">Password reset</a>
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
                            Password reset
                        </h4>
                        <p class="subtitle">
                            Enter your email below to proceed.
                        </p>
                    </div>

                    <form class="form-group mb-0" method="POST" action="{{ route('forget.password.post') }}">
                        @csrf
                        <input class="form-control " type="email" name="email" placeholder="Email Address">
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                        <button class="base-btn1" type="submit">Reset Password</button>
                        <p class="reg-text text-center mb-0">Not registered? <a href="{{ url('register') }}">Register Now</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Signin Area End -->

@endsection