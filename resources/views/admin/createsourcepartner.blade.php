@extends('layouts.app')
@section('content')
<div class="page-body">
	<div class="row">
		<div class="col-lg-offset-1 col-sm-offset-1 col-lg-10 col-sm-10 col-xs-12">
			<div class="widget">
				<div class="widget-header bordered-bottom bordered-warning">
					<span class="widget-caption">Add new source partner</span>
				</div>
				@if(Session::has('flash_message'))
				<div class="alert alert-success">
					{{ Session::get('flash_message') }}
				</div>
				@endif
				<div class="widget-body">
					<div id="horizontal-form">
						<form role="form" method="POST" action="{{ url('/admin/sourcepartners') }}" enctype="multipart/form-data">
							{!! csrf_field() !!}
							<div class="form-title">
								Source Partner Information
							</div>
							<div class="input-group{{ $errors->has('image') ? ' has-error' : '' }}">
								<span class="input-group-btn">
									<span class="btn btn-info shiny btn-file">
										<i class="btn-label fa fa-image"> </i> Browse... <input type="file" name="image">
									</span>
								</span>
								<input type="text" class="form-control" readonly="">
								@if ($errors->has('image')) <p class="alert alert-danger">{{ $errors->first('image') }}</p> @endif
							</div>
							<br />
							<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
								<span class="input-icon icon-right">
									<input type="text" class="form-control" id="sourcepartnerName" name="name" placeholder="Source Partner Name" value="{{ old('name') }}">
								</span>
								@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
								@endif
							</div>
							<div class="form-group{{ $errors->has('webpage') ? ' has-error' : '' }}">
								<span class="input-icon icon-right">
									<input type="text" class="form-control" id="sourcepartnerWebpage" name="webpage" placeholder="http://www.website.com" value="{{ old('webpage') }}">
								</span>
								@if ($errors->has('webpage'))
								<span class="help-block">
									<strong>{{ $errors->first('webpage') }}</strong>
								</span>
								@endif
							</div>
							<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
								<span class="input-icon icon-right">
									<label for="description">Description</label>
									<textarea type="text" class="form-control" id="description" name="description" placeholder="Description"> {{ old('description') }} </textarea>
								</span>
								@if ($errors->has('description'))
								<span class="help-block">
									<strong>{{ $errors->first('description') }}</strong>
								</span>
								@endif
							</div>
							<div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
								<span class="input-icon icon-right">
									<label for="country">Country</label>
									<select name="country_id" class="form-control" id="country">
										@foreach ($countries as $country)
										<option value="{{ $country->id }}">{{ $country->name }}</option>
										@endforeach
									</select>
								</span>
								@if ($errors->has('country'))
								<span class="help-block">
									<strong>{{ $errors->first('country') }}</strong>
								</span>
								@endif
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" class="checkbox-slider toggle colored-warning form-control" name="our_partner" value="1">
									<span class="text">Our Partner</span>
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" class="checkbox-slider toggle colored-warning form-control" name="status" value="1">
									<span class="text">Published on homepage</span>
								</label>
							</div>
							<button type="submit" class="btn btn-labeled shiny btn-warning btn-large"><i class="btn-label fa fa-plus"></i> Create</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection