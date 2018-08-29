@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    
@stop

@section('content')
<div class="row justify-content-end mb-2 mr-2">
        <a class="m-0 btn btn-primary" href="{{route("citation.create")}}">Rajouter une citation</a>
</div>
    <table class="table table-light">
        <thead>
            
            <tr>
                <th>#</th>
                <th>Citation</th>
                <th>Auteur</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($citations as $citation)
            <tr>
                <td> {{$loop->iteration}}</td>
                <td>{!!substr($citation->citation,0,50)!!}...</td>
                <td>{{$citation->auteur}}</td>
                <div class="">
                    <td class="d-flex">
                        <a class="btn btn-primary text-wite" href="{{route("citation.show",["citation"=>$citation->id])}}">Voir</a>
                        <a class="btn btn-success" href="{{route("citation.edit",["citation"=>$citation->id])}}">Modifiez</a>
                        <form method="POST" style="width:min-content" action="{{route("citation.destroy",["citation"=>$citation->id])}}">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger">Suprrimé</button>
                        </form>
                    </td>
                  
                    
                </div>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop