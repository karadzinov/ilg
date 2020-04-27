@extends('layouts.main')
@include('layouts.menu')
@section('content')



    <div class="row">
        @foreach($team as $member)
            <div class="col-md-4">
                <div class="image-box style-2 mb-20 bordered dark-bg">
                    <div class="overlay-container overlay-visible ">
                        <div class="col-md-12">
                            <img src="/assets/img/team/thumbnails/{{$member->image}}" alt=""
                                 class="img-thumbnail full-height">
                        </div>
                    </div>
                    <div class="body">
                        <h3>{{$member->name}}</h3>
                        <div class="separator-2"></div>
                        <p class="text-muted">{!! $member->bio !!}</p>
                        <a href="team"
                           class="btn btn-gray-transparent btn-animated btn-sm margin-clear">Дознај
                            Повеќе<i class="fa fa-arrow-right pl-10"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection