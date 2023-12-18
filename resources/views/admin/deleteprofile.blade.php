<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Profile</title>
    <link rel="icon" href="assets/uploads/media-uploader/favicon.png" type="image/png">
    <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/frontend/css/admin.css">
</head>

<body>
    <div id="sidebar">
        <a href="/" class="logo">
            <img src="assets/uploads/media-uploader/logo1621240982.png" alt />
        </a>
        <h2 id="admin-heading">Admin Panel</h2>
        <div class="side-pages mt-5">
            <a href="home" id="dashboard">Dashboard</a>
            <a href="addprofile" id="add-profile">Add Profile</a>
            <a href="updateprofile" id="update-profile">Update Profile</a>
            <a href="deleteprofile" id="delete-profile">Delete Profile</a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <div class="input-group dropup ms-4">
                <button class="btn btn-navigation btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">{{ auth()->user()->name }}</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="profile">Settings</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                </ul>
            </div>
        </form>
    </div>
    @if($profiledata)
    <form action="deleteprofile" method="post" enctype="multipart/form-data">
        @csrf
        <div id="content">
            <h2 id="profile-heading">Delete Profile</h2>
            <button class="mt-5 ms-3 btn btn-danger p-4">Delete Profile</button>
        </div>
    </form>
    <script src="assets/frontend/js/bootstrap.bundle.min.js"></script>
    @else
    <div id="content">
        <div class="alert alert-danger alert-dismissible fade show">
            <strong>Error!</strong> Profile Does Not Exist.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    </div>
    @endif
</body>

</html>