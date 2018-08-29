@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
   
@stop

@section('content')
<div class="cotainer d-flex justify-content-center">

    <div class="box box-primary w-50 py-3 pl-3">
        
        <label class="text-primary" for="nom">Nom:</label>
        <h4 id="nom">{{$equipex->nom}}</h4>
        <label for="prénom" class="text-primary">prénom:</label>
        <h4 id="prénom">{{$equipex->prénom}}</h4>
        <label class="text-primary" for="mail">Mail:</label>
        <h4 id="mail">{{$equipex->mail}}</h4>
        <label class="text-primary" for="team">Team:</label>
        <h4 id="team">{{$equipex->Rôle}}</h4>
    </div>
</div>
@stop