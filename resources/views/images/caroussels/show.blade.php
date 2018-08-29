@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<img src="{{Storage::disk("imageCaroussel")->url($caroussel->image)}}" alt="test">
@stop