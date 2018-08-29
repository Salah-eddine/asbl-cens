@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form method="POST" action="{{route("staff.store")}}">
    @csrf
    {{--Input pour le prénom--}}
    <div class="form-group w-50">
        <label for="exampleInputPassword1">prénom</label>
        @if ($errors->has("prénom"))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->get("prénom") as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <input value="{{old("prénom")}}" name="prénom" type="text" class=" bg-white form-control " id="exampleInputPassword1" placeholder="prénom">
     {{--Input pour le nom--}}
     <div class="form-group w-50">
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
    {{--Input  pour mail--}}
    <div class="form-group ">
        <label for="exampleInputPassword1">mail</label>
        @if ($errors->has("mail"))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->get("mail") as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <input value="{{old("mail")}}" name="mail" type="text" class=" bg-white form-control " id="exampleInputPassword1" placeholder="Password">
    {{--Input pour le rôle--}}
    <div class="form-group w-100">
            <label for="exampleInputPassword1">rôle</label>
            @if ($errors->has("rôle"))
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->get("rôle") as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <input value="{{old("rôle")}}" name="rôle" type="text" class=" bg-white form-control " id="exampleInputPassword1" placeholder="rôle">

    <button type="submit" class=" mt-4 btn btn-success">Inscrire</button>
</form>
@stop
