@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    
@stop

@section('content')
<form method="POST" action="{{route("citation.store")}}" novalidate>
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Citations</label>
    @if ($errors->has("citation"))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->get("citation") as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <textarea name="citation" id="text-ckeditor" cols="30" rows="10">{{old("citation")}}</textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Auteur</label>
          @if ($errors->has("auteur"))
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->get("auteur") as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
        <input value="{{old("auteur")}}" name="auteur" type="text" class=" bg-white form-control " id="exampleInputPassword1" placeholder="Password">
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@stop