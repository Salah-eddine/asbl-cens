@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    
@stop

@section('content')
<div class="row justify-content-end mb-2 mr-2">
        <a class="m-0 btn btn-primary" href="{{route("caroussel.create")}}">Rajouter une caroussel</a>
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
            @foreach($caroussels as $caroussel)
            <tr>
                <td> {{$loop->iteration}}</td>
               
                <td>{{$caroussel->nom}}</td>
                <div class="">
                    <td class="d-flex">
                        <a class=" mx-2 btn btn-primary text-wite" href="{{route("caroussel.show",["caroussel"=>$caroussel->id])}}">Voir</a>
                        <a class=" mx-2 btn btn-success" href="{{route("caroussel.edit",["caroussel"=>$caroussel->id])}}">Modifiez</a>
                        <form method="POST" style="width:min-content" action="{{route("caroussel.destroy",["caroussel"=>$caroussel->id])}}">
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