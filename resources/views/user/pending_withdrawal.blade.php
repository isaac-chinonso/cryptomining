@extends('layout.app')
@section('title')
Pending Withdrawal | British Capital Raise
@endsection
@section('content')

<div class="page-wrapper bg-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="dashboard-header">
                    <div class="title-dashboard">
                        <h1>Pending Withdrawal Orders</h1>
                        <p>We Provide Progressive, Adaptable withdrawment Solutions</p>
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
                            <div class="card-block">
                                <h5 class="text-bold card-title">Pending Withdrawal Orders</h5>
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr style="color:#DF505E;">
                                                <th>#</th>
                                                <th>Payment Type</th>
                                                <th>Amount</th>
                                                <th>Wallet Address</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $number = 1; ?>
                                            @foreach($pendingwithdrawal as $withdraw)
                                            <tr style="color: #fff;">
                                                <td>{{ $number }}</td>
                                                <td>{{$withdraw->payment_type }}</td>
                                                <td>${{ number_format($withdraw->amount, 0, '.', ', ') }}</td>
                                                <td>{{ $withdraw->wallet }}</td>
                                                <td>{{ $withdraw->created_at->diffForHumans() }}</td>
                                                <td>
                                                    <span class="alert alert-danger" style="padding: 4px;">Pending</span>
                                                </td>
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
</div>
@endsection