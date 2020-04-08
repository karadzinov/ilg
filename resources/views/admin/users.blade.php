@extends('layouts.app')

@section('content')
    @if($status == "all")
        <div class="page-body">
            <div class="row">
                <div class="col-lg-12">
                    <p><a class="btn btn-labeled shiny btn-warning btn-large" href="/admin/users/create"> <i
                                    class="btn-label fa fa-plus"></i>Add user </a></p>
                </div>
                <div class="col-lg-12">
                    <div class="widget">
                        <div class="widget-header bordered-bottom bordered-themesecondary">
                            <i class="widget-icon fa fa-tags themesecondary"></i>
                            <span class="widget-caption themesecondary">Users</span>
                        </div><!--Widget Header-->
                        <div class="widget-body  no-padding">
                            <div class="tickets-container">
                                <ul class="tickets-list">
                                    @foreach($users as $user)
                                        <li class="ticket-item">
                                            <div class="row">
                                                <a href="/admin/users/{{ $user->id }}" class="info">
                                                    <div class="ticket-user col-lg-6 col-sm-12">
                                                        @if($user->image)
                                                            <img src="/assets/img/avatars/thumbnails/{{ $user->image }}"
                                                                 class="user-avatar">
                                                        @endif
                                                        <span class="user-name">{{ $user->name }}</span>
                                                    </div>
                                                    <div class="ticket-time  col-lg-4 col-sm-6 col-xs-12">
                                                        <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                        <i class="glyphicon glyphicon-envelope"></i>
                                                        <span class="time">{{$user->email}}</span>
                                                    </div>
                                                    <div class="ticket-type  col-lg-2 col-sm-6 col-xs-12">
                                                        <span class="divider hidden-xs"></span>
                                                        <span class="type">{{ $user->role }}</span>
                                                    </div>
                                                    <div class="ticket-state bg-palegreen">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </div>
                                            </div>
                                            </a>
                                            @endforeach
                                        </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 right">
                        {!! $users->links() !!}
                    </div>
                </div>


                @endif

                @if($status == "single")
                    <div class="page-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-container">
                                    <div class="profile-header row">
                                        <div class="col-lg-2 col-md-4 col-sm-12 text-center">
                                            @if(!!$user->image)
                                                <img src="/assets/img/avatars/thumbnails/{{ $user->image }}"
                                                     alt="{{ $user->name }}" class="header-avatar"/>
                                            @endif
                                        </div>
                                        <div class="col-lg-5 col-md-8 col-sm-12 profile-info">
                                            <div class="header-fullname">{{ $user->name }}</div>
                                            <div class="header-information">
                                                <p>Name: {{ $user->name }} </p>
                                                <p>Email: {{ $user->email }}</p>
                                                <p>Created at: {{ $user->created_at }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 profile-stats">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 stats-col hidden-xs">
                                                    <div class="stats-value pink"></div>
                                                    <div class="stats-title">ROLE</div>
                                                </div>

                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 stats-col">
                                                    <div class="stats-title orange"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                    <button class="capitalize btn btn-palegreen shiny">{{ $user->role }}</button>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                    <a href="/admin/users/{{ $user->id }}/edit"
                                                       class="btn btn-labeled shiny btn-warning edit"><i
                                                                class="btn-label fa fa-edit"></i> Edit</a>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 inlinestats-col">
                                                    <form action="/admin/users/{{ $user->id }}/delete" method="POST"
                                                          id="deleteuser">
                                                        {!! csrf_field() !!}
                                                        <button type="submit"
                                                                class="btn btn-labeled shiny btn-danger delete"><i
                                                                    class="btn-label fa fa-trash"></i> Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="profile-body">
                                            <div class="col-lg-12">
                                                <div class="tabbable">
                                                    <ul class="nav nav-tabs tabs-flat  nav-justified" id="myTab11">
                                                        <li class="active">
                                                            <a data-toggle="tab" href="#timeline">
                                                                Products
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content tabs-flat">

                                                        <div id="timeline" class="active">
                                                            <ul class="timeline animated fadeInDown">
                                                                @foreach($user->ProductList()->get() as $index => $product)





                                                                    <li @if($index%2 == 0) class="timeline-inverted" @endif>
                                                                        <div class="timeline-datetime">
                    <span class="timeline-time">
                      {{ date('g:i a',strtotime($product->updated_at)) }}
                    </span><span class="timeline-date">{{ date('l jS \of F Y',strtotime($product->updated_at)) }}</span>
                                                                        </div>
                                                                        <div class="timeline-badge blue">
                                                                            <i class="fa fa-tag"></i>
                                                                        </div>
                                                                        <div class="timeline-panel bordered-top-3 bordered-azure">
                                                                            <div class="timeline-header bordered-bottom bordered-blue">
                      <span class="timeline-title">
                        Created product
                      </span>
                                                                                <p class="timeline-datetime">
                                                                                    <small class="text-muted">
                                                                                        <i class="glyphicon glyphicon-time">
                                                                                        </i>
                                                                                        <span class="timeline-date">{{ date('l',strtotime($product->updated_at)) }}</span>
                                                                                        -
                                                                                        <span class="timeline-time"> {{ date('g:i a',strtotime($product->updated_at)) }}</span>
                                                                                    </small>
                                                                                </p>
                                                                            </div>
                                                                            <div class="timeline-body">
                                                                                <p>
                                                                                    <a href="/admin/product/{{ $product->id }}/edit">{{ $product->title }}</a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    @endif
@endsection
