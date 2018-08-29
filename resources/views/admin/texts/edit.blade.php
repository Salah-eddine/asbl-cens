@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    
@stop

@section('content')
<form method="POST" action="{{route("text.update",["text"=>$text->id])}}" novalidate>
@method("PATCH")
  @csrf
  <div class="form-group">
      <label for="exampleInputPassword1">Nom</label>
      @if ($errors->has("nom"))
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->get("nom") as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
        </div>
        @endif
        <input value="{{old("nom")}}" name="nom" type="text" class=" bg-white form-control " id="exampleInputPassword1" placeholder="Textj">
</div>
                <div class="form-group">
                <label for="exampleInputEmail1">Texts</label>
                @if ($errors->has("contenu"))
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->get("contenu") as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <textarea name="contenu" id="text-ckeditor" cols="30" rows="10">{{old("contenu")}}</textarea>
                    </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@stop