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
                        <h1>Investment Order Confirmation</h1>
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
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="text-center">
                                                <span style="font-size: 18px;font-weight:bold;color:#0a86c4;">Order Confirmation </span>
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            <div align="center">
                                                <img src="../app/img/qr.svg" width="300px" height="300px" class="text-muted mr-2">
                                            </div><br>
                                            <div class="text-center">
                                                <span>Scan the QR Code above to pay <strong>$798.00 BTC</strong></span>
                                            </div><br>
                                            <h6 class="text-center">OR</h6><br>
                                            <div class="text-center">
                                                <span class="text-center">Send <strong>$798.00 BTC</strong> to the address below</span>
                                            </div><br>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-wallet"></i></span>
                                                <input type="text" class="form-control" value="MWtkfumtF8Afe8HcrzWHmzHYEGt6vNkyM1">
                                            </div><br>
                                            <div class="text-center">
                                                <small>Your payment will be confirmed after confirmation</small>
                                            </div><br>
                                            <div align="center">
                                                <button class="btn submit-btn">See Transactions Status</button>
                                            </div><br><br>
                                            <div class="text-center">
                                                <i class="fa fa-info-circle"></i> <span>This order will be deleted after 72hrs if not fulfilled.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
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