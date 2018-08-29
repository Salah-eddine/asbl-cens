@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    
@stop

@section('content')
<div class="row justify-content-end mb-2 mr-2">
        <a class="m-0 btn btn-primary" href="{{route("action.create")}}">Rajouter une action</a>
</div>
    <table class="table table-light">
        <thead>
            
            <tr>
                <th>#</th>
                <th>Code</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($actions as $action)
            <tr>
                <td> {{$loop->iteration}}</td>
               
                <td>{{$action->etiquette}}</td>
                <div class="">
                    <td class="d-flex">
                        <a class="btn btn-primary text-wite" href="{{route("action.show",["action"=>$action->id])}}">Voir</a>
                        <a class="btn btn-success" href="{{route("action.edit",["action"=>$action->id])}}">Modifiez</a>
                        <form method="POST" style="width:min-content" action="{{route("action.destroy",["action"=>$action->id])}}">
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