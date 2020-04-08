@extends('layouts.app')

@section('scripts')
    <!-- Google Maps -->
    <script type="text/javascript"
            src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAsNNbnqvbIiRo2hBpr3-lvmYxm3ISPtWI"></script>

    <script>


        $(document).ready(function()
        {
// Google Maps


            map = new google.maps.Map(document.getElementById('map-canvas'), {
                center: {lat: {{ $referral->lat }}, lng: {{ $referral->lng }} },
                zoom: 10
            });

            var marker = new google.maps.Marker({
                position: {lat: {{ $referral->lat }}, lng: {{ $referral->lng }} },
                map: map,
                draggable: true
            });

            var input = document.getElementById('searchmap');
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(input);

            google.maps.event.addListener(searchBox,'places_changed',function() {
                var places = searchBox.getPlaces();
                var bounds = new google.maps.LatLngBounds();
                var i, place;
                for(i=0;place=places[i];i++) {
                    bounds.extend(place.geometry.location);
                    marker.setPosition(place.geometry.location);
                }
                map.fitBounds(bounds);
                map.setZoom(8);

            });

            google.maps.event.addListener(marker,'position_changed',function() {
                var lat = marker.getPosition().lat();
                var lng = marker.getPosition().lng();

                $('#lat').val(lat);
                $('#lng').val(lng);
            });


            $("form").bind("keypress", function (e) {
                if (e.keyCode == 13) {
                    $("#searchmap").attr('value');
                    //add more buttons here
                    return false;
                }
            });

        });

    </script>
@endsection

@section('content')

    <div class="page-body">
        <div class="row">
            <div class="col-lg-offset-1 col-sm-offset-1 col-lg-10 col-sm-12 col-xs-12">

                @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('flash_message') }}
                    </div>
                @endif

                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-warning">
                        <span class="widget-caption">Edit refferal: {{ strip_tags($referral->title) }}</span>
                    </div>
                    <div class="widget-body">

                        <div class="img-refferal">
                            @if(!!$referral->image)
                                <img class="img-responsive" src="/assets/img/referrals/medium/{{ $referral->imagemedium }}" alt="{{ $referral->title }}"/>
                            @endif
                        </div>
                        <br />


                        <div id="horizontal-form">

                            {{ Form::model('refferal', array('route' => array('admin.referrals.update', $referral->id), 'method' => 'PUT','files' => true)) }}
                            {!! csrf_field() !!}


                            <div class="input-group{{ $errors->has('image') ? ' has-error' : '' }}">
                        <span class="input-group-btn">
                            <span class="btn btn-info shiny btn-file">
                                <i class="btn-label fa fa-image"> </i> Browse... <input type="file" name="image">
                            </span>
                        </span>
                                <input type="text" class="form-control" readonly="">
                            </div>
                            <br />
                            @if ($errors->has('image')) <p class="alert alert-danger">{{ $errors->first('image') }}</p> @endif

                            <div class="form-group">
                                <label for="title">Title</label>
                                <textarea class="ckeditor" id="title" name="title">{{ $referral->title }}</textarea>
                            </div>
                            @if ($errors->has('title')) <p class="alert alert-danger">{{ $errors->first('title') }}</p> @endif




                            <div class="form-group">
                                <label for="country">Country</label>

                                <select name="country_id" id="country" class="form-control">
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}" @if($country->id == $referral->country_id) selected @endif>{{ $country->name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" id="searchmap" class="form-control">
                                <div id="map-canvas"></div>
                            </div>


                            <div class="form-group">
                                <label for="description">refferal description</label>
                                <textarea class="ckeditor" id="elm3" name="description">{{ $referral->description }}</textarea>
                            </div>
                            @if ($errors->has('description')) <p class="alert alert-danger">{{ $errors->first('description') }}</p> @endif



                            <div class="form-group">
                                <label for="user">Translator</label>
                                <select name="user_id" id="user" class="form-control">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" @if($referral->user_id == $user->id) selected @endif >{{ $user->name }}</option>
                                    @endforeach

                                </select>
                            </div>


                            <div class="form-group">
                                <label>Workflow: </label>
                                @foreach($workflows as $workflow)
                                    <label>
                                        <input name="workflow_id" type="radio" class="form-control {{ $workflow->color }}" value="{{ $workflow->id }}" @if($workflow->id  == $referral->workflow_id) checked @endif>
                                        <span class="text"> {{ $workflow->name }}</span>
                                    </label>
                                @endforeach


                            </div>


                            <!-- Hidden inputs -->

                            <input type="hidden" name="creator" value="{{ $referral->creator }}">
                            <input type="hidden" id="lat" class="form-control" name="lat" value="{{ $referral->lat }}">
                            <input type="hidden" id="lng" class="form-control" name="lng" value="{{ $referral->lng }}">

                            <button type="submit" class="btn btn-labeled shiny btn-warning btn-large"><i class="btn-label fa fa-plus"></i> Обнови</button>
                            {!! Form::close() !!}


                            <hr/>


                            {{ Form::model('referrals', array('route' => array('admin.referrals.destroy', $referral->id), 'method' => 'DELETE', 'id' => 'referral'))}}
                            {!! csrf_field() !!}

                            <button type="submit" class="btn btn-labeled shiny btn-danger delete"><i
                                        class="btn-label fa fa-trash"></i> Избриши
                            </button>
                            {{ Form::close() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
