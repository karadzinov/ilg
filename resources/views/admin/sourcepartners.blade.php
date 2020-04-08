@extends('layouts.app')

@section('content')
<div class="page-body">
  <div class="row">

    <div class="col-lg-12">
      <p>  <a class="btn btn-labeled shiny btn-warning btn-large" href="/admin/sourcepartners/create"> <i class="btn-label fa fa-plus"></i>Add Source Partner </a></p>
    </div>
    <div class="col-lg-12">
      <div class="widget">
        <div class="widget-header bordered-bottom bordered-themesecondary">
          <i class="widget-icon fa fa-tags themesecondary"></i>
          <span class="widget-caption themesecondary">Source Partners</span>
        </div><!--Widget Header-->
        <div class="widget-body  no-padding">
          <div class="tickets-container">
            <ul class="tickets-list">
             @foreach($sourcepartners as $sourcepartner)
             <li class="ticket-item">
              <div class="row">
                <div class="ticket-user col-lg-4 col-sm-12">
                  <a href="/admin/sourcepartners/{{ $sourcepartner->id }}" class="info">
                    @if($sourcepartner->image)
                    <img src="/assets/img/sourcepartners/{{ $sourcepartner->imagethumb }}" class="img-sourcepartners">
                    @endif
                    <span class="sourcepartners-name">{{ $sourcepartner->name }}</span>
                  </div>
                  <div class="ticket-time col-lg-4 col-sm-4 col-xs-12">
                    <div class="divider hidden-md hidden-sm hidden-xs"></div>
                    <i class="glyphicon glyphicon-link"></i>
                    <span class="time">{{$sourcepartner->webpage}}</span>
                  </div>
                  <div class="ticket-type col-lg-4 col-sm-4 col-xs-12">
                    <span class="divider hidden-xs"></span>
                    <span class="type">{{ $sourcepartner->created_at }}</span>
                  </div>
                  <div class="ticket-state bg-palegreen">
                    <i class="glyphicon glyphicon-eye-open"></i>
                  </div>
                </a>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-12 right">
    {!! $sourcepartners->links() !!}
    </div>
  </div>
</div>
@endsection




