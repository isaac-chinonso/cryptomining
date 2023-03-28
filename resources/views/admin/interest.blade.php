@extends('layout.apps1')
@section('title')
Users | British Capital Raise
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
                    <li class="breadcrumb-item active">Users</li>
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
                        <h4 class="card-title">User Details</h4>
                        <p class="text-muted"><code></code>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Fullname</th>
                                        <th>Email</th>
                                        <th>Total Active Deposit</th>
                                        <th>Total Earned</th>
                                        <th>Total Balance</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($users as $use)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $use->profile->first()->fname }} {{ $use->profile->first()->lname }}</td>
                                        <td>{{ $use->email }}</td>
                                        <td>{{ $totaldeposit }}</td>
                                        <td>{{ $use->profile->first()->interest }}</td>
                                        <td>{{ $totaldeposit + $use->profile->first()->interest }} </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm"><a href="{{ route('userdepositlist', $use->id) }}" class="text-white">Investment List</a></button>
                                            <button class="btn btn-sm" style="background-color: #DF515D;color:#fff;" data-toggle="modal" data-target="#deactivate{{ $use->id }}">Assign Interest </button>
                                        </td>
                                        <!-- modal content -->
                                        <div id="deactivate{{ $use->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Assign Interest to User</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <form method="post" action="{{ route('updateprofile', $use->id) }}">
                                                        <div class="modal-body">
                                                            @csrf
                                                            <input type="hidden" class="form-control" name="fname" value="{{ $use->profile->first()->fname }}">
                                                            <input type="hidden" class="form-control" name="lname" value="{{ $use->profile->first()->lname }}">
                                                            <div class="form-group">
                                                                <label>User</label>
                                                                <input type="text" class="form-control" value="{{ $use->profile->first()->fname }} {{ $use->profile->first()->lname }}" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Interest</label>
                                                                <input type="text" name="interest" class="form-control" placeholder="$0.00" value="{{ $use->profile->first()->interest }}">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-danger btn-sm">Assign Interest</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal -->

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