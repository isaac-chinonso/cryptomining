<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="We are focused on providing a platform for our investors to grow their portfolio and obtain financial security.">
    <meta name="keywords" content="Investment, Secured Funds, global markets">
    <meta name="author" content="BritishCapital">

    <meta property="og:url" content="https://www.britishcapitalraise.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Investment, Secured Funds, global markets" />
    <meta property="og:description" content="We are focused on providing a platform for our investors to grow their portfolio and obtain financial security." />
    <meta property="og:image" content="https://www.britishcapitalraise.com/assets/images/favicon.png" />
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="../app/img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="../app/css/bootstrap.min.css">

    <link rel="stylesheet" href="../app/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../app/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="../app/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="../app/css/select2.min.css">

    <link rel="stylesheet" href="../app/css/style.css">
    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '34913df1b3e577702ec411a05327d6d810dd288e';
        window.smartsupp || (function(d) {
            var s, c, o = smartsupp = function() {
                o._.push(arguments)
            };
            o._ = [];
            s = d.getElementsByTagName('script')[0];
            c = d.createElement('script');
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.async = true;
            c.src = 'https://www.smartsuppchat.com/loader.js?';
            s.parentNode.insertBefore(c, s);
        })(document);
    </script>
</head>

<body>
    <div class="main-wrapper">

        <div class="header">
            <div class="header-left">
                <a href="#" class="logo">
                    <img src="../../assets/images/logo1.png" alt="">
                </a>
            </div>
            <a id="toggle_btn" href="javascript:void(0);"><i class="fas fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fas fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="../app/img/user-02.jpg" width="40" alt="Admin"></span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('logout') }}">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ url('logout') }}">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="{{ request()->is('user/dashboard*') ? 'active' : '' }}">
                            <a href="{{ url('user/dashboard') }}">
                                <p class="material-icons m-0">
                                    pie_chart_outline
                                </p> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-briefcase" aria-hidden="true"></i> <span> My Portfolio </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{ url('user/investment-plan') }}">New Investment</a></li>
                                <li><a href="{{ url('user/withdrawal-form') }}">Withdraw</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-wallet" aria-hidden="true"></i> <span> Transactions </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{ url('user/pending-investment-order') }}">Pending Investment </a></li>
                                <li><a href="{{ url('user/investment-order') }}">Active Investment</a></li>
                                <li><a href="{{ url('user/withdrawal-order') }}">Withdrawal History</a></li>
                                <li><a href="{{ url('user/pending-withdrawal-order') }}">Pending Withdrawal</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-cog"></i> <span>Settings</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @yield('content')
    </div>


    <script src="../app/js/jquery-3.6.0.min.js"></script>

    <script src="../app/js/bootstrap.bundle.min.js"></script>

    <script src="../app/js/jquery.dataTables.min.js"></script>
    <script src="../app/js/dataTables.bootstrap4.min.js"></script>

    <script src="../app/js/select2.min.js"></script>

    <script src="../app/js/jquery.slimscroll.js"></script>

    <script src="../app/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="../app/js/chartdata.js"></script>
    <script src="../app/plugins/amchart/js/responsive.min.js"></script>

    <script src="../app/js/app.js"></script>
</body>

</html>