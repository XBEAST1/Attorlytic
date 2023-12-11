<!DOCTYPE html>
<html lang="en_GB" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attorlytic - Betty Doyle</title>

    <link rel="icon" href="assets/uploads/media-uploader/favicon.png" type="image/png">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Merriweather:wght@400;700&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="assets/frontend/css/animate.css">
    <link rel="stylesheet" href="assets/frontend/css/bootstrap.min4.css">
    <link rel="stylesheet" href="assets/frontend/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/frontend/css/all.min.css">
    <link rel="stylesheet" href="assets/frontend/css/flaticon.css">
    <link rel="stylesheet" href="assets/frontend/css/dynamic-style.css">
    <link rel="stylesheet" href="assets/frontend/css/responsive.css">
    <link rel="stylesheet" href="assets/frontend/css/style.css">
    <script src="https://xgenious.com/laravel/attorg/assets/common/js/jquery-3.6.0.min.js"></script>
    <script src="https://xgenious.com/laravel/attorg/assets/common/js/jquery-migrate-3.3.2.min.js"></script>

    <style>
        :root {
            --main-color-one: #d0bf90;
            --secondary-color: #30373f;
            --heading-font: "Merriweather", sans-serif;
            --body-font: "Open Sans", sans-serif;
        }
    </style>
</head>

<body>
    @yield('header')
    <nav class="navbar navbar-area navbar-expand-lg nav-style-01 fixed-top">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <a href="/" class="logo">
                        <img src="assets/uploads/media-uploader/logo1621240982.png" alt />
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                <ul class="navbar-nav">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/about-us">About Us</a>
                    </li>
                    <li>
                        <a href="/practice-area">Practice Area</a>
                    </li>
                    <li class=" menu-item-has-children ">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="/case">Case</a>
                            </li>
                            <li>
                                <a href="/price-plan">Price Plan</a>
                            </li>
                            <li>
                                <a href="/consulation">Consulation</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/appointment">Appointment</a>
                    </li>
                    <li>
                        <a href="/blog">Blog</a>
                    </li>
                    <li>
                        <a href="/contact-us">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div>
                @auth
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <div class="input-group ms-5">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">{{ auth()->user()->name }}</button>
                    <ul class="dropdown-menu">
                        @if(auth()->user()->usertype == 'admin')
                        <li><a class="dropdown-item" href="home">Admin Panel</a></li>
                        @endif
                        <li><a class="dropdown-item" href="profile">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                    </ul>
                </div>
                @else
                <a class="btn ms-5" href="/login">Login</a>
                <a class="btn ms-3" href="/register">Register</a>
                @endauth
            </div>
        </div>
    </nav>
    <div class="breadcrumb-area" style="background-image: url(assets/uploads/media-uploader/new-pa-31622623781.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title"> Betty Doyle
                        </h2>
                        <ul class="page-list">
                            <li><a href="/">Home</a></li>
                            <li><a href="#"> Betty Doyle
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="blog-details-content-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="appointment-details-item">
                        <div class="top-part">
                            <div class="thumb">
                                <img src="assets/uploads/media-uploader/ab-51622624237.png" class="full" alt />
                            </div>
                            <div class="content">
                                <span class="designation">Assosiate, Attorg</span>
                                <h2 class="title">Betty Doyle</h2>
                                <div class="short-description">Travelling salesman - and above it there hung a picture
                                    that
                                    he had.
                                    Recently cut out of an illustrated magazine and housed in a nice
                                    It showed a lady fitted out with a fur hat and fur boa who sat</div>
                                <div class="location"><i class="fas fa-map-marked-alt"></i> Melborn, Australia</div>
                                <div class="price-wrap">
                                    <h4 class="price">Fee: <span>$287</span></h4>
                                </div>
                                <div class="social-share-wrap">
                                    <ul class="social-share">
                                        <li><a class="facebook"
                                                href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fxgenious.com%2Flaravel%2Fattorg%2Fappointment%2Fbetty-doyle%2F36"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a class="twitter"
                                                href="https://twitter.com/intent/tweet?text=&amp;url=https%3A%2F%2Fxgenious.com%2Flaravel%2Fattorg%2Fappointment%2Fbetty-doyle%2F36&amp;via=Crunchify"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li><a class="linkedin"
                                                href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fxgenious.com%2Flaravel%2Fattorg%2Fappointment%2Fbetty-doyle%2F36&amp;title="><i
                                                    class="fab fa-linkedin-in"></i></a></li>
                                        <li><a class="pinterest"
                                                href="https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fxgenious.com%2Flaravel%2Fattorg%2Fappointment%2Fbetty-doyle%2F36&amp;media=104&amp;description="><i
                                                    class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-part">
                            <nav>
                                <div class="nav nav-tabs" role="tablist">
                                    <a class="nav-link " data-toggle="tab" href="#nav-information" role="tab"
                                        aria-selected="false">Information</a>
                                    <a class="nav-link active" data-toggle="tab" href="#nav-booking" role="tab"
                                        aria-selected="true">Booking</a>
                                    <a class="nav-link" data-toggle="tab" href="#nav-feedback" role="tab"
                                        aria-selected="false">Feedback</a>
                                </div>
                            </nav>
                            <div class="tab-content">
                                <div class="tab-pane fade" id="nav-information" role="tabpanel">
                                    <div class="information-area-wrap">
                                        <div class="description-wrap">
                                            <h3 class="title">About Me</h3>
                                            <p>Education</p>
                                            <p>Travelling salesman - and above it there hung a picture that he had.</p>
                                            <p>Recently cut out of an illustrated magazine and housed in a nice</p>
                                            <p>It showed a lady fitted out with a fur hat and fur boa who sat</p>
                                            <p>Academy University School of Law, Boston, MA</p>
                                            <p>The Syntify High School Of New York</p>
                                            <p>Completed Cases</p>
                                            <p>Travelling salesman - and above it there hung a picture that he had.</p>
                                            <p>Recently cut out of an illustrated magazine and housed in a nice</p>
                                            <p>It showed a lady fitted out with a fur hat and fur boa who sat</p>
                                            <p>Academy University School of Law, Boston, MA</p>
                                            <p>The Syntify High School Of New York</p>
                                        </div>
                                        <div class="education-info">
                                            <h3 class="title">Education Info</h3>
                                            <ul class="circle-list">
                                                <li>Assosiate, Attorg</li>
                                            </ul>
                                        </div>
                                        <div class="additional-info">
                                            <h3 class="title">Additional Info</h3>
                                            <ul class="circle-list">
                                                <li>Seniour Attorny</li>
                                            </ul>
                                        </div>
                                        <div class="specialised-info">
                                            <h3 class="title">Specialize Info</h3>
                                            <ul class="circle-list">
                                                <li>Family Law</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="nav-booking" role="tabpanel">
                                    <div class="booking-wrap">
                                        <div class="left-part">
                                            <div class="date-time-block">
                                                <h4 class="title">Available On <time>November 2023</time></h4>
                                                <ul class="time-slot date">
                                                    <li data-date="26-11-2023">Sun, 26 November, 2023</li>
                                                    <li data-date="27-11-2023">Mon, 27 November, 2023</li>
                                                    <li data-date="28-11-2023">Tue, 28 November, 2023</li>
                                                    <li data-date="29-11-2023">Wed, 29 November, 2023</li>
                                                    <li data-date="30-11-2023">Thu, 30 November, 2023</li>
                                                    <li data-date="01-12-2023">Fri, 01 December, 2023</li>
                                                    <li data-date="02-12-2023">Sat, 02 December, 2023</li>
                                                </ul>
                                            </div>
                                            <div class="date-time-block">
                                                <h4 class="title">Availability On <time class="time_slog_date">Sun, 26
                                                        November, 2023</time></h4>
                                                <ul class="time-slot time">
                                                    <li data-id="1">10:00AM - 11:00AM</li>
                                                    <li data-id="2">11:00AM - 12:00PM</li>
                                                    <li data-id="4">1:00PM - 2:00PM</li>
                                                    <li data-id="5">3:00PM - 4:00PM</li>
                                                    <li data-id="6">5:00PM - 6:00PM</li>
                                                    <li data-id="7">7:00PM - 8:00PM</li>
                                                    <li data-id="8">9:00PM - 10:00PM</li>
                                                    <li data-id="9">11:00PM - 12:00AM</li>
                                                    <li data-id="10">8:00AM - 9:00AM</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="right-part">
                                            <div class="form-wrapper">
                                                <div class="billing-details-wrapper">
                                                    <div class="order-tab-wrap">
                                                        <nav>
                                                            <div class="nav nav-tabs" role="tablist">
                                                                <a class="nav-item nav-link active" id="nav-home-tab"
                                                                    data-toggle="tab" href="#nav-home" role="tab"
                                                                    aria-selected="true"><i class="fas fa-user"></i></a>
                                                                <a class="nav-item nav-link   disabled " disabled
                                                                    id="nav-profile-tab" data-toggle="tab"
                                                                    href="#nav-profile" role="tab"
                                                                    aria-controls="nav-profile" aria-selected="false"><i
                                                                        class="fas fa-address-book"></i></a>
                                                            </div>
                                                        </nav>
                                                        <div class="tab-content">
                                                            <div class="tab-pane fade show active" id="nav-home"
                                                                role="tabpanel">
                                                                <div class="login-form">
                                                                    <p>Login to continue</p>
                                                                    <div class="login-form">
                                                                        <form action="login" method="post"
                                                                            enctype="multipart/form-data"
                                                                            class="contact-page-form style-01"
                                                                            id="login_form_order_page">
                                                                            <input type="hidden" name="_token"
                                                                                value="pq6G26W6H6D08kC3vzalTOBLpgVmAwBJSKkTzReK">
                                                                            <div class="error-wrap"></div>
                                                                            <div class="form-group">
                                                                                <input type="text" name="username"
                                                                                    class="form-control"
                                                                                    placeholder="Username">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <input type="password" name="password"
                                                                                    class="form-control"
                                                                                    placeholder="Password">
                                                                            </div>
                                                                            <div class="form-group btn-wrapper">
                                                                                <a href="#" class="boxed-btn btn-block"
                                                                                    id="login_btn"
                                                                                    type="submit"><span>Login</span></a>
                                                                            </div>
                                                                            <div class="row mb-4 rmber-area">
                                                                                <div class="col-6">
                                                                                    <div
                                                                                        class="custom-control custom-checkbox mr-sm-2">
                                                                                        <input type="checkbox"
                                                                                            name="remember"
                                                                                            class="custom-control-input"
                                                                                            id="remember">
                                                                                        <label
                                                                                            class="custom-control-label"
                                                                                            for="remember">Remember
                                                                                            Me</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-6 text-right">
                                                                                    <a class="d-block"
                                                                                        href="register">Create
                                                                                        New account?</a>
                                                                                    <a href="login/forget-password">Forgot
                                                                                        Password?</a>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="next-step">
                                                                    <button class="next-step-btn btn-small"
                                                                        style="display: none" type="button">Next
                                                                        Step</button>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade " id="nav-profile"
                                                                role="tabpanel">
                                                                <h3 class="title">Booking Information</h3>
                                                                <form action="appointment-booking" method="post"
                                                                    class="appointment-booking-form"
                                                                    id="appointment-booking-form">
                                                                    <input type="hidden" name="_token"
                                                                        value="pq6G26W6H6D08kC3vzalTOBLpgVmAwBJSKkTzReK">
                                                                    <div class="error-message"></div>
                                                                    <input type="hidden" name="booking_date">
                                                                    <input type="hidden" name="booking_time_id">
                                                                    <input type="hidden" name="appointment_id"
                                                                        value="36">
                                                                    <div class="form-group">
                                                                        <input type="text" name="name"
                                                                            class="form-control" placeholder="Name"
                                                                            value>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="email" name="email"
                                                                            class="form-control" placeholder="Email"
                                                                            value>
                                                                    </div>
                                                                    <div class="form-group select"> <label
                                                                            for="gender">Your
                                                                            Gender</label> <select id="gender"
                                                                            name="gender" class="form-control">
                                                                            <option value="male">Male </option>
                                                                            <option value="female">Female</option>
                                                                        </select></div>
                                                                    <div class="form-group textarea"><textarea
                                                                            name="message" id="message" cols="30"
                                                                            rows="10" class="form-control"
                                                                            placeholder="Your Message"></textarea></div>
                                                                    <div class="form-group manual_payment_transaction_field"
                                                                        style="display: block;">
                                                                        <div class="label">Transaction ID</div>
                                                                        <input type="text" name="transaction_id"
                                                                            placeholder="transaction"
                                                                            class="form-control">
                                                                        <span class="help-info"><span
                                                                                style="color: rgb(119, 119, 119); font-size: 15px;">enter
                                                                                your transaction id</span></span>
                                                                    </div>
                                                                    <div class="button-wrap">
                                                                        <button type="submit"
                                                                            class="btn-small btn-block appointment appo_booking_btn">Book
                                                                            Appointment <i
                                                                                class="fas fa-spinner fa-spin d-none"></i></button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-feedback" role="tabpanel">
                                    <div class="feedback-wrapper">
                                        <div class="login-form">
                                            <p>Login to continue</p>
                                            <div class="login-form">
                                                <form action="login" method="post" enctype="multipart/form-data"
                                                    class="contact-page-form style-01" id="login_form_order_page">
                                                    <input type="hidden" name="_token"
                                                        value="pq6G26W6H6D08kC3vzalTOBLpgVmAwBJSKkTzReK">
                                                    <div class="error-wrap"></div>
                                                    <div class="form-group">
                                                        <input type="text" name="username" class="form-control"
                                                            placeholder="Username">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" name="password" class="form-control"
                                                            placeholder="Password">
                                                    </div>
                                                    <div class="form-group btn-wrapper">
                                                        <a href="#" class="boxed-btn btn-block" id="login_btn"
                                                            type="submit"><span>Login</span></a>
                                                    </div>
                                                    <div class="row mb-4 rmber-area">
                                                        <div class="col-6">
                                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                                <input type="checkbox" name="remember"
                                                                    class="custom-control-input" id="remember">
                                                                <label class="custom-control-label"
                                                                    for="remember">Remember
                                                                    Me</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a class="d-block" href="register">Create
                                                                New account?</a>
                                                            <a href="login/forget-password">Forgot
                                                                Password?</a>
                                                        </div>
                                                    </div>
                                                </form>
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
    </section>
    <script type="text/javascript" src="assets/frontend/js/fontawesome-mod.js"></script>
    <script type="text/javascript" src="assets/frontend/js/bootstrap4-rating-input.js"></script>
    <script>
        (function () {
            "use strict";
            $(document).on('click', '#login_btn', function (e) {
                e.preventDefault();
                var formContainer = $(this).parent().parent();
                var el = $(this);
                var username = formContainer.find('input[name="username"]').val();
                var password = formContainer.find('input[name="password"]').val();
                var remember = formContainer.find('input[name="remember"]').val();
                el.html('<i class="fas fa-spinner fa-spin mr-1"></i> Please Wait');
                $.ajax({
                    type: 'post',
                    url: "https://xgenious.com/laravel/attorg/ajax-login",
                    data: {
                        _token: "pq6G26W6H6D08kC3vzalTOBLpgVmAwBJSKkTzReK",
                        username: username,
                        password: password,
                        remember: remember,
                    },
                    success: function (data) {
                        if (data.status == 'invalid') {
                            el.text('Login')
                            formContainer.find('.error-wrap').html('<div class="alert alert-danger list-none">' + data.msg + '</div>');
                        } else {
                            formContainer.find('.error-wrap').html('');
                            el.text('Login Success.. Redirecting ..');
                            location.reload();
                        }
                    },
                    error: function (data) {
                        var response = data.responseJSON.errors;
                        formContainer.find('.error-wrap').html('<ul class="alert alert-danger list-none"></ul>');
                        $.each(response, function (value, index) {
                            formContainer.find('.error-wrap ul').append('<li>' + index + '</li>');
                        });
                        el.text('Login');
                    }
                });
            });

        })(jQuery)
    </script>
    <script>
                $(document).on('click', '.next-step-btn', function (e) {
                    var infoTab = $('#nav-profile-tab');
                    infoTab.attr('disabled', false).removeClass('disabled').addClass('active').siblings().removeClass('active');
                    $('#nav-profile').addClass('show active').siblings().removeClass('show active');
                });
                $(document).on('click', '.payment-gateway-wrapper > ul > li', function (e) {
                    e.preventDefault();
                    var gateway = $(this).data('gateway');
                    var manual_gateway_tr = $('.manual_payment_transaction_field');
                    $(this).addClass('selected').siblings().removeClass('selected');
                    $('input[name="selected_payment_gateway"]').val(gateway);
                    if (gateway === 'manual_payment') {
                        manual_gateway_tr.show();
                    } else {
                        manual_gateway_tr.hide();
                    }
                });
                $(document).on('click', '.time-slot.date li', function (e) {
                    e.preventDefault();
                    var date = $(this).data('date');
                    date = date.split('-');
                    var showDate = new Date(date[2] + '-' + date[1] + '-' + date[0]);
                    $('.time_slog_date').text(showDate.toDateString());
                    $(this).toggleClass('selected').siblings().removeClass('selected');
                    $('input[name="booking_date"]').val($(this).data('date'));
                });
                $(document).on('click', '.time-slot.time li', function (e) {
                    e.preventDefault();
                    $(this).toggleClass('selected').siblings().removeClass('selected');
                    $('input[name="booking_time_id"]').val($(this).data('id'));
                });
                $(document).on('click', '#appointment_ratings', function (e) {
                    e.preventDefault();
                    var myForm = document.getElementById('appointment_rating_form');
                    var formData = new FormData(myForm);

                    $.ajax({
                        type: "POST",
                        url: "https://xgenious.com/laravel/attorg/appointment-review",
                        data: formData,
                        processData: false,
                        contentType: false,
                        beforeSend: function () {
                            $('#appointment_ratings').children('i').removeClass('d-none');
                        },
                        success: function (data) {
                            var errMsgContainer = $('#appointment_rating_form').find('.error-message');
                            $('#appointment_ratings').children('i').addClass('d-none');
                            errMsgContainer.html('');
                            errMsgContainer.append('<div class="alert alert-' + data.type + '">' + data.msg + '</div>');

                        },
                        error: function (data) {
                            var error = data.responseJSON;
                            var errMsgContainer = $('#appointment_rating_form').find('.error-message');
                            errMsgContainer.html('');
                            $.each(error.errors, function (index, value) {
                                errMsgContainer.append('<div class="alert alert-danger">' + value + '</div>');
                            });
                            $('#appointment_ratings').children('i').addClass('d-none');
                        }
                    });
                });
            })(jQuery);
    </script>

    <script type="text/javascript">
        (function ($) {
            "use strict"
            $(document).ready(function () {
                $(document).on('change', '#langchange', function (e) {
                    $.ajax({
                        url: "https://xgenious.com/laravel/attorg/lang",
                        type: "GET",
                        data: {
                            'lang': $(this).val()
                        },
                        success: function (data) {
                            location.reload();
                        }
                    })
                });
            });

        }(jQuery));
    </script>


    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = "https://embed.tawk.to/5e0b3e167e39ea1242a27b69/default";
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <footer class="footer-area">
        <div class="footer-top padding-top-100 padding-bottom-65">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class=" footer-widget widget">
                            <div class="footer-widget widget">
                                <div class="about_us_widget style-01"><img
                                        src="assets/uploads/media-uploader/logo1621240982.png" class="footer-logo"
                                        alt />
                                    <p>Stimulated discretion impossible admiration in particular conviction up..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class=" footer-widget widget">
                            <div class="widget_recent_posts style-01">
                                <h4 class="widget-title style-01">Recent Post</h4>
                                <ul class="recent_post_item">
                                    <li class="single-recent-post-item">
                                        <div class="thumb"><img
                                                src="assets/uploads/media-uploader/thumb-new-blog-3-min1622622910.png"
                                                alt /></div>
                                        <div class="content">
                                            <h4 class="title"><a href="/raise-your-voice">Raise
                                                    your voice against laws.</a></h4>
                                            <span class="time"> <i class="far fa-calendar-alt "></i>15 July 2023</span>
                                        </div>
                                    </li>
                                    <li class="single-recent-post-item">
                                        <div class="thumb"><img
                                                src="assets/uploads/media-uploader/thumb-new-blog-4-min1622622910.png"
                                                alt /></div>
                                        <div class="content">
                                            <h4 class="title"><a href="/allow-miles">Allow
                                                    miles wound place the leave.</a></h4>
                                            <span class="time"> <i class="far fa-calendar-alt "></i>19 July 2023</span>
                                        </div>
                                    </li>
                                </ul>
                            </div><br>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class=" footer-widget widget">
                            <div class="footer-widget widget widget_nav_menu">
                                <h4 class="widget-title">Useful Links</h4>
                                <ul>
                                    <li>
                                        <a href="/about-us">About Us</a>
                                    </li>
                                    <li>
                                        <a href="/contact-us">Contact Us</a>
                                    </li>
                                    <li class=" current-menu-item ">
                                        <a href="/practice-area">Practice Area</a>
                                    </li>
                                    <li>
                                        <a href="/appointment">Appointment</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class=" footer-widget widget">
                            <h4 class="widget-title">Contact us</h4>
                            <ul class="contact_info_list">
                                <li class="single-info-item">
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="details">
                                        66 Brooklyn street, New York
                                    </div>
                                </li>
                                <li class="single-info-item">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="details">
                                        +458 123 657
                                    </div>
                                </li>
                                <li class="single-info-item">
                                    <div class="icon">
                                        <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <div class="details">
                                        <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="85e6eaebf1e4e6f1c5fde2e0ebeceaf0f6abe6eae8">[email&#160;protected]</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-area-inner">
                            © 2023 All right reserved by Attorlytic
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>


    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                    <circle class="length" fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28">
                    </circle>
                </svg>
                <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                    <circle fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
                </svg>
                <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                    <circle fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
                </svg>
                <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                    <circle fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
                </svg>
            </div>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script script src="assets/frontend/js/bootstrap.min.js"></script>
    <script src="assets/common/js/jquery-3.6.0.min.js"></script>
    <script src="assets/common/js/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/frontend/js/jquery.magnific-popup.js"></script>
    <script src="assets/frontend/js/wow.min.js"></script>
    <script src="assets/frontend/js/owl.carousel.min.js"></script>
    <script src="assets/frontend/js/waypoints.min.js"></script>
    <script src="assets/frontend/js/jquery.counterup.min.js"></script>
    <script src="assets/frontend/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/frontend/js/isotope.pkgd.min.js"></script>
    <script src="assets/frontend/js/dynamic-script.js"></script>
    <script src="assets/frontend/js/bootstrap.bundle.min.js"></script>
    <script src="assets/frontend/js/main.js"></script>
</body>

</html>