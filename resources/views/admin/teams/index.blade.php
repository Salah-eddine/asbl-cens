@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
   
@stop

@section('content')
<div class="d-flex justify-content-end mb-1 ">
    <a class="btn btn-primary text-white" href="{{route("team.create")}}">Rajouter une team</a>
</div>
    <table class="table table-light">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$team->nom}}</td>
                    <td class="d-flex">
                            <a class="mx-2 btn btn-primary text-white" href="{{route("team.show",["team"=>$team->id])}}">Voir</a>
                            <a class="mx-2 btn btn-success" href="{{route("team.edit",["team"=>$team->id])}}">Modifiez</a>
                            <form method="POST" action="{{route("team.destroy",["team"=>$team->id])}}">
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