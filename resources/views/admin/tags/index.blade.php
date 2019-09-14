@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <p class="card-title"> Lista de etiquetas</p>
                        <a class="btn btn-sm btn-primary float-right" href="{{route('tags.create')}}"> Crear</a>
                    </div>
                    <div class="card-body bg-light">
                        <div class="table-responsive bg-dark" bg-dark>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th  class="text-danger" width="10px">ID</th>
                                        <th >Nombre</th>
                                        <th colspan="3">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($tags as $tag)
                                    <tr>
                                        <td class="text-warning">{{$tag->id}}</td>
                                        <td>{{$tag->name}}</td>
                                        <td width="10px">
                                            <a class="btn btn-sm btn-light" href="{{route('tags.show',$tag->id)}}">Ver</a>
                                        </td>
                                        <td width="10px">
                                            <a class="btn btn-sm btn-primary" href="{{route('tags.edit',$tag->id)}}">Editar</a>
                                        </td>

                                        <td width="10px">
                                            {!! Form::open(['route'=> ['tags.destroy', $tag->id],'method'=>'DELETE']) !!}
                                                <button class="btn btn-sm btn-danger">
                                                    Eliminar
                                                </button>
                                            {!! Form::close() !!}
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-12 mx-auto">
                            {{$tags->render()}}
                        </div>
                    </div>
                    <div class="card-footer">

                    </div>


                </div>

            </div>
        </div>
    </div>
@endsection
