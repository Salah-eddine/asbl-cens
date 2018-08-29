@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    
@stop

@section('content')
<div class="row justify-content-end mb-2 mr-2">
        <a class="m-0 btn btn-primary" href="{{route("actualite.create")}}">Rajouter une actualites</a>
</div>
    <table class="table table-light">
        <thead>
            
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($actualites as $actualite)
            <tr>
                <td> {{$loop->iteration}}</td>
                <td>{{$actualite->titre}}</td>
                <td>{!!$actualite->description!!}</td>
                <div class="">
                    <td class="d-flex">
                        <a class="mx-1 btn btn-primary text-wite" href="{{route("actualite.show",["actualite"=>$actualite->id])}}">Voir</a>
                        <a class="mx-1 btn btn-success" href="{{route("actualite.edit",["actualite"=>$actualite->id])}}">Modifiez</a>
                        <form method="POST" style="width:min-content" action="{{route("actualite.destroy",["actualite"=>$actualite->id])}}">
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