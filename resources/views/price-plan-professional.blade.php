@extends('master')
@section('header')
<title>Attorlytic - Price Plan Professional</title>
<div class="breadcrumb-area" style="background-image: url(assets/uploads/media-uploader/new-pa-31622623781.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner">
                    <h2 class="page-title"> Order For : Professional
                    </h2>
                    <ul class="page-list">
                        <li><a href="/">Home</a></li>
                        <li><a href="#"> Order For : Professional
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="order-service-page-content-area padding-100">
    <div class="container">
        <div class="row reorder-xs justify-content-between ">
            <div class="col-lg-6">
                <div class="order-content-area">
                    <h3 class="order-title">Order Information</h3>
                    <div class="order-tab-wrap">
                        <nav>
                            <div class="nav nav-tabs" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                    role="tab" aria-selected="true"><i class="fas fa-user"></i></a>
                            </div>
                        </nav>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel">
                                <div class="login-form">
                                    <form class="contact-page-form style-01" method="POST"
                                        action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Username" input type="text"
                                                required id="email" type="email" name="email" :value="old('email')"
                                                required autofocus autocomplete="username">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Password" required id="password"
                                                type="password" name="password" required
                                                autocomplete="current-password">
                                        </div>
                                        <div class="form-group btn-wrapper">
                                            <button class="boxed-btn btn-saas btn-block" id="login_btn"
                                                type="submit">Login</button>
                                        </div>
                                        <div class="row mb-4 rmber-area">
                                            <div class="col-6">
                                                <div class="custom-control custom-checkbox ">
                                                    <input type="checkbox" id="remember_me" type="checkbox"
                                                        name="remember" class="custom-control-input" id="remember">
                                                    <label class="custom-control-label" for="remember">Remember
                                                        Me</label>
                                                </div>
                                            </div>
                                            <div class="col-6 text-right">
                                                <a class="d-block" href="register">Create new
                                                    account?</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="form-group btn-wrapper">
                                <button class="next-step-button btn-small ds-none" style="display: none" id="login_btn"
                                    type="submit">Next Step</button>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="nav-profile" role="tabpanel">
                            <form action="place-order" method="post" enctype="multipart/form-data"
                                class="contact-page-form style-01">
                                <input type="hidden" name="_token" value="pq6G26W6H6D08kC3vzalTOBLpgVmAwBJSKkTzReK">
                                <input type="hidden" name="package" value="3">
                                <input type="hidden" name="pkg_user_name" id="pkg_user_name" value>
                                <input type="hidden" name="pkg_user_email" id="pkg_user_email" value>
                                <div class="form-group"> <input type="text" id="order_name" name="name"
                                        class="form-control" placeholder="Name" required></div>
                                <div class="form-group"> <input type="email" id="order_email" name="email"
                                        class="form-control" placeholder="Your Email" required></div>
                                <div class="form-group textarea"><textarea name="message" id="message" cols="30"
                                        rows="10" class="form-control" placeholder="Your Message"></textarea></div>
                                <div class="payment-gateway-wrapper"><input type="hidden"
                                        name="selected_payment_gateway" value="manual_payment">
                                    <ul>
                                        <li data-gateway="paypal">
                                            <div class="img-select"><img
                                                    src="assets/uploads/media-uploader/download15874384681621247808.png"
                                                    alt /></div>
                                        </li>
                                        <li data-gateway="manual_payment" class="selected">
                                            <div class="img-select"><img
                                                    src="assets/uploads/media-uploader/545341-16078241-2921031-97b572bd-image15878277771621247807.png"
                                                    alt /></div>
                                        </li>
                                        <li data-gateway="mollie">
                                            <div class="img-select"><img
                                                    src="assets/uploads/media-uploader/grid-mollie-vector-logo16018111111621247808.png"
                                                    alt /></div>
                                        </li>
                                        <li data-gateway="paytm">
                                            <div class="img-select"><img
                                                    src="assets/uploads/media-uploader/grid-paytm-logo15874385061621247808.png"
                                                    alt /></div>
                                        </li>
                                        <li data-gateway="stripe">
                                            <div class="img-select"><img
                                                    src="assets/uploads/media-uploader/grid-grid-social159273745816018111891621247808.png"
                                                    alt /></div>
                                        </li>
                                        <li data-gateway="razorpay">
                                            <div class="img-select"><img
                                                    src="assets/uploads/media-uploader/grid-razorpay-the-new-epayment-that-will-break-everything-in-2019159273745916018116801621247809.png"
                                                    alt /></div>
                                        </li>
                                        <li data-gateway="flutterwave">
                                            <div class="img-select"><img
                                                    src="assets/uploads/media-uploader/flutterwave-imtc159648231616018111741621247808.jpg"
                                                    alt /></div>
                                        </li>
                                        <li data-gateway="paystack">
                                            <div class="img-select"><img
                                                    src="assets/uploads/media-uploader/1-nhszihuonirsqtpgelkofg159297984916018111581621247807.jpeg"
                                                    alt /></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-group btn-wrapper">
                                    <button class="boxed-btn btn-saas btn-block" type="submit" id="order_pkg_btn">Order
                                        Package</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="single-price-plan-01">
                <div class="price-header">
                    <h3 class="title">Professional</h3>
                    <div class="price"><span class="sign">$</span>49<span class="month">/mo</span></div>
                </div>
                <div class="price-body">
                    <ul>
                        <li><i class="fa fa-check success"></i> lower arm towards the viewer </li>
                        <li><i class="fa fa-check success"></i> Gregor then turned to look the </li>
                        <li><i class="fa fa-check success"></i> window at the dull weather. </li>
                        <li><i class="fa fa-check success"></i> 1x Dashboard Access </li>
                        <li><i class="fa fa-check success"></i> 3x Case Listings</li>
                    </ul>
                </div>
                <div class="price-footer">
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection