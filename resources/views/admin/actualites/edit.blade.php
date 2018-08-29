@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    
@stop

@section('content')
<form method="POST" action="{{route("actualite.update",["actualite"=>$actualite->id])}}"  enctype="multipart/form-data">
@method("PATCH")
  @csrf
  <div class="form-group w-50">
        <label for="exampleInputEmail1">Titre</label>
        @if ($errors->has("titre"))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->get("titre") as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <input class="form-control" value="{{old("titre")}}" placeholder="Titre" type="text" name="titre" id="">
</div>
        <div class="form-group w-50">
          <label for="exampleInputPassword1">Description</label>
          @if ($errors->has("description"))
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->get("description") as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
        <textarea  name="description" id=text-ckeditor cols="30" rows="10">{{old("description")}}</textarea>
        </div>
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
              

        <button type="submit" class="btn btn-primary mt-4">Submit</button>
      </form>
@stop