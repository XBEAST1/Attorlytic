<link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/frontend/css/style.css">
<link rel="stylesheet" href="assets/frontend/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/frontend/css/form.css">
<style>

</style>
<title>Attorlytic Profile Management</title>
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
<div class="ms-5">
    @include('profile.partials.update-profile-information-form')
</div>
<div class="ms-5">
    @include('profile.partials.update-password-form')
</div>
<div class="ms-5">
    @include('profile.partials.delete-user-form')
</div>
<script src="assets/frontend/js/bootstrap.bundle.min.js"></script>
