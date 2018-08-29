@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
   
@stop

@section('content')
<div class="d-flex justify-content-end mb-1 ">
    <a class="btn btn-primary text-white" href="{{route("inscription.create")}}">Inscris une personne manuellement</a>
</div>
    <table class="table table-light">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Mail</th>
                <th>Team</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inscriptions as $inscription)
                <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$inscription->nom}}</td>
                        <td>{{$inscription->mail}}</td>
                        <td>{{$inscription->team->nom}}</td>
                        <td class="d-flex">
                            <a class="mx-2 btn btn-primary text-white" href="{{route("inscription.show",["inscription"=>$inscription->id])}}">Voir</a>
                            <a class="mx-2 btn btn-success" href="{{route("inscription.edit",["inscription"=>$inscription->id])}}">Modifiez</a>
                            <form method="POST" action="{{route("inscription.destroy",["inscription"=>$inscription->id])}}">
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