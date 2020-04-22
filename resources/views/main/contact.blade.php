@extends('layouts.main')
@include('layouts.menu')
@section('content')
    <section class="main-container">

        <div class="container">
            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-8 space-bottom">
                    <p class="lead">It would be great to hear from you! Just drop us a line and ask for anything with which you think we could be helpful. We are looking forward to hearing from you!</p>
                    <div class="alert alert-success hidden" id="MessageSent">
                        We have received your message, we will contact you very soon.
                    </div>
                    <div class="alert alert-danger hidden" id="MessageNotSent">
                        Oops! Something went wrong, please verify that you are not a robot or refresh the page and try again.
                    </div>
                    <div class="contact-form">
                        <h2 class="title">Контактирајте не</h2>
                        <div class="alert alert-success hidden" id="MessageSent2">
                            We have received your message, we will contact you very soon.
                        </div>
                        <div class="alert alert-danger hidden" id="MessageNotSent2">
                            Oops! Something went wrong please refresh the page and try again.
                        </div>
                        <form id="contact_form" role="form" class="margin-clear" action="{{ route('contact.store') }}" method="post">
                            {!! csrf_field() !!}
                            <div class="form-group has-feedback mb-10">
                                <label class="sr-only" for="name">Име</label>
                                <input type="text" class="form-control" id="name" placeholder="Име"
                                       name="name">
                                <i class="fa fa-user form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback mb-10">
                                <label class="sr-only" for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Внесете email"
                                       name="email">
                                <i class="fa fa-envelope form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback mb-10">
                                <label class="sr-only" for="message">Порака</label>
                                <textarea class="form-control" rows="4" id="message" placeholder="Порака"
                                          name="message"></textarea>
                                <i class="fa fa-pencil form-control-feedback"></i>
                            </div>
                            <input type="submit" value="Испрати"
                                   class="margin-clear submit-button btn btn-default">
                        </form>
                    </div>
                </div>
                <!-- main end -->

                <!-- sidebar start -->
                <!-- ================ -->
                <aside class="col-md-3 col-lg-offset-1">
                    <div class="sidebar">
                        <div class="side vertical-divider-left">
                            <h3 class="title logo-font">The <span class="text-default">Project</span></h3>
                            <div class="separator-2 mt-20"></div>
                            <ul class="list">
                                <li><i class="fa fa-home pr-10"></i>{{ $settings->address }}</li>
                                <li><i class="fa fa-phone pr-10"></i><abbr title="Phone">P:</abbr> {{ $settings->phone }}</li>
                                <li><i class="fa fa-envelope pr-10"></i><a href="mailto:{{$settings->email}}">{{ $settings->email }}</a></li>
                            </ul>
                            <ul class="social-links circle small margin-clear clearfix animated-effect-1">
                                @if($settings->twitter)
                                    <li class="twitter"><a target="_blank" href="{{ $settings->twitter }}"><i class="fa fa-twitter"></i></a></li>
                                    @endif
                                @if($settings->skype)
                                     <li class="skype"><a target="_blank" href="{{ $settings->skype }}"><i class="fa fa-skype"></i></a></li>
                                    @endif
                                @if($settings->linkedin)
                                     <li class="linkedin"><a target="_blank" href="{{ $settings->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                                    @endif
                                 @if($settings->gplus)
                                     <li class="googleplus"><a target="_blank" href="{{$settings->gplus}}"><i class="fa fa-google-plus"></i></a></li>
                                    @endif
                                 @if($settings->youtube)
                                    <li class="youtube"><a target="_blank" href="{{$settings->youtube}}"><i class="fa fa-youtube-play"></i></a></li>
                                    @endif
                                 @if($settings->flickr)
                                    <li class="flickr"><a target="_blank" href="{{ $settings->flickr }}"><i class="fa fa-flickr"></i></a></li>
                                    @endif
                                 @if($settings->facebook)
                                    <li class="facebook"><a target="_blank" href="{{ $settings->facebook }}"><i class="fa fa-facebook"></i></a></li>
                                    @endif
                                 @if($settings->pinterest)
                                    <li class="pinterest"><a target="_blank" href="{{ $settings->pinterest }}"><i class="fa fa-pinterest"></i></a></li>
                                    @endif
                            </ul>
                            <div class="separator-2 mt-20 "></div>
                            <a class="btn btn-gray collapsed map-show btn-animated" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">Show Map <i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </aside>
                <!-- sidebar end -->
            </div>
        </div>
    </section>
    <!-- main-container end -->

    <!-- section start -->
    <!-- ================ -->
    <section id="collapseMap">
        <div id="map-canvas"></div>
    </section>
    <!-- section end -->


    <!-- Contact form -->
    <script src="plugins/jquery.validate.js"></script>
    <!-- Google Maps javascript -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=your_google_map_key"></script>
    <script type="text/javascript" src="js/google.map.config.js"></script>
    @endsection