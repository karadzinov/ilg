@extends('layouts.app')

@section('scripts')
<!-- Google Maps -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
<script type="text/javascript" src="/assets/js/maps.js"></script>
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
					<span class="widget-caption">Add blog</span>
				</div>
				<div class="widget-body">
					<div id="horizontal-form">

						{{ Form::model('blog', array('route' => array('admin.blog.store'), 'method' => 'POST', 'files'=>true)) }} 
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
							<textarea class="ckeditor" id="title" name="title"></textarea>
						</div>
						@if ($errors->has('title')) <p class="alert alert-danger">{{ $errors->first('title') }}</p> @endif


						<div class="form-group">
							<label for="subtitle">Subtitle</label>
							<textarea class="ckeditor" id="subtitle" name="subtitle"></textarea>
						</div>
						@if ($errors->has('subtitle')) <p class="alert alert-danger">{{ $errors->first('subtitle') }}</p> @endif


						<div class="form-group">
							<label for="region">Region</label>

							<select name="region_id[]" id="region" class="form-control" multiple="">
								@foreach ($regions as $region)
								<option value="{{ $region->id }}">{{ $region->region }}</option>
								@endforeach
							</select>
						</div>

						@if ($errors->has('region_id')) <p class="alert alert-danger">{{ $errors->first('region_id') }}</p> @endif


						<div class="form-group">
							<label for="country">Country</label>

							<select name="country_id" id="country" class="form-control">
								@foreach ($countries as $country)
								<option value="{{ $country->id }}">{{ $country->name }}</option>
								@endforeach

							</select>
						</div>

						<div class="form-group">
							<input type="text" id="searchmap" class="form-control">
							<div id="map-canvas"></div>
						</div>


						<div class="form-group">
							<label for="description">Blog description</label>
							<textarea class="ckeditor" id="elm3" name="description"></textarea>
						</div>
						@if ($errors->has('description')) <p class="alert alert-danger">{{ $errors->first('description') }}</p> @endif



						<div class="form-group">
							<label for="user">Translator</label>
							<select name="user_id" id="user" class="form-control">
								@foreach ($users as $user)
								<option value="{{ $user->id }}" @if(Auth::user()->id == $user->id) selected @endif >{{ $user->name }}</option>
								@endforeach

							</select>
						</div>


						<div class="form-group">
							<label>Workflow: </label>
							@foreach($workflows as $workflow)
							<label>
								<input name="workflow_id" type="radio" class="form-control {{ $workflow->color }}" value="{{ $workflow->id }}" @if($workflow->id  == 1) checked @endif>
								<span class="text"> {{ $workflow->name }}</span>
							</label>
							@endforeach


						</div>


						<!-- Hidden inputs -->

						<input type="hidden" name="creator" value="{{ Auth::user()->id  }}">
						<input type="hidden" id="lat" class="form-control" name="lat">
						<input type="hidden" id="lng" class="form-control" name="lng">

						<button type="submit" class="btn btn-labeled shiny btn-warning btn-large"><i class="btn-label fa fa-plus"></i> Create</button>
						{!! Form::close() !!}



					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
