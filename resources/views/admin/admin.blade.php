<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/frontend/css/admin.css">
</head>

<body>
    </head>

    <body>
        <div id="sidebar">
            <a href="/" class="logo">
                <img src="assets/uploads/media-uploader/logo1621240982.png" alt />
            </a>
            <h2 id="admin-heading">Admin Panel</h2>
            <div class="side-pages mt-5">
                <a href="home" id="add-profile">Add Profile</a>
                <a href="updateprofile" id="update-profile">Update Profile</a>
            </div>
        </div>
        <div id="content">
            <h2 id="profile-heading">Add Profile</h2>
            @if(session('status') && session('message') && session('status') === 'success')
            <div class="alert alert-success alert-dismissible fade show">
                <strong>Success!</strong> Profile Added Successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif

            @if(session('status') && session('message') && session('status') === 'error')
            <div class="alert alert-danger alert-dismissible fade show">
                <strong>Error!</strong> Please Fill All The Fields.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif
            <br>
            <form action="home" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                @csrf
                <div class="form-group">
                    <label for="username">First Name</label>
                    <label class="lastname" for="last name">Last Name</label> <br>
                    <input class="mt-2 rounded-5 p-2" type="text" class="form-control" name="firstname" id="firstname">
                    <input class="rounded-5 p-2 ms-3" type="text" class="form-control" name="lastname" id="lastname">
                </div>
                <br>
                <div class="form-group">
                    <label for="description">Description</label> <br>
                    <textarea class="mt-2 rounded-5 p-2" name="description" id="description" rows="5"></textarea>
                </div>
                <br>
                <h5>Gender</h5>
                <br>
                <div class="form-check">
                    <input type="radio" name="gender" value="male" id="male" class="form-check-input">
                    <label for="" class="form-check-label">Male</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="gender" value="female" id="female" class="ms-2 form-check-input">
                    <label for="" class="ms-2 form-check-label">Female</label>
                </div>
                <br>
                <br>
                <div class="form-group w-50">
                    <label class="form-label" for="image">Image</label> <br>
                    <input type="file" class="form-control file" name="image">
                </div>
                <br>
                <div class="form-group">
                    <label for="fee">Fee</label> <br>
                    <input class="mt-2 rounded-5 p-2" name="fee" type="text" class="form-control" id="fee">
                </div>
                <br>
                <div class="form-group">
                    <label for="country">Country</label>
                    <label class="city" for="lastname">City</label> <br>
                    <input class="mt-2 rounded-5 p-2" name="country" type="text" class="form-control" id="country">
                    <input class="mt-2 rounded-5 p-2 ms-3" name="city" type="text" class="form-control" id="city">
                </div>
                <br>
                <div class="form-group">
                    <label for="education-info">Education Info</label>
                    <label class="additional-info" for="additional-info">Additional Info</label>
                    <label class="specialize-info" for="specialize-info">Specialize Info</label> <br>
                    <input class="mt-2 rounded-5 p-2" name="educationinfo" type="text" class="form-control"
                        id="education-info">
                    <input class="mt-2 rounded-5 p-2 ms-2" name="additionalinfo" type="text" class="form-control"
                        id="additional-info">
                    <input class="mt-2 rounded-5 p-2 ms-2" name="specializeinfo" type="text" class="form-control"
                        id="specialize-info">
                </div>
                <br>
                <div class="form-group">
                    <label for="about">About</label> <br>
                    <textarea class="mt-2 rounded-5 p-2" name="about" id="about" rows="10"></textarea>
                </div>
                <br>
                <br>
                <button type="submit" value="add" class="form-button btn btn-light rounded-4 p-3">Submit</button>
            </form>
        </div>
        <script src="assets/frontend/js/bootstrap.bundle.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var successPopup = document.getElementById('success-popup');
                var errorPopup = document.getElementById('error-popup');

                if (successPopup) {
                    successPopup.style.display = 'block';
                    setTimeout(function () {
                        successPopup.style.display = 'none';
                    }, 5000);
                }

                if (errorPopup) {
                    errorPopup.style.display = 'block';
                    setTimeout(function () {
                        errorPopup.style.display = 'none';
                    }, 5000);
                }
            });
        </script>
    </body>

</html>