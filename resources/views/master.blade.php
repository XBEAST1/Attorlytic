<!DOCTYPE html>
<html lang="en_GB" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/frontend/css/style.css">

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

    {{-- Footer --}}

    @yield('footer')
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