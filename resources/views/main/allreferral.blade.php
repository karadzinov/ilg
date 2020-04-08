@extends('layouts.main')
@include('layouts.menu')
@section('content')

    <!-- section start -->
    <!-- ================ -->
    <section class="clearfix pv-40">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="isotope-container row grid-space-10">
                        @foreach(array_chunk($referral->all(), 4) as $referral)
                            <div class="row">
                                @foreach($referral as $referral)
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