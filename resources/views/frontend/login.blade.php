@extends('layout.master')
@section('title')
Login | british capital raise
@endsection
@section('content')

<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area extra-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="google_translate_element"></div>
                <h4 class="title extra-padding">
                    Login
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
                        <a href="#">Login</a>
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
                            Login to account
                        </h4>
                        <p class="subtitle">
                            We Provide Progressive, Adaptable Investment Solutions
                        </p>
                    </div>
                    <form class="form-group mb-0" method="POST" action="{{ url('sigin') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control " type="text" name="username" placeholder="Username">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control " type="password" name="password" placeholder="Enter Password">
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox  d-flex">
                            <span class="ml-auto"><a href="{{ url('/forget-password') }}" style="color: #DF515D;">Forgot Password ?</a></span>
                        </div>
                        <button class="base-btn1" type="submit">Signin to Account</button>
                        <p class="reg-text text-center mb-0">Dont have an acocunt? <a href="{{ url('register') }}">Register</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Signin Area End -->

@endsection