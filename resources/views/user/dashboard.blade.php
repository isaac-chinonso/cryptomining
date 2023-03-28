@extends('layout.app')
@section('title')
Dashboard | British Capital Raise
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
                    <div class="col-md-3">
                        <div class="card db-widgets">
                            <div class="card-header pb-0">
                                <div class="media">
                                    <img src="../app/img/invest.png" class="mr-2" alt="Bitcoin">
                                    <div class="media-body">
                                        <h5>Investment</h5>
                                        <h6>{{ $date }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <h2>${{ $totaldeposit }}</h2>
                                <div id="db-chart2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card db-widgets">
                            <div class="card-header pb-0">
                                <div class="media">
                                    <img src="../app/img/withdraw.png" class="mr-2" alt="Bitcoin">
                                    <div class="media-body">
                                        <h5>Withdrawal</h5>
                                        <h6>{{ $date }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <h2>${{ $withdrawal }}</h2>
                                <div id="db-chart3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card db-widgets">
                            <div class="card-header pb-0">
                                <div class="media">
                                    <img src="../app/img/withdraw.png" class="mr-2" alt="Bitcoin">
                                    <div class="media-body">
                                        <h5>Total Earned</h5>
                                        <h6>{{ $date }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <h2>${{ Auth::user()->profile->first()->interest }}</h2>
                                <div id="db-chart1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card db-widgets">
                            <div class="card-header pb-0">
                                <div class="media">
                                    <img src="../app/img/withdraw.png" class="mr-2" alt="Bitcoin">
                                    <div class="media-body">
                                        <h5>Total Balance</h5>
                                        <h6>{{ $date }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <h2>${{ Auth::user()->profile->first()->interest + $totaldeposit }}</h2>
                                <div id="db-chart4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 d-flex">
                        <div class="card chart-card mb-0 flex-fill">
                            <div class="card-header">
                                <h2>Recent Investment</h2>
                            </div>
                            <div class="card-body pt-0 pb-0">
                                <div class="table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Payment Type</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $number = 1; ?>
                                            @foreach($recentdeposit as $invest)
                                            <tr>
                                                <td>{{ $number }}</td>
                                                <td>{{$invest->payment_type }}</td>
                                                <td>${{ number_format($invest->amount, 0, '.', ', ') }}</td>
                                                <td class="text-white">{{ $invest->created_at->diffForHumans() }}</td>

                                            </tr>
                                            <?php $number++; ?>
                                            @endforeach
                                        </tbody>
                                    </table>
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