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
                        <span class="widget-caption">ОБнови го Членот Во Тимот</span>
                    </div>
                    <div class="widget-body">
                        <div id="horizontal-form">

                            {{ Form::model('team', array('route' => array('admin.team.update', $team->id), 'method' => 'PUT', 'files'=>true)) }}
                            {!! csrf_field() !!}


                            <div class="input-group{{ $errors->has('image') ? ' has-error' : '' }}">
							<span class="input-group-btn">
								<span class="btn btn-info shiny btn-file">
									<i class="btn-label fa fa-image"> </i> Избери слика... <input type="file" name="image">
								</span>
							</span>
                                <input type="text" class="form-control" readonly="">
                            </div>
                            <br/>
                            @if ($errors->has('image')) <p
                                    class="alert alert-danger">{{ $errors->first('image') }}</p> @endif

                            <div class="form-group">
                                <label for="name">Име и Презиме</label>

                                <input type="text" name="name" class="form-control" value="{!! $team->name !!}">
                            </div>
                            @if ($errors->has('name')) <p
                                    class="alert alert-danger">{{ $errors->first('name') }}</p> @endif


                            <div class="form-group">
                                <label for="title">Титула</label>
                                <input type="text"  name="title" class="form-control" value="{{$team->title}}">
                            </div>
                            @if ($errors->has('title')) <p
                                    class="alert alert-danger">{{ $errors->first('title') }}</p> @endif

                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input type="text" id="facebook" name="facebook" class="form-control" value="{{ $team->facebook }}">
                            </div>

                            <div class="form-group">
                                <label for="linkedin">Linkedin</label>
                                <input type="text" id="linkedin" name="linkedin" class="form-control" value="{{$team->linkedin}}">
                            </div>


                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                <input type="text" id="instagram" name="instagram" class="form-control" value="{{$team->instagram}}">
                            </div>



                            <div class="form-group">
                                <label for="description">Short Bio</label>
                                <textarea class="ckeditor" id="" name="bio">{{$team->bio}}</textarea>
                            </div>
                            @if ($errors->has('bio')) <p
                                    class="alert alert-danger">{{ $errors->first('bio') }}</p> @endif


                            <div class="form-group">
                                <label for="user">Уредник</label>
                                <select name="user_id" id="user" class="form-control">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}"
                                                @if(Auth::user()->id == $user->id) selected @endif >{{ $user->name }}</option>
                                    @endforeach

                                </select>
                            </div>


                            <div class="form-group">
                                <label>Workflow: </label>
                                @foreach($workflows as $workflow)
                                    <label>
                                        <input name="workflow_id" type="radio"
                                               class="form-control {{ $workflow->color }}" value="{{ $workflow->id }}"
                                               @if($workflow->id  == 1) checked @endif>
                                        <span class="text"> {{ $workflow->name }}</span>
                                    </label>
                                @endforeach


                            </div>


                            <!-- Hidden inputs -->

                            <input type="hidden" name="creator" value="{{ Auth::user()->id  }}">


                            <button type="submit" class="btn btn-labeled shiny btn-warning btn-large"><i
                                        class="btn-label fa fa-plus"></i> Обнови
                            </button>
                            {!! Form::close() !!}


                            {{ Form::model('team', array('route' => array('admin.team.destroy', $team->id), 'method' => 'DELETE', 'id' => 'team'))}}
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