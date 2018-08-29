@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form method="POST" action="{{route("inscription.store")}}">
    @csrf
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
    {{--Input pour le n° de téléphone--}}
    <div class="form-group w-100">
            <label for="exampleInputPassword1">Phone</label>
            @if ($errors->has("phone"))
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->get("phone") as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <input value="{{old("phone")}}" name="phone" type="text" class=" bg-white form-control " id="exampleInputPassword1" placeholder="Phone">
    {{-- Choix de la team--}}
    <div class="form-group w-25">
        <label for="inputState">Team</label>
        @if ($errors->has("nom"))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->get("nom") as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <select  name="team" id="inputState" class="form-control">
            <option selected>...</option>
            @foreach($teams as $team)
                <option name="team" value="{{$team->id}}">{{$team->nom}}</option>
            @endforeach
        </select>
    </div>
    {{--Textarea pour laisser un message --}}
    <textarea name="" id="text-ckeditor" cols="30" rows="10">{{old("message")}}</textarea>
    <button type="submit" class=" mt-4 btn btn-success">Inscrire</button>
</form>
@stop
