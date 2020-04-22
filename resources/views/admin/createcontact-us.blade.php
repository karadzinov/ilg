@extends('layouts.app')


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
                            <span class="widget-caption">Подесувања</span>
                        </div>
                        <div class="widget-body">
                            <div class="form-group">
                                <label for="email">Наслов</label>
                                <input type="text" name="email" class="form-control" value="{{ $contactmail->email }}">
                            </div>
                            @if ($errors->has('email')) <p class="alert alert-danger">{{ $errors->first('email') }}</p> @endif

                        </div>
                    </div>
            </div>

        </div>
    </div>
    @endsection