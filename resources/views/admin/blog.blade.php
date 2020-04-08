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
								@if(!!$blog->image) 
								<img src="/assets/img/blog/thumbnails/{{ $blog->imagethumb }}" alt="{{ $blog->name }}" class="img-responsive img-sourcepartner" />
								@endif

							</div>
							<div class="col-md-6 col-sm-12 profile-info">
								<div class="header-fullname">{{ $blog->name }}</div>
								<p>{!! strip_tags($blog->description) !!}</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 profile-stats">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stats-col">
									<div class="stats-title orange"><a href="/admin/users/{{ $blog->createdby->id }}">Blog Creator: {{ $blog->createdby->name }}</a></div>
									<div class="stats-title orange"><a href="/admin/users/{{ $blog->user->id }}">Blog Editor: {{ $blog->user->name }}</a></div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inlinestats-col">
									<a href="/admin/blog/{{ $blog->id }}/edit" class="btn btn-labeled shiny btn-warning edit"><i class="btn-label fa fa-edit"></i> Edit</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 inlinestats-col">
									{{ Form::model($blog, array('route' => array('admin.blog.destroy', $blog->id), 'method' => 'DELETE', 'id' => 'deleteblog')) }} 
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


