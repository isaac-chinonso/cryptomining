@extends('layout.master')
@section('title')
Contact us | british capital raise
@endsection
@section('content')

<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="google_translate_element"></div>
                <h4 class="title">
                    Contact
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
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<!-- Contact Area Start -->
<section class="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section-heading">
                    <h2 class="title">
                        Get in Touch
                    </h2>
                    <p class="text" style="color: #fff;">
                        We Provide Progressive, Adaptable Investment Solutions
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form-wrapper">
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Name :</label>
                                    <input type="text" class="input-field" id="name" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email">Email :</label>
                                    <input type="text" class="input-field" id="email" placeholder="Enter Your Email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="subjict">Subjict :</label>
                                    <input type="text" class="input-field" id="subjict" placeholder="Write Your Subjict">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="phone">Phone :</label>
                                    <input type="text" class="input-field" id="phone" placeholder="Enter Your Phone No">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group button-area">
                                    <label for="message">Message :</label>
                                    <textarea id="message" class="input-field textarea" placeholder="Write Your Message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group button-area">
                                    <button type="submit" class="base-btn1">Send Message <i class="fas fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 d-flex">
                <div class="address-area">
                    <h4 class="title">
                        Contact Information
                    </h4>
                    <ul class="address-list">
                        <p>
                            <a href="https://goo.gl/maps/Q9hojShNpEcXf6b97"> CLICK HERE TO OPEN MAP</a> <br>

                            Address: Opal Tower
                        </p>
                        <li>
                            <p>
                                <i class="fas fa-phone"></i> +971522360412<br> +447380199096
                            </p>
                        </li>
                        <li>
                            <p>
                                <i class="far fa-envelope"></i> contact@britishcapitalraise.com
                            </p>
                        </li>
                        <li>
                            <p>
                                <i class="fas fa-globe-americas"></i> www.britishcapitalraise.com
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Area End -->

@endsection