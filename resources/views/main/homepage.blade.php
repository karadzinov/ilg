@extends('layouts.main')
@include('layouts.menu')
@section('slider')

    <!-- banner start -->
    <!-- ================ -->
    <div class="banner clearfix">

        <!-- slideshow start -->
        <!-- ================ -->
        <div class="slideshow">

            <!-- slider revolution start -->
            <!-- ================ -->
            <div class="slider-banner-container">
                <div class="slider-banner-fullwidth-big-height">
                    <ul class="slides">
                        <!-- slide 1 start -->
                        <!-- ================ -->
                        @foreach($slides as $slide)
                            <li data-transition="fadefromright" data-slotamount="4" data-masterspeed="500"
                                data-saveperformance="on" data-title="{{ $slide->title }}">

                                <!-- main image -->
                                <img src="/assets/img/slider/{{ $slide->image }}" alt="{{ $slide->title }}"
                                     data-bgposition="center top" data-bgrepeat="no-repeat" data-bgfit="cover">

                                <!-- LAYER NR. 1 -->

                                <div class="tp-caption sfb fadeout dark-translucent-bg caption-box text-left"
                                     style="background-color: rgba(0, 0, 0, 0.7);"
                                     data-x="left"
                                     data-y="center"
                                     data-speed="500"
                                     data-start="1300"
                                     data-easing="easeOutQuad"
                                     data-endspeed="600">
                                    <h2 class="title">{{ $slide->title }}</h2>
                                    <div class="separator-2 clearfix"></div>
                                    <p>{!!  $slide->description !!}</p>
                                    <div class="text-right"><a class="btn btn-small btn-gray-transparent margin-clear"
                                                               href="{{ $slide->link }}">Повеќе</a></div>
                                </div>

                            </li>
                    @endforeach
                    <!-- slide 1 end -->

                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
            <!-- slider revolution end -->

        </div>
        <!-- slideshow end -->

    </div>
    <!-- banner end -->
@endsection



@section('content')
    <!-- section start -->
    <!-- ================ -->
    <section class="pv-40">
        <div class="container">
            <div class="row">
                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-12">
                    <h3 class="title">Ние сме <strong class="text-default">{{ $settings->title }}</strong></h3>
                    <div class="separator-2"></div>
                    <div class="row">
                        <div class="col-md-6">
                            {!! $settings->description !!}

                        </div>
                        <div class="col-md-6">
                            <div class="owl-carousel content-slider-with-controls">
                                @foreach($categories as $category)
                                    <div class="overlay-container overlay-visible">
                                        <img
                                                src="/assets/img/categories/medium/{{ $category->image }}"
                                                alt="{{ $category->name }}"/>{{ $category->name}}</a>
                                        <div class="overlay-bottom hidden-xs">
                                            <div class="text">
                                                <h3 class="title">{{ $category->title }}</h3>
                                            </div>
                                        </div>
                                        <a href="/assets/img/categories/{{ $category->image }}"
                                           class="popup-img overlay-link"
                                           title="{{ $category->title }}"><i class="icon-plus-1"></i></a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main end -->
            </div>
        </div>
    </section>
    <!-- section end -->



    <!-- section start -->
    <!-- ================ -->
    <section class="clearfix pv-40">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2 text-center">
                    <h1 class="page-title text-center"> <strong>Продукти</strong></h1>
                    <div class="separator"></div>
                </div>

                <div class="col-md-12">



                    <div class="isotope-container row grid-space-10">
                        @foreach(array_chunk($categories->all(), 4) as $categories)
                            <div class="row">
                                @foreach($categories as $category)
                                    <div class="col-md-3 col-sm-6 isotope-item {{ $category->slug }}">
                                        <div class="image-box shadow bordered text-center mb-20">
                                            <div class="overlay-container">
                                                <div class="img-container">
                                                    <img src="/assets/img/categories/medium/{{ $category->image }}"
                                                         alt="{{ $category->name }}">
                                                </div>
                                                <div class="overlay-top">
                                                    <div class="text">
                                                        <h3>
                                                            <a href="/categories/{{ $category->slug }}">{!! $category->name !!}</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="overlay-bottom">
                                                    <p class="small">{{ $category->name }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>
    <!-- section end -->


    <!-- section start -->
    <!-- ================ -->
    <section class="light-gray-bg pv-40 border-clear">
        <div class="container">

            <!-- page-title start -->
            <!-- ================ -->
            <h1 class="page-title text-center">Наши <strong>Услуги</strong></h1>
            <div class="separator"></div>
            <br>
            <!-- page-title end -->
            @foreach(array_chunk($services->all(), 3) as $services)
            <div class="row">
                @foreach($services as $service)
                <div class="col-sm-4">
                    <div class="image-box style-2 mb-20">
                        <div class="overlay-container overlay-visible">
                            <img src="/assets/img/services/medium/{{ $service->image }}" alt="{{ $service->title }}">
                            <a href="/services/{{ $service->slug }}" class="overlay-link"><i class="fa fa-link"></i></a>
                            <div class="overlay-bottom">
                                <div class="text">
                                    <p class="lead margin-clear text-left mobile-visible">{{ $service->title }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="body padding-horizontal-clear">
                            <p>{!! strip_tags(str_limit($service->description, 200, '...')) !!}</p>
                            <a class="link-dark" href="/services/{{ $service->slug }}">Повеќе</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
                @endforeach

        </div>
    </section>
    <!-- section end -->


    <!-- section start -->
    <!-- ================ -->
    <section class="clearfix pv-40">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2 text-center">
                    <h1 class="page-title text-center"> <strong>Референци</strong></h1>
                    <div class="separator"></div>
                </div>

                <div class="col-md-12">



                    <div class="isotope-container row grid-space-10">
                        @foreach(array_chunk($referrals->all(), 4) as $referrals)
                            <div class="row">
                                @foreach($referrals as $referral)
                                    <div class="col-md-3 col-sm-6 isotope-item {{ $referral->slug }}">
                                        <div class="image-box shadow bordered text-center mb-20">
                                            <div class="overlay-container">
                                                <div class="img-container">
                                                    <img src="/assets/img/referrals/medium/{{ $referral->image }}"
                                                         alt="{{ $referral->title }}">
                                                </div>
                                                <div class="overlay-top">
                                                    <div class="text">
                                                        <h3>
                                                            <a href="/referents/{{ $referral->slug }}">{!! $referral->title !!}</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="overlay-bottom">
                                                    <p class="small">{{ $referral->title }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>
    <!-- section end -->

@endsection

