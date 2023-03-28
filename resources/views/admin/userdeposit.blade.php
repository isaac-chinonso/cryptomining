@extends('layout.apps2')
@section('title')
Single Users Deposit | British Capital Raise
@endsection
@section('content')

<!-- content body -->
<div class="content-body">
    <div class="container">
        <div class="row page-titles">
            <div class="col p-0">
                @if (date("H") < 12) <h4>Good morning, {{ Auth::user()->profile->first()->fname }}</h4>
                    @elseif (date("H") >= 12 && date("H") < 16) <h4>Good afternoon, {{ Auth::user()->profile->first()->fname }}</h4>
                        @elseif (date("H") >= 15 && date("H") < 24)<h4>Good evening, {{ Auth::user()->profile->first()->fname }}</h4>
                            @endif
            </div>
            <div class="col p-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Account</a>
                    </li>
                    <li class="breadcrumb-item active">Deposit</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Single User Deposits</h4>
                        <div align="right">
                            <button class="btn btn-sm" style="background-color: #DF515D;"><a href="{{ url('admin/interest') }}" class="text-white">Go back to Interest</a></button>
                        </div>
                        <p class="text-muted"><code></code>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Fullname</th>
                                        <th>Email</th>
                                        <th>Amount</th>
                                        <th>Payment Type</th>
                                        <th>Date Deposited</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($userdeposit as $use)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $use->user->profile->first()->fname }} {{ $use->user->profile->first()->lname }}</td>
                                        <td>{{ $use->user->email }}</td>
                                        <td>{{ $use->amount }}</td>
                                        <td>{{ $use->payment_type }}</td>
                                        <td>{{ $use->created_at->diffForHumans() }}</td>
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
    <!-- #/ container -->
</div>
<!-- #/ content body -->
@endsection