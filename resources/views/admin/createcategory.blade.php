@extends('layouts.app')

@section('scripts')

@endsection

@section('content')

<div class="page-body">
	<div class="row">
		<div class="col-lg-12">
			@if($status)
			{{ Form::model($categories, array('route' => array('admin.categories.store'), 'method' => 'POST', 'files'=>true)) }} 
			{!! csrf_field() !!}
			<legend>Додавање на категорија</legend>
			<div class="form-group">
				<label for="name">Наслов на категорија</label>
				<input type="text" class="form-control" id="categoryname" name="name" placeholder="Enter category name">
			</div>
			@if ($errors->has('name')) <p class="alert alert-danger">{{ $errors->first('name') }}</p> @endif

			<div class="form-group">
				<label for="parent_id">Под категорија</label>

				<select name="parent_id" id="parent_id" class="form-control">
					<option value="null">Главна категорија</option>

					@foreach ($categories as $category)
					<option value="{{ $category->id }}">@for ($i = 0; $i < $category->depth; $i++) - @endfor {{ $category->name }}</option>
					@endforeach

				</select>
			</div>
			<button type="submit" class="btn btn-default">Додади</button>
			{!! Form::close() !!}
			@else 

			{{ Form::model('categories', array('route' => array('admin.categories.store'), 'method' => 'POST', 'files'=>true)) }} 
			{!! csrf_field() !!}
			<legend>Додавање на категорија</legend>
			<div class="form-group">
				<label for="name">Наслов на категорија</label>
				<input type="text" class="form-control" id="categoryname" name="name" placeholder="Внесете наслов на категорија">
			</div>
			@if ($errors->has('name')) <p class="alert alert-danger">{{ $errors->first('name') }}</p> @endif

			<input type="hidden" name="parent_id" value="null">
			<button type="submit" class="btn btn-default">Додади категорија</button>
			{!! Form::close() !!}

			@endif
		</div>
	</div>
</div>
@endsection
