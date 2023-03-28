@extends('layout.apps1')
@section('title')
Deposit | British Capital Raise
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
                        <h4 class="card-title">Enter Deposit Details</h4>
                        <p class="text-muted"><code></code>
                        </p>
                        <form method="post" action="{{ url('admin/save-deposit') }}">
                        @csrf
                            <div class="form-group">
                                <label>Select User</label>
                                <select class="form-control" name="user_id">
                                    <option selected disabled>Select User</option>
                                    @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->username }} ( {{ $user->email }} )</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="text" name="amount" class="form-control" placeholder="$0.00">
                            </div>
                            <div class="form-group">
                                <label>Payment Channel</label>
                                <select class="form-control" name="payment_type">
                                    <option selected disabled>Select Payment Channel</option>
                                    <option value="BTC">Bitcoin (BTC)</option>
                                    <option value="ETH">Ethereum (ETH)</option>
                                    <option value="USDT">Tether USDT</option>
                                </select>
                            </div>
                            <div class="form-group" align="right">
                                <button class="btn" style="background-color: #DF515D;color:#fff;">Submit Deposit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
<!-- #/ content body -->
@endsection