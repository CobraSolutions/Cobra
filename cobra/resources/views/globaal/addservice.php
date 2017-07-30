@extends('layouts.app')

@section('title')
  <title></title>
@endsection

@section('css')
  <link href="{{ asset('css/view/upload.css') }}" media="all" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/extern/fileinput.css') }}" media="all" rel="stylesheet" type="text/css" >
@endsection

@section('content')

<div class="row">
    <div class="">
        <div class="panel panel-default text-center">
            <div id="headerPanel" class="panel-heading">
              <h1 class="upload-header">Upload</h1>
              <form enctype="multipart/form-data" id="post" method="post" action="/machines/services">
                {{ csrf_field() }}

                <div class="form-group">
                    <label class="control-label">Kies foto</label>
                    <input id="input-2" type="file" class="file" multiple data-show-upload="false" data-show-caption="true">
                    <input type="hidden" name="thumbnail" id="image">
                </div>

                <div class="form-group upload-button">
                  <div class="btn-group">
                    <a class="btn btn-primary" id="submitButton" onclick="validate()"><i class="fa fa-upload" aria-hidden="true"></i> Uploaden</a>
                  </div>
                </div>

              </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script src="{{ asset('js/plugins/piexif.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/plugins/purify.js') }}" type="text/javascript"></script>
<!-- the main fileinput plugin file -->
<script src="{{ asset('js/plugins/fileinput.min.js') }}"></script>
<script src="{{ asset('js/plugins/nl.js') }}"></script>
<script src="{{ asset('js/view/upload.js') }}"></script>

@endsection
