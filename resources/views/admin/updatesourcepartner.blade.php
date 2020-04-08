@extends('layouts.app')
@section('content')
<div class="page-body">
	<div class="row">
		<div class="col-lg-offset-1 col-sm-offset-1 col-lg-10 col-sm-10 col-xs-12">

			@if(Session::has('flash_message'))
			<div class="alert alert-success">
				{{ Session::get('flash_message') }}
			</div>
			@endif

			<div class="widget">
				<div class="widget-header bordered-bottom bordered-warning">
					<span class="widget-caption">Edit {{ $sourcepartner-> name }}</span>
				</div>
				<div class="widget-body">
					@if(!!$sourcepartner->image) 
					<img src="/assets/img/sourcepartners/thumbnails/{{ $sourcepartner->image }}" alt="{{ $sourcepartner->name }}" class="img-responsive" />
					@endif
					<div class="col-md-12 pull-right profile-header row">
					</div>

					<div id="horizontal-form">
						{{ Form::model($sourcepartner, array('route' => array('admin.sourcepartners.update', $sourcepartner->id), 'method' => 'PUT', 'files'=>true)) }} 
						{!! csrf_field() !!}
						<input type="hidden" name="id" value="{{ $sourcepartner->id }}" />

						<div class="form-title">
							{{ $sourcepartner-> name }} Informations

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
								<div class="form-group">
									{!! Form::text('name', $sourcepartner->name , ['placeholder' => 'Name','class'=>'form-control']) !!}
									@if ($errors->has('name')) <p class="alert alert-danger">{{ $errors->first('name') }}</p> @endif
								</div>
							</span>
						</div>
						<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
							<span class="input-icon icon-right">
								<div class="form-group">
									{!! Form::textarea('description', $sourcepartner->description , ['placeholder' => 'Description','class'=>'form-control']) !!}
									@if ($errors->has('description')) <p class="alert alert-danger">{{ $errors->first('description') }}</p> @endif
								</div>

							</span>
						</div>
						<div class="form-group{{ $errors->has('webpage') ? ' has-error' : '' }}">
							<span class="input-icon icon-right">
								<div class="form-group">
									{!! Form::text('webpage', $sourcepartner->webpage , ['placeholder' => 'Name','class'=>'form-control']) !!}
									@if ($errors->has('webpage')) <p class="alert alert-danger">{{ $errors->first('webpage') }}</p> @endif
								</div>
							</span>
						</div>

						<div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
							<span class="input-icon icon-right">
								<label for="country">Country</label>
								<select name="country_id" class="form-control" id="country">
									@foreach ($countries as $country) 
									@if($country->id == $sourcepartner->country_id)
									<option value="{{ $country->id }}" selected>{{ $country->name }}</option>
									@else 
									<option value="{{ $country->id }}">{{ $country->name }}</option>
									@endif
									@endforeach
								</select>

							</span>
							@if ($errors->has('country'))
							<span class="help-block">
								<strong>{{ $errors->first('country') }}</strong>
							</span>
							@endif
						</div>


						<div class="form-group">
							<label>
								<input type="checkbox" class="checkbox-slider toggle colored-warning form-control" name="our_partner" value="1" @if($sourcepartner->our_partner == 1) checked @endif>
								<span class="text"> Our Partner</span>
							</label>
						</div>

						<div class="form-group">
							<label>
								<input type="checkbox" class="checkbox-slider toggle colored-warning form-control" name="status" value="1" @if($sourcepartner->status == 1) checked @endif>
								<span class="text"> Published on homepage</span>
							</label>
						</div>
						<button type="submit" class="btn btn-labeled shiny btn-palegreen btn-large"><i class="btn-label fa fa-cloud-upload"></i> Update</button>
						<a href="/admin/sourcepartners" class="btn btn-labeled shiny btn-default btn-large"><i class="btn-label fa fa-arrow-circle-left"></i> Cancel</a>
					</form>

				</div>


			</div>
		</div>
	</div>
</div>
@endsection
