@extends('layouts.app')
@section('content')

<div class="page-body">
	<div class="row">
		<div class="col-md-12">
			<div class="profile-container">
				<div class="profile-header row">
					<div class="col-lg-12 col-md-12 col-sm-12 text-center">
						<div class="header-information">
							<div class="col-md-2 col-sm-12 text-center">
								@if(!!$sourcepartner->image) 
								<img src="/assets/img/sourcepartners/thumbnails/{{ $sourcepartner->image }}" alt="{{ $sourcepartner->name }}" class="img-responsive img-sourcepartner" />
								@endif

							</div>
							<div class="col-md-6 col-sm-12 profile-info">
								<div class="header-fullname">{{ $sourcepartner->name }}</div>
								<p>{{ $sourcepartner->description }}</p>
								<p><a href="{{ $sourcepartner->webpage }}" target="_blank">{{ $sourcepartner->webpage }}</a></p>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 profile-stats">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stats-col">
									<div class="stats-value pink">1207</div>
									<div class="stats-title">POSTS</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inlinestats-col">
									<a href="/admin/sourcepartners/{{ $sourcepartner->id }}/edit" class="btn btn-labeled shiny btn-warning edit"><i class="btn-label fa fa-edit"></i> Edit</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inlinestats-col">
									{{ Form::model($sourcepartner, array('route' => array('admin.sourcepartners.destroy', $sourcepartner->id), 'method' => 'DELETE', 'id' => 'deletesourcepartner')) }} 
									{!! csrf_field() !!} 
									<button type="submit" class="btn btn-labeled shiny btn-danger delete"><i class="btn-label fa fa-trash"></i> Delete</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection


