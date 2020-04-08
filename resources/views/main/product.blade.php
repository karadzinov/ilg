@extends('layouts.main')
@include('layouts.menu')
@section('content')

    <!-- breadcrumb start -->
    <!-- ================ -->
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="/">Почетна</a></li>
                <li class="active">{{ $product->title }}</li>

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
                            <img src="/assets/img/products/{{ $product->image }}"/>

                            <a href="/assets/img/products/{{ $product->image }}"
                               class="popup-img overlay-link"><i class="icon-plus-1"></i></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-8">


                    <h1 class="title">{{ $product->title }}</h1>
                    <div class="separator-2"></div>
                    {!! $product->description !!}
                </div>

                <!-- main end -->

                <!-- sidebar start -->
                <!-- ================ -->
                <aside class="col-md-4 col-lg-3 col-lg-offset-1">
                    <div class="sidebar">


                        <div class="col-md-12 block clearfix">
                            <div class="owl-carousel content-slider-with-controls">
                                @foreach($sliders as $slider)
                                    <div class="overlay-container overlay-visible">
                                        <img src="/assets/img/sliders/medium/{{ $slider->image }}"/>
                                        <div class="overlay-bottom hidden-xs">
                                            <div class="text">
                                                <h3 class="title"></h3>
                                            </div>
                                        </div>
                                        <a href="/assets/img/sliders/{{ $slider->image }}"
                                           class="popup-img overlay-link"><i class="icon-plus-1"></i></a>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                    </div>
                </aside>
                <!-- sidebar end -->

            </div>
        </div>
    </section>
    <!-- main-container end -->


@endsection

