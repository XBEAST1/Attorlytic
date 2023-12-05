@extends('master')
@section('header')
    <title>Attorlytic - Appointment</title>
    <div class="breadcrumb-area"
        style="background-image: url(assets/uploads/media-uploader/new-pa-31622623781.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title"> Appointment
                        </h2>
                        <ul class="page-list">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#"> Appointment
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content our-attoryney padding-top-120 padding-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="widget_search">
                            <select name="category" class="form-control" style="height:45px;">
                                <option value>select category</option>
                                <option value="7">Real State</option>
                                <option value="8">Personal</option>
                                <option value="9">Criminal</option>
                                <option value="10">Business</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="widget_search">
                            <select name="sorting" class="form-control" style="height:45px;">
                                <option value="latest">Latest</option>
                                <option value="oldest">Oldest</option>
                                <option value="top_rated">Best Rated</option>
                                <option value="low_price">Low Price</option>
                                <option value="high_price">High Price</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget_search appointment-search">
                        <form method="get" class="search-form">
                            <input type="hidden" name="cat" value>
                            <input type="hidden" name="sort" value>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="single-our-attoryney-item margin-bottom-30">
                        <div class="img-wrapper">
                            <div class="bg-image"
                                style="background-image: url(assets/uploads/media-uploader/ab-11622624236.png);">
                            </div>
                        </div>
                        <div class="content">
                            <a href="/rene-raniels">
                                <h4 class="title">Rene Raniels</h4>
                            </a>
                            <span class="designation">Assosiate, Attorlytic</span>
                            <span class="separator"></span>
                            <span class="location"><i class="fas fa-map-marker-alt mx-2"></i>Sydney, Australia</span>
                            <p>Travelling salesman - and above it...</p>
                            <div class="btn-wrapper my-3">
                                <a href="/rene-raniels"
                                    class="boxed-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-our-attoryney-item margin-bottom-30">
                        <div class="img-wrapper">
                            <div class="bg-image"
                                style="background-image: url(assets/uploads/media-uploader/ab-21622624236.png);">
                            </div>
                        </div>
                        <div class="content">
                            <a href="/ruth-christian">
                                <h4 class="title">Ruth Christian</h4>
                            </a>
                            <span class="designation">Attorlytic</span>
                            <span class="separator"></span>
                            <span class="location"><i class="fas fa-map-marker-alt mx-2"></i>Auckland, Ireland</span>
                            <p>Travelling salesman - and above it...</p>
                            <div class="btn-wrapper my-3">
                                <a href="/ruth-christian"
                                    class="boxed-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-our-attoryney-item margin-bottom-30">
                        <div class="img-wrapper">
                            <div class="bg-image"
                                style="background-image: url(assets/uploads/media-uploader/ab-31622624236.png);">
                            </div>
                        </div>
                        <div class="content">
                            <a href="/gregory-kaster">
                                <h4 class="title">Gregory Kaster</h4>
                            </a>
                            <span class="designation">Assosiate, Attorlytic</span>
                            <span class="separator"></span>
                            <span class="location"><i class="fas fa-map-marker-alt mx-2"></i>New York</span>
                            <p>Travelling salesman - and above it...</p>
                            <div class="btn-wrapper my-3">
                                <a href="/gregory-kaster"
                                    class="boxed-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-our-attoryney-item margin-bottom-30">
                        <div class="img-wrapper">
                            <div class="bg-image"
                                style="background-image: url(assets/uploads/media-uploader/ab-41622624236.png);">
                            </div>
                        </div>
                        <div class="content">
                            <a href="/john-ierrante">
                                <h4 class="title">John Ierrante</h4>
                            </a>
                            <span class="designation">Director</span>
                            <span class="separator"></span>
                            <span class="location"><i class="fas fa-map-marker-alt mx-2"></i>London, England</span>
                            <p>Travelling salesman - and above it...</p>
                            <div class="btn-wrapper my-3">
                                <a href="/john-ierrante"
                                    class="boxed-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-our-attoryney-item margin-bottom-30">
                        <div class="img-wrapper">
                            <div class="bg-image"
                                style="background-image: url(assets/uploads/media-uploader/ab-51622624237.png);">
                            </div>
                        </div>
                        <div class="content">
                            <a href="/betty-doyle">
                                <h4 class="title">Betty Doyle</h4>
                            </a>
                            <span class="designation">Assosiate, Attorlytic</span>
                            <span class="separator"></span>
                            <span class="location"><i class="fas fa-map-marker-alt mx-2"></i>Melborn, Australia</span>
                            <p>Travelling salesman - and above it...</p>
                            <div class="btn-wrapper my-3">
                                <a href="/betty-doyle"
                                    class="boxed-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-our-attoryney-item margin-bottom-30">
                        <div class="img-wrapper">
                            <div class="bg-image"
                                style="background-image: url(assets/uploads/media-uploader/ab-61622624237.png);">
                            </div>
                        </div>
                        <div class="content">
                            <a href="/david-finch">
                                <h4 class="title">David Finch</h4>
                            </a>
                            <span class="designation">Assosiate, Attorlytic</span>
                            <span class="separator"></span>
                            <span class="location"><i class="fas fa-map-marker-alt mx-2"></i>Tehran, Iran</span>
                            <p>Travelling salesman - and above it...</p>
                            <div class="btn-wrapper my-3">
                                <a href="/david-finch"
                                    class="boxed-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <nav class="pagination-wrapper " aria-label="Page navigation ">
                    </nav>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
@endsection