@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form method="POST" action="{{route("caroussel.store")}}" enctype="multipart/form-data">
@csrf
    <div class="input-group w-25 mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
        </div>
        <div class="custom-file">
          <input name="image" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
      </div>
      
      <div class="input-group w-25">
      
      
        <input type="text" aria-label="Last name" name="nom" class="form-control">
      </div>
      <button type="submit" class="btn btn-success my-3">Ajouter</button>
</form>
@stop