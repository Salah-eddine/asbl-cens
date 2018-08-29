@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    
@stop

@section('content')
<div class="row justify-content-end mb-2 mr-2">
        <a class="m-0 btn btn-primary" href="{{route("text.create")}}">Rajouter une text</a>
</div>
    <table class="table table-light">
        <thead>
            
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Text</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($texts as $text)
            <tr>
                <td> {{$loop->iteration}}</td>
                <td>{{$text->nom}}</td>
                <td>{!!substr($text->contenu,0,50)!!}...</td>
                <div class="">
                    <td class="d-flex">
                        <a class="btn mx-1 btn-primary text-wite" href="{{route("text.show",["text"=>$text->id])}}">Voir</a>
                        <a class="btn mx-1 btn-success" href="{{route("text.edit",["text"=>$text->id])}}">Modifiez</a>
                        <form class="mx-1" method="POST" style="width:min-content" action="{{route("text.destroy",["text"=>$text->id])}}">
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