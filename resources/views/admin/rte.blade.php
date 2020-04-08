@extends('layouts.app')

@section('scripts')
<script src="/assets/js/ckeditor/ckeditor.js"></script>
<script src="/assets/js/ckeditor/config.js"></script>
@endsection



@section('content')

<div class="page-body">
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <label for="title">Title</label>
        <textarea class="ckeditor" id="title"></textarea>
        <label for="subtitle">Subtitle</label>
        <textarea class="ckeditor" id="subtitle"></textarea>
        <label for="elm1">Original text</label>
        <textarea class="ckeditor" id="elm1"></textarea>
        <label for="elm2">Translated text</label>
        <textarea class="ckeditor" id="elm2"></textarea>
        <label for="elm3">Edited text</label>
        <textarea class="ckeditor" id="elm3"></textarea>
    </div>
</div>
</div>

@endsection
