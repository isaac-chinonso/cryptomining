@extends('layout.app')
@section('title')
Dashboard | 
@endsection
@section('content')

<div class="page-wrapper bg-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="dashboard-header">
                    <div class="title-dashboard">
                        <h1>Investment Details</h1>
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
                                    <div class="col-md-6">
                                        <h4 class="page-title">Investment Details</h4>
                                        <div class="buy-form">
                                            <form method="POST" action="{{ route('save-invest') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label style="color:#fff;">Investment Amount</label>
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">$</span>
                                                                <input type="text" class="form-control" name="amount" placeholder="0.00">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br><br>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label style="color:#fff;">Choose payment channel</label>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <img src="../app/img/btc-logo.png" width="30px" height="30px">
                                                                            <span style="color:#fff;"> Bitcoin</span> <input type="radio" class="radio" value="BTC" name="payment_type">
                                                                            <img src="../app/img/eth-logo.png" width="30px" height="30px">
                                                                            <span style="color:#fff;"> Etherium</span> <input type="radio" class="radio" value="ETH" name="payment_type">
                                                                            <img src="../app/img/ltc-logo.png" width="30px" height="30px">
                                                                            <span style="color:#fff;"> Tether USDT </span> <input type="radio" class="radio" value="USDT" name="payment_type">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="mt-2">
                                                    <button type="submit" class="btn submit-btn">Complete Investment Order</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="text-center">
                                                    <span style="font-size: 18px;font-weight:bold;color:#0a86c4;">Copy Wallet Address below to pay </span>
                                                </h4>
                                            </div>
                                            <div class="card-body">
                                                <div id="accordion-one" class="accordion">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color:#fff;"> Bitcoin <img src="../app/img/btc-logo.png" width="30px" height="30px"></h5>
                                                                </div>
                                                                <div id="collapseOne" class="collapse" data-parent="#accordion-one">
                                                                    <div class="card-body">
                                                                        <div class="text-center">
                                                                            <span class="text-center text-white">Send <strong>Payment</strong> to the address below</span>
                                                                        </div><br>
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="fa fa-wallet"></i></span>
                                                                            <input type="text" class="form-control" value="bc1qe2x4esrj4h2msrk2quqxx2gmlrcrtesrfy7ece">
                                                                        </div><br>
                                                                        <div class="text-center">
                                                                            <i class="fa fa-info-circle text-white"></i> <span style="color:#fff;">This order will be deleted after 72hrs if not fulfilled.</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color:#fff;"> Ethereum <img src="../app/img/eth-logo.png" width="30px" height="30px">
                                                                    </h5>
                                                                </div>
                                                                <div id="collapseTwo" class="collapse" data-parent="#accordion-one">
                                                                    <div class="card-body">
                                                                        <div class="text-center">
                                                                            <span class="text-center text-white">Send <strong>Payment</strong> to the address below</span>
                                                                        </div><br>
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="fa fa-wallet"></i></span>
                                                                            <input type="text" class="form-control" value="0xa2dc6fbe5dde8a42ef1bc6581de2f4ba695d1734">
                                                                        </div><br>
                                                                        <div class="text-center">
                                                                            <i class="fa fa-info-circle text-white"></i> <span style="color:#fff;">This order will be deleted after 72hrs if not fulfilled.</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color:#fff;"> Tether USDT <img src="../app/img/ltc-logo.png" width="30px" height="30px"></h5>
                                                                </div>
                                                                <div id="collapseThree" class="collapse" data-parent="#accordion-one">
                                                                    <div class="card-body">
                                                                        <div class="text-center">
                                                                            <span class="text-center text-white">Send <strong>Payment</strong> to the address below</span>
                                                                        </div><br>
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="fa fa-wallet"></i></span>
                                                                            <input type="text" class="form-control" value="0xa2dc6fbe5dde8a42ef1bc6581de2f4ba695d1734">
                                                                        </div><br>
                                                                        <div class="text-center">
                                                                            <i class="fa fa-info-circle text-white"></i> <span style="color:#fff;">This order will be deleted after 72hrs if not fulfilled.</span>
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
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>
@endsection