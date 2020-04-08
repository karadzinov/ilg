@extends('layouts.main')
@include('layouts.menu')
@section('content')

    <!-- breadcrumb start -->
    <!-- ================ -->
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="/">Почетна</a></li>
                <li class="active">{{ $referral->title }}</li>

            </ol>
        </div>
    </div>
    <!-- breadcrumb end -->



    <!-- main-container start -->
    <!-- ================ -->
    <section class="main-container padding-ver-clear">
        <div class="container pv-40">
            <div class="row">
                <div class="col-md-8 block clearfix">
                    <div class="owl-carousel content-slider-with-controls">

                        <div class="overlay-container overlay-visible">
                            <img src="/assets/img/referrals/{{ $referral->image }}"/>

                            <a href="/assets/img/referrals/{{ $referral->image }}"
                               class="popup-img overlay-link"><i class="icon-plus-1"></i></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-8">


                    <h1 class="title">{{ $referral->title }}</h1>
                    <div class="separator-2"></div>
                    {!! $referral->description !!}
                </div>

                <!-- main end -->
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div id="map-canvas"></div>
                </div>

            </div>
        </div>
    </section>
    <!-- main-container end -->


@endsection


@section('scripts')
    <!-- Google Maps -->
    <script>


                $(document).ready(function () {
// Google Maps


            map = new google.maps.Map(document.getElementById('map-canvas'), {
                center: {lat: {{ $referral->lat }}, lng: {{ $referral->lng }} },
                zoom: 15
            });

            var marker = new google.maps.Marker({
                position: {lat: {{ $referral->lat }}, lng: {{ $referral->lng }} },
                map: map,
                draggable: false
            });

        });

    </script>
@endsection