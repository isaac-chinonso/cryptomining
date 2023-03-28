@extends('layout.app')
@section('title')
Withdrawal Form | 
@endsection
@section('content')

<div class="page-wrapper bg-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="dashboard-header">
                    <div class="title-dashboard">
                        <h1>Withdraw Funds</h1>
                        <p>We Provide Progressive, Adaptable Investment Solutions</p>
                    </div>
                </div>
                <div style="height:62px; background-color: #28282D; overflow:hidden; box-sizing: border-box; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%;">
                    <div style="height:40px; padding:0px; margin:0px; width: 100%;">
                        <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-12">
                        @include('include.success')
                        @include('include.warning')
                        @include('include.error')
                        <div class="card">
                            <div class="card-body pt-10">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <h4 class="page-title">Withdrawal Form</h4>
                                        <div class="buy-form">
                                            <form method="POST" action="{{ url('user/request-withdrawal') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label style="color:#fff;">Enter withdrawal amount <small class="text-danger">( Minimum of $100. )</small></label>
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">$</span>
                                                                <input type="text" class="form-control" name="amount">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label style="color:#fff;">Choose payment channel</label>
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <img src="../app/img/btc-logo.png" width="50px" height="50px">
                                                                            <span style="color:#fff;"> Bitcoin</span> <input type="radio" class="radio" value="Btc" name="payment_type">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <img src="../app/img/eth-logo.png" width="50px" height="50px">
                                                                            <span style="color:#fff;"> Etherium</span> <input type="radio" class="radio" value="Eth" name="payment_type">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <img src="../app/img/ltc-logo.png" width="50px" height="50px">
                                                                            <span style="color:#fff;"> Tether USDT </span> <input type="radio" class="radio" value="Ltc" name="payment_type">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label style="color:#fff;">Enter a valid payment address for the selected channel </label>
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-wallet"></i></span>
                                                                <input type="text" class="form-control" name="wallet">
                                                            </div>
                                                        </div>
                                                        <small class="text-primary">Kindly ensure you enter the correct address. This is the address your funds will be transferred to.</small>
                                                    </div>
                                                </div><br>
                                                <div class="mt-2">
                                                    <button class="btn submit-btn">Request Withdrawal</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>
@endsection