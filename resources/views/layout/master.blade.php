<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We are focused on providing a platform for our investors to grow their portfolio and obtain financial security.">
    <meta name="keywords" content="Investment, Secured Funds, global markets">
    <meta name="author" content="BritishCapital">

    <meta property="og:url" content="https://www.britishcapitalraise.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Investment, Secured Funds, global markets" />
    <meta property="og:description" content="We are focused on providing a platform for our investors to grow their portfolio and obtain financial security." />
    <meta property="og:image" content="https://www.britishcapitalraise.com/assets/images/favicon.png" />
    <title> @yield('title') </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Plugin css -->
    <link rel="stylesheet" href="assets/css/plugin.css">
    <!-- Flaticon -->
    <link rel="stylesheet" href="assets/css/flaticon.css">

    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/sop.css">
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


    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: 'en'
                },
                'google_translate_element'
            );
        }
    </script>

    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?
cb=googleTranslateElementInit">
    </script>
</head>

<body>
    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="loader loader-1">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
        </div>
    </div>
    <!-- preloader area end -->


    <!--Main-Menu Area Start-->
    <div class="mainmenu-area" style="background-color: #2b2b31;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="assets/images/logo.png" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon" style="background-color: #DF515D;"></span>
                        </button>
                        <div class="collapse navbar-collapse fixed-height" id="main_menu">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('/*') ? 'active' : '' }}" href="{{ url('/') }}">Home
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('about-us*') ? 'active' : '' }}" href="{{ url('/about-us') }}">About
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('investment*') ? 'active' : '' }}" href="{{ url('/investment') }}">Investment
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('/investors*') ? 'active' : '' }}" href="{{ url('/investors') }}">Investors
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('faq*') ? 'active' : '' }}" href="{{ url('/faq') }}">FAQ
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('contact-us*') ? 'active' : '' }}" href="{{ url('/contact-us') }}">Contact
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                            </ul>
                            <a href="{{ url('/login') }}" class="base-btn2"> Get Started</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--Main-Menu Area Start-->


    @yield('content')
    <!-- Footer Area Start -->
    <footer class="footer" id="footer">

        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-lg-3">

                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="footer-widget about-widget">
                        <div class="about-content">
                            <h2 class="text-center text-white">Wanna Talk To Us?</h2>
                            <p class="text-center">
                                Please feel free to contact us. We’re super happy to talk to you. Feel free to ask anything.
                            </p>
                        </div>
                        <div class="subscribe-area" align="center">
                            <button class="base-btn2" style="background-color: #fff;color:#299482;"><a href="{{ url('/contact-us') }}">Get in Touch</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                </div>
            </div>
        </div>
        <div class="copy-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="left-area">
                            <p>Copyright © 2023. British Capital Raise All Rights Reserved.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <ul class="social-links">
                            <li>
                                <a href="{{ url('/investment') }}">Investment |</a>
                            </li>
                            <li>
                                <a href="{{ url('/investors') }}">FAQ |</a>
                            </li>
                            <li>
                                <a href="{{ url('/faq') }}">Investors</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- Back to Top Start -->
    <div class="bottomtotop">
        <i class="fas fa-chevron-right"></i>
    </div>
    <!-- Back to Top End -->



    <!-- jquery -->
    <script src="assets/js/jquery.js"></script>
    <!-- popper -->
    <script src="assets/js/popper.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- plugin js-->
    <script src="assets/js/plugin.js"></script>
    <!-- main -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/spop.js"></script>
    <script type="text/javascript">
        var country_list = ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla", "Antigua & Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Belarus", "Belgium", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin Islands", "Brunei", "Bulgaria", "Burundi", "Cambodia", "Cameroon", "Cape Verde", "Chad", "Chile", "China", "Colombia", "Congo", "Costa Rica", "Cote D Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Estonia", "Ethiopia", "Falkland Islands", "Faroe Islands", "Finland", "France", "French Polynesia", "French West Indies", "Gabon", "Gambia", "Georgia", "Germany", "Gibraltar", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kuwait", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Mauritania", "Mauritius", "Mexico", "Moldova", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Namibia", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Norway", "Oman", "Pakistan", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russia", "Rwanda", "Saint Pierre & Miquelon", "San Marino", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "South Africa", "South Korea", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad & Tobago", "Tunisia", "Turkey", "Turkmenistan", , "Ukraine", "United Arab Emirates", "United Kingdom", "Uruguay", "Uzbekistan", "Venezuela", "Vietnam", "Virgin Islands (US)", "Yemen"];

        function choice(array) {
            return array[Math.floor(Math.random() * array.length)];
        }

        function randomNumber(min, max) {
            return Math.random() * (max - min) + min;
        }


        function payinout() {
            var nu = Math.floor(randomNumber(100, 3500));
            var con = choice(country_list);
            var mode = choice(['deposited', 'withdrew']);

            spop({
                template: "An Investor from " + con + " " + mode + " $" + nu + " ...",

                position: 'bottom-center',
                style: 'success',
                autoclose: 4000,
            });

        }

        setInterval(payinout, 7000);
    </script>
</body>

</html