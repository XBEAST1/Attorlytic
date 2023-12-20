@extends('admin.masteradmin')
@section('main')
@if($profiledata)

<title>Delete Profile</title>
<form action="deleteprofile" method="post" enctype="multipart/form-data">
    @csrf
    <div id="content">
        <h1 id="profile-heading">Delete Profile</h1>
        <button class="mt-5 w-100 btn btn-danger p-4">Delete Profile</button>
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
@endsection