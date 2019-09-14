@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <p class="card-title"> Lista de entradas</p>
                        <a class="btn btn-sm btn-primary float-right" href="{{route('posts.create')}}"> Crear</a>
                    </div>
                    <div class="card-body bg-light">
                        <div class="table-responsive bg-dark">
                            <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->name }}</td>
                                <td width="10px">
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-light">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
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
                            {{$posts->render()}}
                        </div>
                    </div>
                    <div class="card-footer">

                    </div>


                </div>

            </div>
        </div>
    </div>
@endsection
