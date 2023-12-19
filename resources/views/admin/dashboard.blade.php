<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="assets/uploads/media-uploader/favicon.png" type="image/png">
    <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/frontend/css/admin.css">
</head>

<body>
    <div id="sidebar" class="show">
        <a href="/" class="logo">
            <img src="assets/uploads/media-uploader/logo1621240982.png" alt />
        </a>
        <div id="sidebar-toggle-btn">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
          </div>
        <h2 id="admin-heading">Admin Panel</h2>
        <div class="side-pages mt-5">
            <a href="home" id="dashboard">Dashboard</a>
            <a href="addprofile" id="add-profile">Add Profile</a>
            <a href="updateprofile" id="update-profile">Update Profile</a>
            <a href="deleteprofile" id="delete-profile">Delete Profile</a>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <div class="input-group dropup">
                <button class="btn btn-navigation btn-outline-secondary dropdown-toggle ms-4" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">{{ auth()->user()->name }}</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="profile">Settings</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                </ul>
            </div>
        </form>
    </div>
    <div id="content">
        <h2 id="dashboard-heading">Appointment Panel</h2>
        <table class="table table-dark w-100 mx-auto table-hover table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Day</th>
                    <th>Time</th>
                    <th>Accept</th>
                    <th>Reject</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->client_relation->name }}</td>
                    <td>{{ $booking->day }}</td>
                    <td>{{ $booking->time }}</td>
                    <td><a href="{{ route ( 'deletebooking', $booking->id) }}" class="btn btn-success">Accept</a></td>
                    <td><a href="{{ route ( 'deletebooking', $booking->id) }}" class="btn btn-danger">Reject</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('sidebar-toggle-btn');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('show');
        });
    </script>
    <script src="assets/frontend/js/bootstrap.bundle.min.js"></script>
</body>

</html>