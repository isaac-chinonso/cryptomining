<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="We are focused on providing a platform for our investors to grow their portfolio and obtain financial security.">
    <meta name="keywords" content="Investment, Secured Funds, global markets">
    <meta name="author" content="BritishCapital">

    <meta property="og:url" content="https://www.britishcapitalraise.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Investment, Secured Funds, global markets" />
    <meta property="og:description" content="We are focused on providing a platform for our investors to grow their portfolio and obtain financial security." />
    <meta property="og:image" content="https://www.britishcapitalraise.com/assets/images/favicon.png" />
    <title>@yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../apps/images/favicon.png">
    <link href="../apps/css/style.css" rel="stylesheet">
    <script src="../apps/js/modernizr-3.6.0.min.js"></script>
    <link href="../apps/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
   
</head>

<body class="v-light vertical-nav fix-header fix-sidebar">
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <div id="main-wrapper">
        <!-- header -->
        <div class="header">
            <div class="nav-header">
                <div class="brand-logo"><span class=""><img src="../apps/images/favicon.png" alt=""></span>
                </div>
                <div class="nav-control">
                    <div class="hamburger"><span class="line"></span> <span class="line"></span> <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="header-content">
                <div class="header-right">
                    <ul>
                        <li class="icons"><a href="javascript:void(0)"><i class="mdi mdi-account f-s-20" aria-hidden="true"></i></a>
                            <div class="drop-down dropdown-profile animated bounceInDown">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="#"><i class="mdi mdi-settings"></i> <span>Setting</span></a>
                                        </li>
                                        <li><a href="{{ url('/logout') }}"><i class="icon-power"></i> <span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #/ header -->
        <!-- sidebar -->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Main</li>
                    <li><a href="{{ url('/admin/dashboard') }}"><i class=" mdi mdi-view-dashboard"></i> <span class="nav-text">Dashboard</span></a>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-credit-card"></i> <span class="nav-text">Pending Transactions</span></a>
                        <ul aria-expanded="false">
                            <li>
                                <a href="{{ url('/admin/pending-deposit') }}">Pending Deposit</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/pending-withdrawal') }}">Pending Withdrawal</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-credit-card"></i> <span class="nav-text">Deposit/Withdrawal</span></a>
                        <ul aria-expanded="false">
                            <li>
                                <a href="{{ url('/admin/confirm-deposit') }}">Deposit</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/confirm-withdrawal') }}">Withdrawal</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/manual-deposit') }}">Manual Deposit</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/admin/interest') }}"><i class="mdi mdi-tree"></i> <span class="nav-text">Interest</span></a>
                    </li>
                    <li><a href="{{ url('/admin/users-info') }}"><i class="mdi mdi-database"></i> <span class="nav-text">Users</span></a>
                    </li>
                </ul>
            </div>
            <!-- #/ nk nav scroll -->
        </div>
        <!-- #/ sidebar -->
        @yield('content')
        <!-- footer -->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; <a href="#">British Capital Raise</a> 2022.</p>
            </div>
        </div>
        <!-- #/ footer -->
    </div>
    <!-- Common JS -->
    <script src="../apps/plugins/common/common.min.js"></script>
    <!-- Custom script -->
    <script src="../apps/js/custom.min.js"></script>
    <!-- Chartjs chart -->
    <script src="../apps/plugins/chartjs/Chart.bundle.js"></script>
    <!-- Custom dashboard script -->
    <script src="../apps/js/dashboard-1.js"></script>
    <script src="../apps/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="../apps/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="../apps/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
</body>

</html>

</html>