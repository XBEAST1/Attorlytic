<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="admin/fonts/icomoon/style.css">
    <link rel="stylesheet" href="admin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/css/style.css">
</head>

<body>
    <aside class="sidebar">
        <div class="toggle">
            <a href="#" class="burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
                <span></span>
            </a>
        </div>
        <div class="side-inner">
            <a href="/" class="logo ms-4">
                <img src="assets/uploads/media-uploader/logo1621240982.png" alt />
            </a>
            <div class="profile">
                @if($image && $image->image)
                <img src="images/{{$image->image}}" alt="Image" class="img-fluid">
                @else
                <img src="assets/uploads/media-uploader/default.png" alt="Default Image" class="img-fluid">
                @endif
                <h3 class="name">{{ auth()->user()->name }}</h3>
                <span class="passion">Lawyer</span>
            </div>


            <div class="nav-menu">
                <ul>
                    <li class="accordion">
                        <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                            aria-controls="collapseOne" class="collapsible">
                            <span class="icon-home me-2"></span>Home
                        </a>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                            <div>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about-us">About Us</a></li>
                                    <li><a href="/practice-area">Practice Area</a></li>
                                    <li><a href="/case">Case</a></li>
                                    <li><a href="/appointment">Appointment</a></li>
                                    <li><a href="/blog">Blog</a></li>
                                    <li><a href="/contact-us">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="home"><span class="icon-dashboard me-2"></span>Dashboard</a></li>
                    <li><a href="addprofile"><span class="icon-user me-2"></span>Add Profile</a></li>
                    <li><a href="updateprofile"><span class="icon-user me-2"></span>Update Profile</a></li>
                    <li><a href="deleteprofile"><span class="icon-user me-2"></span>Delete Profile</a></li>
                    <li><a href="profile"><span class="icon-settings me-2"></span>Settings</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <li><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                href="{{ route('logout') }}"><span class="icon-sign-out me-2"></span>Sign out</a></li>
                    </form>
                </ul>
            </div>
        </div>

    </aside>
    <main>
        <div class="site-section">
            <div class="container">
                @yield('main')
            </div>
        </div>
    </main>
    <script src="assets/frontend/js/bootstrap.bundle.min.js"></script>
    <script src="admin/js/jquery-3.3.1.min.js"></script>
    <script src="admin/js/popper.min.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/js/main.js"></script>
</body>

</html>