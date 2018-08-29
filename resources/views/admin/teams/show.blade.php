@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    
@stop

@section('content')
<div class="cotainer d-flex justify-content-center">

        <div class="box box-primary w-50 py-3 pl-3">
            
            <label class="text-primary" for="nom">Nom:</label>
            <h4 id="nom">{{$team->nom}}</h4>
           
        </div>
    </div>
@stop