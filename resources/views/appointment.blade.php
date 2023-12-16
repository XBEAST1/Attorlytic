@extends('master')
@section('header')
<title>Attorlytic - Appointment</title>
<div class="breadcrumb-area" style="background-image: url(assets/uploads/media-uploader/new-pa-31622623781.png);">
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
            <div class="col-lg-6">
                <div class="widget-area">
                    <div class="widget_search">
                        <select name="category" id="category" class="form-control" style="height:45px;">
                            <option value="select category">Select Category</option>
                            <option value="Real State">Real State</option>
                            <option value="Personal">Personal</option>
                            <option value="Criminal">Criminal</option>
                            <option value="Business">Business</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="widget_search appointment-search">
                    <form method="get" action="{{ route('search') }}" class="search-form">
                        <div class="form-group">
                            <input type="text" name="search" class="form-control" placeholder="Search">
                        </div>
                        <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            @foreach ($lawyercards as $lawyercard)
            <div class="col-lg-6 lawyer-card {{$lawyercard->category}}">
                <div class="single-our-attoryney-item margin-bottom-30">
                    <div class="img-wrapper">
                        <div class="bg-image" style="background-image: url(images/{{$lawyercard->image}});">
                        </div>
                    </div>
                    <div class="content">
                        <a href="{{ route ('booking', $lawyercard->id) }}">
                            <h4 class="title">{{$lawyercard->firstname}} {{$lawyercard->lastname}}</h4>
                        </a>
                        <span class="designation">{{$lawyercard->educationinfo}}</span>
                        <span class="separator"></span>
                        <span class="location"><i class="fas fa-map-marker-alt mx-2"></i>{{$lawyercard->city}},
                            {{$lawyercard->country}}</span>
                        <p>{{ Str::words($lawyercard->description, 6) }}</p>
                        <div class="btn-wrapper my-3">
                            <a href="{{ route ('booking', $lawyercard->id) }}" class="boxed-btn">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-lg-12 text-center">
                <nav class="pagination-wrapper " aria-label="Page navigation ">
                </nav>
            </div>
        </div>
    </div>
</div>
<script src="assets/common/js/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('#category').change(function () {
            var selectedCategory = $(this).val();
            $('.lawyer-card').hide();

            if (selectedCategory === 'select category') {
                $('.lawyer-card').show();
            } else {
                var formattedCategory = selectedCategory.split(' ').join('');
                $('.' + formattedCategory).show();
            }
        });
    });
</script>
</body>

</html>
@endsection