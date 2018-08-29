@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
   
@stop

@section('content')
<div class="d-flex justify-content-end mb-1 ">
    <a class="btn btn-primary text-white" href="{{route("staff.create")}}">Inscris une personne manuellement</a>
</div>
    <table class="table table-light">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                
                <th>Mail</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($equipes as $equipe)
                <tr>
                        <td>{{$loop->iteration}}</td>
                        <td class="d-flex">
                            <div class=""> {{$equipe->nom}}</div>
                            <div class="ml-2"> {{$equipe->prénom}}</div>
                        </td>
                        <td>{{$equipe->mail}}</td>
                        <td>{{$equipe->rôle}}</td>
                        <td class="d-flex">
                            <a class="mx-2 btn btn-primary text-white" href="{{route("staff.show",["staff"=>$equipe->id])}}">Voir</a>
                            <a class="mx-2 btn btn-success" href="{{route("staff.edit",["staff"=>$equipe->id])}}">Modifiez</a>
                            <form method="POST" action="{{route("staff.destroy",["staff"=>$equipe->id])}}">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger mx-2">Supprimer</button>
                            </form>
                        </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop