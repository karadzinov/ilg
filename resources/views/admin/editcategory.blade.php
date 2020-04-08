@extends('layouts.app')

@section('content')

    <div class="page-body">
        <div class="row">
            <div class="col-lg-12">
                <legend>Промена на категорија: {{  $category->name }}</legend>

                <div class="row">
                    <div class="col-lg-12">
                            <a href="/admin/sliders/{{ $category->id }}/category" class="btn btn-info"><i class="fa fa-plus"></i>Додади слајдер</a>
                    </div>
                </div>
                <div style="margin-bottom: 50px"></div>
                {{ Form::model($categories, array('route' => array('admin.categories.update', $category->id), 'method' => 'PUT','files' => true)) }}


                <div class="img-blog">
                    @if(!!$category->image)
                        <img class="img-responsive" src="/assets/img/categories/medium/{{ $category->image }}"
                             alt="{{ $category->name }}"/>
                    @endif
                </div>
                <br/>


                <div class="img-blog">
                    @if(!!$category->file)
                        <a href="/assets/files/categories/{{ $category->file }}"/>{{ $category->file }}</a>
                    @endif
                </div>
                <br/>



                <div class="form-group">
                    <label for="name">Наслов на категорија</label>
                    <input type="text" class="form-control" id="categoryname" name="name"
                           placeholder="Enter category name" value="{{  $category->name }}">
                </div>
                @if ($errors->has('name')) <p class="alert alert-danger">{{ $errors->first('name') }}</p> @endif


                <div class="input-group{{ $errors->has('image') ? ' has-error' : '' }}">
                        <span class="input-group-btn">
                            <span class="btn btn-info shiny btn-file">
                                <i class="btn-label fa fa-image"> </i> Избери слика... <input type="file" name="image">
                            </span>
                        </span>
                    <input type="text" class="form-control" readonly="">
                </div>

                <br/>
                <div class="input-group{{ $errors->has('file') ? ' has-error' : '' }}">
                        <span class="input-group-btn">
                            <span class="btn btn-info shiny btn-file">
                                <i class="btn-label fa fa-file"> </i> Избери фајл... <input type="file" name="file">
                            </span>
                        </span>
                    <input type="text" class="form-control" readonly="">
                </div>
                <br/>

                <div class="form-group">
                    <label for="name">Име на фајл</label>
                    <input type="text" class="form-control" id="filename" name="filename" placeholder="Enter file name"
                           value="{{  $category->filename }}">
                </div>


                @if ($errors->has('image')) <p class="alert alert-danger">{{ $errors->first('image') }}</p> @endif


                <div class="form-group">
                    <label for="description">Опис на категоријата</label>
                    <textarea class="ckeditor" id="elm3" name="description">{{ $category->description }}</textarea>
                </div>
                @if ($errors->has('description')) <p
                        class="alert alert-danger">{{ $errors->first('description') }}</p> @endif


                <button type="submit" class="btn btn-default">Обнови категорија</button>
                {!! Form::close() !!}
            </div>
        </div>



    </div>



@endsection
