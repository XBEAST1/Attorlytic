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
            <h2>Admin Panel</h2>
            <div class="side-pages mt-5">
                <a href="home" id="add-profile">Add Profile</a>
                <a href="updateprofile" id="update-profile">Update Profile</a>
            </div>
        </div>

        <div id="content">
            <h2>Update Profile</h2>
            <br>
            <form>
                <div class="form-group">
                    <label for="username">First Name</label>
                    <label class="lastname" for="last name">Last Name</label> <br>
                    <input class="mt-2 rounded-5 p-2" type="text" class="form-control" id="firstname">
                    <input class="rounded-5 p-2 ms-3" type="text" class="form-control" id="lastname">
                </div>
                <br>
                <div class="form-group">
                    <label for="description">Description</label> <br>
                    <textarea class="mt-2 rounded-5 p-2" id="description" rows="5"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="fee">Fee</label> <br>
                    <input class="mt-2 rounded-5 p-2" type="text" class="form-control" id="fee">
                </div>
                <br>
                <div class="form-group">
                    <label for="country">Country</label>
                    <label class="city" for="lastname">City</label> <br>
                    <input class="mt-2 rounded-5 p-2" type="text" class="form-control" id="country">
                    <input class="mt-2 rounded-5 p-2 ms-3" type="text" class="form-control" id="city">
                </div>
                <br>
                <div class="form-group">
                    <label for="education-info">Education Info</label>
                    <label class="additional-info" for="additional-info">Additional Info</label>
                    <label class="specialize-info" for="specialize-info">Specialize Info</label> <br>
                    <input class="mt-2 rounded-5 p-2" type="text" class="form-control" id="education-info">
                    <input class="mt-2 rounded-5 p-2 ms-2" type="text" class="form-control" id="additional-info">
                    <input class="mt-2 rounded-5 p-2 ms-2" type="text" class="form-control" id="specialize-info">
                </div>
                <br>
                <div class="form-group">
                    <label for="about">About</label> <br>
                    <textarea class="mt-2 rounded-5 p-2" id="about" rows="10"></textarea>
                </div>
                <br>
                <br>
                <button type="submit" class="form-button btn btn-light rounded-4 p-3">Submit</button>
            </form>
        </div>
    </body>

</html>