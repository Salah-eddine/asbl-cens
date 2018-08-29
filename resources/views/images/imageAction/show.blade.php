@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<img src="{{Storage::disk("imageAction")->url($action->image)}}" alt="test">
@stop