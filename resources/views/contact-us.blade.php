@extends('master')
@section('header')
    <title>Attorlytic - Contact Us</title>
    <div class="breadcrumb-area"
        style="background-image: url(assets/uploads/media-uploader/new-pa-31622623781.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title"> Contact Us
                        </h2>
                        <ul class="page-list">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#"> Contact Us
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content our-attoryney padding-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content-area">
                        <div class="section-title desktop-left margin-bottom-55">
                            <h3 class="title">Get In Touch</h3>
                            <p>Instantly cordially far intention recommend estimable yet her his. Stimulated discretion
                                impossible admiration in particular conviction up. </p>
                        </div>
                        <ul class="contact-info-list">
                            <li class="single-info-item">
                                <div class="icon">
                                    <i class="fa fa-home mt-3"></i>
                                </div>
                                <div class="content">
                                    <p class="details">
                                        143 castle road 517 <br>
                                        district, kiyev port south Canada<br>
                                    </p>
                                </div>
                            </li>
                            <li class="single-info-item">
                                <div class="icon">
                                    <i class="fa fa-phone mt-3"></i>
                                </div>
                                <div class="content">
                                    <p class="details">
                                        +3 123 456 789 <br>
                                        +1 222 345 342<br>
                                    </p>
                                </div>
                            </li>
                            <li class="single-info-item">
                                <div class="icon">
                                    <i class="fa fa-envelope mt-3"></i>
                                </div>
                                <div class="content">
                                    <p class="details">
                                        <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="4c25222a230c3523393e212d2520622f2321">[email&#160;protected]</a>
                                        <br>
                                        <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                            data-cfemail="4a03242c250a33253f38272b23267864292527">[email&#160;protected]</a><br>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="righti-content-area">
                        <div class="contact-page-form-wrap">
                            <form action="contact-message" method="POST"
                                class="contact-page-form style-01" id="contact_us_form">
                                <input type="hidden" name="captcha_token" id="gcaptcha_token">
                                <input type="hidden" name="_token" value="UoYFFQ6Haw3zXyoOH6rUL9lxTMZpw9hZMnn6L96D">
                                <div class="error-message margin-bottom-20"></div>
                                <div class="form-group"> <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Your Name"></div>
                                <div class="form-group"> <input type="text" id="subject" name="subject"
                                        class="form-control" placeholder="Subject"></div>
                                <div class="form-group"> <input type="email" id="email" name="email"
                                        class="form-control" placeholder="Email"></div>
                                <div class="form-group"> <input type="tel" id="phone" name="phone" class="form-control"
                                        placeholder="Phone"></div>
                                <div class="form-group textarea"><textarea name="message" id="message" cols="30"
                                        rows="10" class="form-control" placeholder="Your Message"></textarea></div>
                                <div class="btn-wrapper">
                                    <button class="boxed-btn btn-block" id="contact_us_submit_btn"><span>Submit
                                            Message</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection