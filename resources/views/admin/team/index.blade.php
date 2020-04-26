@extends('layouts.app')

@section('content')
    <div class="page-body">
        <div class="row">
            <div class="col-lg-12">
                <p><a class="btn btn-labeled shiny btn-warning btn-large" href="/admin/team/create"> <i
                                class="btn-label fa fa-plus"></i>Додади член на тимот </a></p>
            </div>

            <div class="col-lg-12">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-themesecondary">
                        <i class="widget-icon fa fa-tags themesecondary"></i>
                        <span class="widget-caption themesecondary">Членови</span>
                    </div><!--Widget Header-->
                    <div class="widget-body  no-padding">
                        <div class="tickets-container">
                            <ul class="tickets-list">
                                @foreach($team as $member)
                                    <li class="ticket-item">
                                        <div class="row">
                                            <a href="/admin/team/{{ $member->id }}/edit" class="info">
                                                <div class="ticket-user col-lg-3 col-sm-12">
                                                    @if($member->image)
                                                        <img src="/assets/img/team/thumbnails/{{ $member->image }}"
                                                             class="user-avatar">
                                                    @endif
                                                    <span class="user-name">{{ $member->name }}</span>
                                                </div>
                                                <div class="ticket-time col-lg-3 col-sm-6 col-xs-12">
                                                    <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                    <span class="time">Original creator: {{ $member->createdby->name }}</span>
                                                </div>


                                                <div class="ticket-state bg-palegreen">
                                                    <i class="glyphicon glyphicon-eye-open"></i>
                                                </div>
                                            </a>
                                        </div>

                                        @endforeach
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection