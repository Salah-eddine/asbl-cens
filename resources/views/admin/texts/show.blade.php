@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="box box-primary">
        <label class="text-primary" for="nom">Nom:</label>
        <div id="nom">{{$text->nom}}</div>
        <label class="text-primary" for="contenu">Contenu:</label>
    <div id="contenu">{!!$text->contenu!!}</div>
    </div>
@stop