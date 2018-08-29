@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
    <div class="w-50 box box-primary">
        <h1 class="text-primary">Citation</h1>
        <p>{!!$citation->citation!!}</p>
        <h1 class="text-primary">Auteur</h1>
    <h4>{{$citation->auteur}}</h4>
    </div>
@stop