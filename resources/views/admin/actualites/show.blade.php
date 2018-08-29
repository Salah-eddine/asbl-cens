@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
    <div class="container justify-content-center">
        
        <div class="pl-3 py-3 w-50 box box-primary">
            <label class="text-primary" for="titre">Titre:</label>
            <h4>{{$actualite->titre}}</h4>
            <label class="text-primary" for="description">Description:</label>
            <p><b>{!!$actualite->description!!}</b></p>
            <label class="text-primary" for="image">Image:</label>
            <div>
                <img src="{{Storage::disk("imageActualite")->url($actualite->image)}}" alt="test">
            </div>
        </div>
    </div>
@stop

