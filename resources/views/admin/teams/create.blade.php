@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
  
@stop

@section('content')
<div class="form-group w-50">
<form method="POST" action="{{route("team.store")}}">
    @csrf
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
    <input value="{{old("nom")}}" name="nom" type="text" class=" bg-white form-control " id="exampleInputPassword1" placeholder="Nom">

    <button type="submit" class="btn btn-success mt-4">Ajouter</button>
</form>
@stop