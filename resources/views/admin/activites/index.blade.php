@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    
@stop

@section('content')
<div class="row justify-content-end mb-2 mr-2">
        <a class="m-0 btn btn-primary" href="{{route("activite.create")}}">Rajouter une activite</a>
</div>
    <table class="table table-light">
        <thead>
            
            <tr>
                <th>#</th>
                <th>Activite</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activites as $activite)
            <tr>
                <td> {{$loop->iteration}}</td>
                <td>{{$activite->nom}}</td>
                <td>{!!$activite->description!!}</td>
                <div class="">
                    <td class="d-flex">
                        <a class="mx-1 btn btn-primary text-wite" href="{{route("activite.show",["activite"=>$activite->id])}}">Voir</a>
                        <a class="mx-1 btn btn-success" href="{{route("activite.edit",["activite"=>$activite->id])}}">Modifiez</a>
                        <form method="POST" style="width:min-content" action="{{route("activite.destroy",["activite"=>$activite->id])}}">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="mx-1 btn btn-danger">Suprrimé</button>
                        </form>
                    </td>
                  
                    
                </div>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop