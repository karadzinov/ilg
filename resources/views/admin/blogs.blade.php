@extends('layouts.app')

@section('scripts')

@endsection

@section('content')

<div class="page-body">
	<div class="row">
		<div class="col-lg-12">
			<p>  <a class="btn btn-labeled shiny btn-warning btn-large" href="/admin/blog/create"> <i class="btn-label fa fa-plus"></i>Add Blog </a></p>
		</div>

		<div class="col-lg-12">
			<div class="widget">
				<div class="widget-header bordered-bottom bordered-themesecondary">
					<i class="widget-icon fa fa-tags themesecondary"></i>
					<span class="widget-caption themesecondary">Main Blogs</span>
				</div><!--Widget Header-->
				<div class="widget-body  no-padding">
					<div class="tickets-container">
						<ul class="tickets-list">
							@foreach($blogs as $blog)
							<li class="ticket-item">
								<div class="row">
									<a href="/admin/blog/{{ $blog->id }}" class="info">
										<div class="ticket-user col-lg-3 col-sm-12">
											@if($blog->image)
											<img src="/assets/img/blog/thumbnails/{{ $blog->image }}" class="user-avatar">
											@endif
											<span class="user-name">{{ $blog->title }}</span>
										</div>
										<div class="ticket-time col-lg-3 col-sm-6 col-xs-12">
											<div class="divider hidden-md hidden-sm hidden-xs"></div>
											<span class="time">Original creator: {{ $blog->createdby->name }}</span>
										</div>
										<div class="ticket-type  col-lg-3 col-sm-6 col-xs-12">
											<span class="divider hidden-xs"></span>
											<span class="type">Asigned for: {{ $blog->user->name }}</span>
										</div>

										<div class="ticket-type  col-lg-3 col-sm-6 col-xs-12">
											<span class="divider hidden-xs"></span>
											<span class="type">Workflow: {{ $blog->workflow->name }}</span>
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
		</div>
	</div>
</div>
@endsection