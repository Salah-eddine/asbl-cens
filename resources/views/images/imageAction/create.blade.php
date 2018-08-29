@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    
@stop

@section('content')
<form method="POST" action="{{route("action.store")}}" enctype="multipart/form-data" novalidate>
  @csrf
  Image
        <div class="input-group w-50 ">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
                <input name="image" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
        </div>
        <div class="form-group w-50">
                <label for="exampleInputEmail1">etiquette</label>
                @if ($errors->has("etiquette"))
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->get("etiquette") as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <input class="form-control" value="{{old("etiquette")}}" placeholder="etiquette" type="text" name="etiquette" id="">
        </div>
  
       
        <button type="submit" class="btn btn-primary mt-4">Submit</button>
      </form>
@stop