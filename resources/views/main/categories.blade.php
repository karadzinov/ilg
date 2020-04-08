@extends('layouts.main')
@include('layouts.menu')

@section('content')
    <!-- breadcrumb start -->
    <!-- ================ -->
    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="/">Почетна</a></li>
                <li><a href="/">Категории</a></li>
                <li class="active">{{ $category->name }}</li>
            </ol>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- main-container start -->
    <!-- ================ -->
    <section class="main-container">

        <div class="container">
            <div class="row">


            @if($category->image)
                <!-- banner start -->
                    <!-- ================ -->
                    <div class="pv-40 banner light-gray-bg">
                        <div class="container clearfix">

                            <!-- slideshow start -->
                            <!-- ================ -->
                            <div class="slideshow">

                                <!-- slider revolution start -->
                                <!-- ================ -->
                                <div class="slider-banner-container">
                                    <div class="slider-banner-boxedwidth-stopped">
                                        <ul class="slides">
                                            <!-- slide 1 start -->
                                            <!-- ================ -->
                                            <li data-transition="slidehorizontal" data-slotamount="1"
                                                data-masterspeed="500" data-saveperformance="on" data-title="Slide 1">

                                                <!-- main image -->
                                                <img src="/assets/img/categories/{{$category->image}}" alt="slidebg1"
                                                     data-bgposition="center top" data-bgrepeat="no-repeat"
                                                     data-bgfit="cover">

                                                <!-- Transparent Background -->
                                                <div class="tp-caption dark-translucent-bg"
                                                     data-x="center"
                                                     data-y="bottom"
                                                     data-speed="600"
                                                     data-start="0">
                                                </div>

                                                <!-- LAYER NR. 1 -->
                                                <div class="tp-caption sfb fadeout text-center large_white"
                                                     data-x="center"
                                                     data-y="110"
                                                     data-speed="500"
                                                     data-start="1000"
                                                     data-easing="easeOutQuad">{{ $category->name }}
                                                </div>

                                                <!-- LAYER NR. 2 -->
                                                <div class="tp-caption sfb fadeout text-center large_white tp-resizeme"
                                                     data-x="center"
                                                     data-y="155"
                                                     data-speed="500"
                                                     data-start="1300"
                                                     data-easing="easeOutQuad">
                                                    <div class="separator light"></div>
                                                </div>

                                                <!-- LAYER NR. 3 -->
                                                <div class="tp-caption sfb fadeout medium_white text-center"
                                                     data-x="center"
                                                     data-y="190"
                                                     data-speed="500"
                                                     data-start="1300"
                                                     data-easing="easeOutQuad"
                                                     data-endspeed="600">
                                                </div>

                                            </li>
                                            <!-- slide 1 end -->

                                            @foreach($sliders as $slider)
                                                <!-- slide 1 start -->
                                                    <!-- ================ -->
                                                    <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="500" data-saveperformance="on" data-title="Slide 1">

                                                        <!-- main image -->
                                                        <img src="/assets/img/sliders/{{$slider->image}}" alt="slidebg1" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">

                                                        <!-- Transparent Background -->
                                                        <div class="tp-caption dark-translucent-bg"
                                                             data-x="center"
                                                             data-y="bottom"
                                                             data-speed="600"
                                                             data-start="0">
                                                        </div>

                                                        <!-- LAYER NR. 1 -->
                                                        <div class="tp-caption sfb fadeout text-center large_white"
                                                             data-x="center"
                                                             data-y="110"
                                                             data-speed="500"
                                                             data-start="1000"
                                                             data-easing="easeOutQuad">{{ $category->name }}
                                                        </div>

                                                        <!-- LAYER NR. 2 -->
                                                        <div class="tp-caption sfb fadeout text-center large_white tp-resizeme"
                                                             data-x="center"
                                                             data-y="155"
                                                             data-speed="500"
                                                             data-start="1300"
                                                             data-easing="easeOutQuad"><div class="separator light"></div>
                                                        </div>

                                                        <!-- LAYER NR. 3 -->
                                                        <div class="tp-caption sfb fadeout medium_white text-center"
                                                             data-x="center"
                                                             data-y="190"
                                                             data-speed="500"
                                                             data-start="1300"
                                                             data-easing="easeOutQuad"
                                                             data-endspeed="600">
                                                        </div>

                                                    </li>
                                                    <!-- slide 1 end -->
                                            @endforeach

                                        </ul>
                                        <div class="tp-bannertimer"></div>
                                    </div>
                                </div>
                                <!-- slider revolution end -->

                            </div>
                            <!-- slideshow end -->

                        </div>
                    </div>
                    <!-- banner end -->
            @endif

            <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-12">

                    <!-- page-title start -->
                    <!-- ================ -->
                    <h1 class="page-title">{{ $category->name }}</h1>
                    <div class="separator-2"></div>
                {!! $category->description !!}
                <!-- page-title end -->

                @foreach($category->getImmediateDescendants() as $descendant)
                    <!-- masonry grid item start -->
                        <div class="masonry-grid-item col-sm-6 col-md-4">
                            <!-- blogpost start -->
                            <article class="blogpost shadow light-gray-bg bordered">
                                @if($descendant->image)
                                    <div class="overlay-container">
                                        <img src="/assets/img/categories/{{ $descendant->image }}" alt="">
                                        <a class="overlay-link" href="/categories/{{ $descendant->slug }}""><i
                                                class="fa fa-link"></i></a>
                                    </div>
                                @endif
                                <header>
                                    <h2><a href="/categories/{{ $descendant->slug }}">{{ $descendant->name }}</a></h2>

                                </header>
                                <div class="blogpost-content">
                                    <p>{!! strip_tags(str_limit($descendant->description,100,'...')) !!}</p>
                                </div>
                                <footer class="clearfix">

                                    <div class="link pull-right"><i class="icon-link"></i><a
                                                href="/categories/{{ $descendant->slug }}">Повеќе</a>
                                    </div>
                                </footer>
                            </article>
                            <!-- blogpost end -->
                        </div>
                        <!-- masonry grid item end -->
                @endforeach

                <!-- masonry grid start -->
                    <!-- ================ -->
                    <div class="masonry-grid row">

                    @foreach($products as $product)
                        <!-- masonry grid item start -->
                            <div class="masonry-grid-item col-sm-6 col-md-4">
                                <!-- blogpost start -->
                                <article class="blogpost shadow light-gray-bg bordered">
                                    <div class="overlay-container">
                                        <img src="/assets/img/products/{{ $product->image }}" alt="">
                                        <a class="overlay-link" href="/product/{{ $product->slug }}""><i
                                                class="fa fa-link"></i></a>
                                    </div>
                                    <header>
                                        <h2><a href="/product/{{ $product->slug }}">{{ $product->title }}</a></h2>

                                    </header>
                                    <div class="blogpost-content">
                                        <p>{!! strip_tags(str_limit($product->description,100,'...')) !!}</p>
                                    </div>
                                    <footer class="clearfix">

                                        <div class="link pull-right"><i class="icon-link"></i><a
                                                    href="/product/{{ $product->slug }}">Повеќе</a>
                                        </div>
                                    </footer>
                                </article>
                                <!-- blogpost end -->
                            </div>
                            <!-- masonry grid item end -->
                        @endforeach


                    </div>
                    <!-- main end -->

                    <!-- sidebar start -->
                    <!-- ================ -->
                    <aside class="col-md-2 col-lg-2 col-lg-offset-1">
                        <div class="sidebar">

                            <div class="col-md-12 block clearfix">

                                <a href="/assets/files/categories/{{ $category->file }}" alt="{{ $category->filename }}"
                                   target="_blank">{{ $category->filename }}</a>

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