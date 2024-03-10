<!DOCTYPE html>
<html lang="en_GB" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="test">
    <meta name="tags" content="test ">
    <meta name="description" content="test">
    <link rel="icon" href="{{ asset('assets/uploads/media-uploader/favicon.png') }}" type="image/png">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Merriweather:wght@400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <script src="{{ asset('assets/common/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/common/js/jquery-migrate-3.3.2.min.js') }}"></script>


    <style>
        :root {
            --main-color-one: #d0bf90;
            --secondary-color: #30373f;
            --heading-font: "Merriweather", sans-serif;
            --body-font: "Open Sans", sans-serif;
        }

        .ms-3 {
            margin-left: 1rem !important;
        }

        .ms-5 {
            margin-left: 3rem !important;
        }

        /* Custom Alert Styles */
        .alert {
            padding: 15px;
            border: 1px solid transparent;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        /* Close button styles */
        .alert button.close {
            position: relative;
            top: -2px;
            right: -21px;
            line-height: 20px;
            padding: 0;
            background-color: transparent;
            border: 0;
            font-size: 24px;
            cursor: pointer;
        }
    </style>
    <title> {{ $booking->firstname }} {{ $booking->lastname }} - Attorg</title>
</head>

<body>
    <nav class="navbar navbar-area navbar-expand-lg nav-style-01 fixed-top">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <a href="/" class="logo">
                        <img src="{{ asset('assets/uploads/media-uploader/logo1621240982.png') }}" alt />
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
                    <li>
                        <a href="/case">Case</a>
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
                <div id="nav-login">
                    @auth
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <div class="input-group ms-5">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">{{ auth()->user()->name }}</button>
                        <ul class="dropdown-menu">
                            @if(auth()->user()->usertype == 'admin')
                            <li><a class="dropdown-item" href="{{ route('home') }}">Admin Panel</a></li>
                            @endif
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Settings</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            </li>
                        </ul>
                    </div>
                    @else
                    <a class="btn ms-5" href="{{ route('login') }}">Login</a>
                    <a class="btn ms-3" href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
    <div class="breadcrumb-area" style="background-image: url(/assets/uploads/media-uploader/new-pa-31622623781.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title"> {{ $booking->firstname }} {{ $booking->lastname }}
                        </h2>
                        <ul class="page-list">
                            <li><a href="/">Home</a></li>
                            <li><a href="#"> {{ $booking->firstname }} {{ $booking->lastname }}
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(session('status') && session('message') && session('status') === 'success')
    <div class="alert alert-success alert-dismissible fade show">
        <strong>Success!</strong> Appointment Booked Successfully!
    </div>
    @endif
    @if(session('status') && session('message') && session('status') === 'dayerror')
    <div class="alert alert-danger alert-dismissible fade show">
        <strong>Error!</strong> Please Select a Day.
    </div>
    @endif
    @if(session('status') && session('message') && session('status') === 'timeerror')
    <div class="alert alert-danger alert-dismissible fade show">
        <strong>Error!</strong> Please Select a Time.
    </div>
    @endif
    @if(session('status') && session('message') && session('status') === 'existingerror')
    <div class="alert alert-danger alert-dismissible fade show">
        <strong>Error!</strong> The selected time and day is already booked. Please choose another.
    </div>
    @endif
    <section class="blog-details-content-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="appointment-details-item">
                        <div class="top-part">
                            <div class="thumb">
                                <img src="/images/{{$booking->image}}" class="full" alt />
                            </div>
                            <div class="content">
                                <span class="designation">{{ $booking->educationinfo }}</span>
                                <h2 class="title">{{ $booking->firstname }} {{ $booking->lastname }}</h2>
                                <div class="short-description">{{ $booking->description }}</div>
                                <div class="location"><i class="fas fa-map-marked-alt"></i> {{$booking->city}},
                                    {{$booking->country}}</div>
                                <div class="price-wrap">
                                    <h4 class="price">Fee: <span>${{ $booking->fee }}</span></h4>
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
                                </div>
                            </nav>
                            <div class="tab-content">
                                <div class="tab-pane fade" id="nav-information" role="tabpanel">
                                    <div class="information-area-wrap">
                                        <div class="description-wrap">
                                            <h3 class="title">About Me</h3>
                                            <p>{{ $booking->about }}</p>
                                        </div>
                                        <div class="education-info">
                                            <h3 class="title">Education Info</h3>
                                            <ul class="circle-list">
                                                <li>{{ $booking->educationinfo }}</li>
                                            </ul>
                                        </div>
                                        <div class="additional-info">
                                            <h3 class="title">Additional Info</h3>
                                            <ul class="circle-list">
                                                <li>{{ $booking->additionalinfo }}</li>
                                            </ul>
                                        </div>
                                        <div class="specialised-info">
                                            <h3 class="title">Specialize Info</h3>
                                            <ul class="circle-list">
                                                <li>{{ $booking->specializeinfo }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="nav-booking" role="tabpanel">
                                    <div class="booking-wrap">
                                        <div class="left-part">
                                            <div class="date-time-block">
                                                <h4 class="title">Available On Days</h4>
                                                <ul class="time-slot date">
                                                    <li name="days[]" data-date="Monday">Monday</li>
                                                    <li name="days[]" data-date="Tuesday">Tuesday</li>
                                                    <li name="days[]" data-date="Webnesday">Webnesday
                                                    </li>
                                                    <li name="days[]" data-date="Thursday">Thursday
                                                    </li>
                                                    <li name="days[]" data-date="Friday">Friday</li>
                                                    <li name="days[]" data-date="Saturday">Saturday
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="date-time-block">
                                                <h4 class="title">Available On Time</h4>
                                                <ul class="time-slot time">
                                                    <li name="time" data-id="8:00AM - 9:00AM">8:00AM -
                                                        9:00AM</li>
                                                    <li name="time" data-id="9:00AM - 10:00AM">9:00AM -
                                                        10:00AM</li>
                                                    <li name="time" data-id="10:00AM - 11:00AM">10:00AM -
                                                        11:00AM</li>
                                                    <li name="time" data-id="11:00AM - 12:00PM">11:00AM -
                                                        12:00PM</li>
                                                    <li name="time" data-id="1:00PM - 2:00PM">1:00PM -
                                                        2:00PM</li>
                                                    <li name="time" data-id="2:00PM - 3:00PM">2:00PM -
                                                        3:00PM</li>
                                                    <li name="time" data-id="3:00PM - 4:00PM">3:00PM -
                                                        4:00PM</li>
                                                    <li name="time" data-id="4:00PM - 5:00PM">4:00PM -
                                                        5:00PM</li>
                                                    <li name="time" data-id="5:00PM - 6:00PM">5:00PM -
                                                        6:00PM</li>
                                                    <li name="time" data-id="6:00PM - 7:00PM">6:00PM -
                                                        7:00PM</li>
                                                    <li name="time" data-id="7:00PM - 8:00PM">7:00PM -
                                                        8:00PM</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="right-part">
                                            <div class="form-wrapper">
                                                <div class="billing-details-wrapper">
                                                    <div class="order-tab-wrap">
                                                        <nav>
                                                            <div class="nav nav-tabs" role="tablist">
                                                                <a class="nav-item nav-link   active " disabled
                                                                    id="nav-profile-tab" data-toggle="tab"
                                                                    href="#nav-profile" role="tab"
                                                                    aria-controls="nav-profile" aria-selected="false"><i
                                                                        class="fas fa-address-book"></i></a>
                                                            </div>
                                                            <div class="tab-content">
                                                                <div class="tab-pane fade show active" id="nav-home"
                                                                    role="tabpanel">
                                                                    @auth
                                                                    <form
                                                                        action="{{ route('bookingplace', ['id' => $id]) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="selected_day"
                                                                            id="selected_day" value="">
                                                                        <input type="hidden" name="selected_time"
                                                                            id="selected_time" value="">
                                                                        <input type="hidden" name="user_id"
                                                                            value="{{ auth()->user()->id }}">
                                                                        <div class="mt-5 form-group btn-wrapper">
                                                                            <button id="book-btn"
                                                                                class="boxed-btn btn-saas btn-block"
                                                                                type="submit">Book Appointment</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                @else
                                                                <div class="login-form">
                                                                    <form class="contact-page-form style-01"
                                                                        method="POST" action="{{ route('login') }}">
                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <input class="form-control"
                                                                                placeholder="Username" input type="text"
                                                                                required id="email" type="email"
                                                                                name="email" :value="old('email')"
                                                                                required autofocus
                                                                                autocomplete="username">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input class="form-control"
                                                                                placeholder="Password" required
                                                                                id="password" type="password"
                                                                                name="password" required
                                                                                autocomplete="current-password">
                                                                        </div>
                                                                        <div class="form-group btn-wrapper">
                                                                            <button class="boxed-btn btn-saas btn-block"
                                                                                id="login_btn"
                                                                                type="submit">Login</button>
                                                                        </div>
                                                                        <div class="row mb-4 rmber-area">
                                                                            <div class="col-6">
                                                                                <div
                                                                                    class="custom-control custom-checkbox ">
                                                                                    <input type="checkbox"
                                                                                        id="remember_me" type="checkbox"
                                                                                        name="remember"
                                                                                        class="custom-control-input"
                                                                                        id="remember">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6 text-right">
                                                                                <a class="d-block"
                                                                                    href="{{ route('register') }}">Create
                                                                                    new
                                                                                    account?</a>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                    @endauth
                                                                </div>
                                                            </div>
                                                        </nav>
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
            </div>
    </section>

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
                                            <h4 class="title"><a href="blog/raise-your-voice-against-laws-58/5">Raise
                                                    your voice against laws.</a></h4>
                                            <span class="time"> <i class="far fa-calendar-alt "></i>23 May 2021</span>
                                        </div>
                                    </li>
                                    <li class="single-recent-post-item">
                                        <div class="thumb"><img
                                                src="assets/uploads/media-uploader/thumb-new-blog-4-min1622622910.png"
                                                alt /></div>
                                        <div class="content">
                                            <h4 class="title"><a href="blog/allow-miles-wound-place-the-leave/4">Allow
                                                    miles wound place the leave.</a></h4>
                                            <span class="time"> <i class="far fa-calendar-alt "></i>23 May 2021</span>
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
                                        <a href="about-us">About Us</a>
                                    </li>
                                    <li>
                                        <a href="contact-us">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="practce-area">Practice Area</a>
                                    </li>
                                    <li>
                                        <a href="appointment">Appointment</a>
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
                                            data-cfemail="33505c5d47525047734b54565d5a5c46401d505c5e">[email&#160;protected]</a>
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
    <script>
        // Add this script to update hidden input fields
        document.addEventListener('DOMContentLoaded', function () {
            let selectedDay = null;
            let selectedTime = null;

            // Add click event listener to days
            document.querySelectorAll('.time-slot.date li').forEach(function (day) {
                day.addEventListener('click', function () {
                    selectedDay = this.dataset.date;
                    updateHiddenInputs();
                });
            });

            // Add click event listener to times
            document.querySelectorAll('.time-slot.time li').forEach(function (time) {
                time.addEventListener('click', function () {
                    selectedTime = this.dataset.id;
                    updateHiddenInputs();
                });
            });

            function updateHiddenInputs() {
                document.getElementById('selected_day').value = selectedDay;
                document.getElementById('selected_time').value = selectedTime;
            }
        });
    </script>

    <script data-cfasync="false" src="{{ asset('/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/common/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/common/js/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    <script>
        (function ($) {
            "use strict";
            $(document).on('change', '#guest_logout', function (e) {
                e.preventDefault();
                var infoTab = $('#nav-profile-tab');
                var nextBtn = $('.next-step-btn');
                if ($(this).is(':checked')) {
                    $('.booking-wrap .login-form').hide();
                    infoTab.attr('disabled', false).removeClass('disabled');
                    nextBtn.show();

                } else {
                    $('.login-form').show();
                    infoTab.attr('disabled', true).addClass('disabled');
                    nextBtn.hide();
                }
            });
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
                    url: "appointment-review",
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


</body>

</html>
