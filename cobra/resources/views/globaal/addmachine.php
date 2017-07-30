@extends('layouts.app')

@section('title')
  <title>Upload</title>
@endsection

@section('css')
  <link href="{{ asset('css/view/upload.css') }}" media="all" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/extern/fileinput.css') }}" media="all" rel="stylesheet" type="text/css" >
@endsection

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default text-center">
            <div id="headerPanel" class="panel-heading">
              <h1 class="upload-header">Upload</h1>
              <form enctype="multipart/form-data" id="post" method="post" action="/posts/uploaden">
                {{ csrf_field() }}
                <div class="form-group">
                  <label>Nummerplaat</label>
                  <input name="nummerplaat" class="form-control" type="text" placeholder="(max 8 karakters)">
                </div>
                <div class="form-group">
                  <label>Titel</label>
                  <input name="titel" class="form-control" type="text" placeholder="(max 30 karakters)">
                </div>
                <div class="form-group">
                  <label>Beschrijving</label>
                  <textarea name="beschrijving" class="form-control" placeholder="(max 250 karakters)"></textarea>
                </div>
                <div class="form-group">
                  <label>Soort wegpiraat</label>
                  <select class="form-control" name="type">
                      <option value="Hardrijder">Hardrijder</option>
                      <option value="Roekeloos">Roekeloos</option>
                      <option value="Foutparkeerder">Foutparkeerder</option>
                      <option value="Zatlap">Zatlap</option>
                      <option value="Brutaal">Gevaar op de weg</option>
                      <option value="Leerling">Leerling</option>
                      <option value="Leerling">Andere</option>
                  </select>
                </div>
                <br>
                <div class="form-group">
                  <label>Foto uploaden</label><br><i class="fa fa-camera-retro fa-2x"></i>
                  <h6 class=".bg-info">Gelieve een zo duidelijk mogelijk foto up te loaden van het voertuig. Op de foto mag de eigenaar (of inzittenden) van het voertuig niet zichtbaar of niet herkenbaar zijn (lees disclaimer).<br><b> Maximum 5MB.</b></h6>
                  <img class="upload hide" alt="thumbnail upgeload foto"><br>
                  <h3></h3>
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
