@extends('layout.app')
@section('title')
Dashboard | Rinsz Capital
@endsection
@section('content')

<div class="page-wrapper bg-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="dashboard-header">
                    <div class="title-dashboard">
                        <h1>Dashboard</h1>
                        <p>We Provide Progressive, Adaptable Investment Solutions</p>
                    </div>
                </div>
                <div style="height:62px; background-color: #28282D; overflow:hidden; box-sizing: border-box; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%;">
                    <div style="height:40px; padding:0px; margin:0px; width: 100%;">
                        <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
                    </div>
                </div><br>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div align="center">
                                    <img src="../app/img/mon.png" class="text-white mr-2">
                                </div>
                            </div>
                            <div class="card-body pt-10 text-center">
                                <h3 style="color: #EC545E;font-size:25px;"><strong> Primary</strong></h3>
                                <small class="text-white">Starting at</small>
                                <h2 style="color: #EC545E;"><strong>$100</strong></h2>
                                <h5 class="text-white">Payment Channels</h5>
                                <h5 class="text-white">BTC | ETH | USDT</h5><hr>
                                <h5 class="text-white">5% profit returns after 3 days.</h5><hr>
                                <h5 class="text-white" style="line-height: 25px;">Deposit Included in daily return</h5><hr>
                                <h5 class="text-white">Minimum Invest: $100</h5><hr>
                                <h5 class="text-white">Maximum Invest: $4,999</h5><br>
                                <h5 style="line-height: 25px;" class="text-white">All payouts are made directly to your wallet and withdrawals can be made via any of the payment channels.</h5><br><br>

                                <button class="btn" style="background-color:#EC545E;"> <a href="{{ url('user/invest') }}" class="text-white"> Invest Now <strong>$</strong></a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div align="center">
                                    <img src="../app/img/mon.png" class="text-white mr-2">
                                </div>
                            </div>
                            <div class="card-body pt-10 text-center">
                                <h3 style="color: #EC545E;font-size:25px;"><strong> Standard</strong></h3>
                                <small class="text-white">Starting at</small>
                                <h2 style="color: #EC545E;"><strong>$5000</strong></h2>
                                <h5 class="text-white">Payment Channels</h5>
                                <h5 class="text-white">BTC | ETH | USDT</h5><hr>
                                <h5 class="text-white">10% profit returns after 5 days.</h5><hr>
                                <h5 class="text-white" style="line-height: 25px;">Deposit Included in daily return</h5><hr>
                                <h5 class="text-white">Minimum Invest: $5000</h5><hr>
                                <h5 class="text-white">Maximum Invest: $14,999</h5><br>
                                <h5 style="line-height: 25px;" class="text-white">All payouts are made directly to your wallet and withdrawals can be made via any of the payment channels.</h5><br><br>

                                <button class="btn" style="background-color:#EC545E;"> <a href="{{ url('user/invest') }}" class="text-white"> Invest Now <strong>$</strong></a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div align="center">
                                    <img src="../app/img/mon.png" class="text-white mr-2">
                                </div>
                            </div>
                            <div class="card-body pt-10 text-center">
                                <h3 style="color: #EC545E;font-size:25px;"><strong> Premium </strong></h3>
                                <small class="text-white">Starting at</small>
                                <h2 style="color: #EC545E;"><strong>$15,000</strong></h2>
                                <h5 class="text-white">Payment Channels</h5>
                                <h5 class="text-white">BTC | ETH | USDT</h5><hr>
                                <h5 class="text-white">15% profit returns after 7 days.</h5><hr>
                                <h5 class="text-white" style="line-height: 25px;">Deposit Included in daily return</h5><hr>
                                <h5 class="text-white">Minimum Invest: $15,000</h5><hr>
                                <h5 class="text-white">Maximum Invest: $49,999</h5><br>
                                <h5 style="line-height: 25px;" class="text-white">All payouts are made directly to your wallet and withdrawals can be made via any of the payment channels.</h5><br><br>

                                <button class="btn" style="background-color:#EC545E;"> <a href="{{ url('user/invest') }}" class="text-white"> Invest Now <strong>$</strong></a></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div align="center">
                                    <img src="../app/img/mon.png" class="text-white mr-2">
                                </div>
                            </div>
                            <div class="card-body pt-10 text-center">
                                <h3 style="color: #EC545E;font-size:25px;"><strong> VIP </strong></h3>
                                <small class="text-white">Starting at</small>
                                <h2 style="color: #EC545E;"><strong>$50,000</strong></h2>
                                <h5 class="text-white">Payment Channels</h5>
                                <h5 class="text-white">BTC | ETH | USDT</h5><hr>
                                <h5 class="text-white">10 % return after 24hours.</h5><hr>
                                <h5 class="text-white" style="line-height: 25px;">Deposit Included in daily return</h5><hr>
                                <h5 class="text-white">Minimum Invest: $50,000</h5><hr>
                                <h5 class="text-white">Maximum Invest: Unlimited</h5><br>
                                <h5 style="line-height: 25px;" class="text-white">All payouts are made directly to your wallet and withdrawals can be made via any of the payment channels.</h5><br><br>

                                <button class="btn" style="background-color:#EC545E;"> <a href="{{ url('user/invest') }}" class="text-white"> Invest Now <strong>$</strong></a></button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection