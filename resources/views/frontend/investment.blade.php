@extends('layout.master')
@section('title')
Investment | british capital raise
@endsection
@section('content')

<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="google_translate_element"></div>
                <h4 class="title">
                    Investment
                </h4>
                <ul class="breadcrumb-list">
                    <li>
                        <a href="index.html">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li>
                        <span><i class="fas fa-chevron-right"></i> </span>
                    </li>
                    <li>
                        <a href="feature.html">Investment</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<!-- Pricing  Area Start -->
<section class="pricing2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section-heading">
                    <h2 class="title">
                        At british capital raise, we offer a wide range of investments to cater to clients’ criteria, budgets and strategy.
                    </h2>
                    <p class="text" style="color: #fff;">
                        One of our goals is to minimize risks on investors fund, which means your fund security and consistent profit margin is non-negotiable.
                        We offer investments from $100 up to large scale portfolios.
                        Below are the different packages we offer.

                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 pricing-tab">

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-4">
                                <div class="price-box basic">
                                    <div class="price-title">
                                        <h3 class="heading-title"> Primary </h3>

                                    </div>
                                    <div class="price-rate">
                                        <div class="center-align-content">
                                            <small>Starting at</small>
                                            <p class="price">$100</p>

                                        </div>
                                    </div>
                                    <div class="service-feature">

                                        <ul class="service-feature-list">
                                            <hr>
                                            <li>
                                                <p style="color:#fff;">- 5% profit returns after 3 days.</p>
                                            </li>
                                            <hr>
                                            <li>
                                                <p style="color:#fff;">Deposit Included in daily return</p>
                                            </li>
                                            <hr>
                                            <li>
                                                <p style="color:#fff;">Minimum Invest: $100</p>
                                            </li>
                                            <hr>
                                            <li>
                                                <p style="color:#fff;">Maximum Invest: $4,999</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="buy-btn-wrapper">
                                        <a class="base-btn1" href="{{ url('user/invest') }}"> Invest Now<i class="fas fa-dollar-sign"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="price-box basic">
                                    <div class="price-title">
                                        <h3 class="heading-title">Standard</h3>

                                    </div>
                                    <div class="price-rate">
                                        <div class="center-align-content">
                                            <small>Starting at</small>
                                            <p class="price">$5000</p>

                                        </div>
                                    </div>
                                    <div class="service-feature">

                                        <ul class="service-feature-list">
                                            <hr>
                                            <li>
                                                <p style="color:#fff;">- 10% profit returns after 5 days.</p>
                                            </li>
                                            <hr>
                                            <li>
                                                <p style="color:#fff;">Deposit Included in daily return</p>
                                            </li>
                                            <hr>
                                            <li>
                                                <p style="color:#fff;">Minimum Invest: $5000</p>
                                            </li>
                                            <hr>
                                            <li>
                                                <p style="color:#fff;">Maximum Invest: $14,999</p>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="buy-btn-wrapper">
                                        <a class="base-btn1" href="{{ url('user/invest') }}">Invest Now<i class="fas fa-dollar-sign"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="price-box basic">
                                    <div class="price-title">
                                        <h3 class="heading-title">Premium </h3>

                                    </div>
                                    <div class="price-rate">
                                        <div class="center-align-content">
                                            <small>Starting at</small>
                                            <p class="price">$15,000</p>

                                        </div>
                                    </div>
                                    <div class="service-feature">

                                        <ul class="service-feature-list">
                                            <hr>
                                            <li>
                                                <p style="color:#fff;">- 15% profit returns after 7 days.</p>
                                            </li>
                                            <hr>
                                            <li>
                                                <p style="color:#fff;">Deposit Included in daily return</p>
                                            </li>
                                            <hr>
                                            <li>
                                                <p style="color:#fff;">Minimum Invest: $15,000</p>
                                            </li>
                                            <hr>
                                            <li>
                                                <p style="color:#fff;">Maximum Invest: $49,999</p>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="buy-btn-wrapper">
                                        <a class="base-btn1" href="{{ url('user/invest') }}">Invest Now<i class="fas fa-dollar-sign"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="row justify-content-center">

                            <div class="col-lg-4 col-md-4">
                                <div class="price-box basic">
                                    <div class="price-title">
                                        <h3 class="heading-title">VIP </h3>

                                    </div>
                                    <div class="price-rate">
                                        <div class="center-align-content">
                                            <small>Starting at</small>
                                            <p class="price">$50,000</p>

                                        </div>
                                    </div>
                                    <div class="service-feature">

                                        <ul class="service-feature-list">
                                            <hr>
                                            <li>
                                                <p style="color:#fff;">- 10 % return after 24hours</p>
                                            </li>
                                            <hr>
                                            <li>
                                                <p style="color:#fff;">Deposit Included in daily return</p>
                                            </li>
                                            <hr>
                                            <li>
                                                <p style="color:#fff;">Minimum Invest: $50,000</p>
                                            </li>
                                            <hr>
                                            <li>
                                                <p style="color:#fff;">Maximum Invest: Unlimited</p>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="buy-btn-wrapper">
                                        <a class="base-btn1" href="{{ url('user/invest') }}">Invest Now<i class="fas fa-dollar-sign"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Area End -->

@endsection