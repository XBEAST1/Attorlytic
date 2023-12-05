@extends('master')
@section('header')
    <title>Attorlytic - Consulation</title>
    <div class="breadcrumb-area"
        style="background-image: url(assets/uploads/media-uploader/new-pa-31622623781.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title"> Free Consulation
                        </h2>
                        <ul class="page-list">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#"> Free Consulation
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="quote-content-area padding-top-70">
                <h2 class="quote-title my-4 text-center">Get Free Consulation</h2>
                <form action="consulation" method="post"
                    enctype="multipart/form-data" class="contact-form quote-form">
                    <input type="hidden" name="_token" value="UoYFFQ6Haw3zXyoOH6rUL9lxTMZpw9hZMnn6L96D"> <input
                        type="hidden" name="captcha_token" id="gcaptcha_token">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group"> <input type="text" id="name" name="name" class="form-control"
                                    placeholder="Your Name"></div>
                            <div class="form-group mt-3"> <input type="text" id="subject" name="subject" class="form-control"
                                    placeholder="Your Subject"></div>
                            <div class="form-group mt-3"> <input type="email" id="email" name="email" class="form-control"
                                    placeholder="Your Email"></div>
                            <div class="form-group mt-3 file"> <label for="file">File</label> <input type="file" id="file"
                                    name="file" class="form-control"> <span class="help-info">Accept File Type:
                                    jpg,jpeg,png</span></div>
                            <div class="form-group mt-3 textarea"><textarea name="message" id="message" cols="30" rows="10"
                                    class="form-control" placeholder="Your Message"></textarea></div>
                        </div>
                        <div class="col-lg-12 mb-5 pb-5">
                            <div class="btn-wrapper text-center">
                                <button class="submit-btn mt-3" type="submit">Make Consulation</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
@endsection