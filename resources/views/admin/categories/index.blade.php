@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <p class="card-title"> Lista de categorias</p>
                        <a class="btn btn-sm btn-primary float-right" href="{{route('categories.create')}}"> Crear</a>
                    </div>
                    <div class="card-body bg-light">
                        <div class="table-responsive bg-dark" >
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th  class="text-danger" width="10px">ID</th>
                                        <th >Nombre</th>
                                        <th colspan="3">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td class="text-warning">{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td width="10px">
                                            <a class="btn btn-sm btn-light" href="{{route('categories.show',$category->id)}}">Ver</a>
                                        </td>
                                        <td width="10px">
                                            <a class="btn btn-sm btn-primary" href="{{route('categories.edit',$category->id)}}">Editar</a>
                                        </td>

                                        <td width="10px">
                                            {!! Form::open(['route'=> ['categories.destroy', $category->id],'method'=>'DELETE']) !!}
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
                            {{$categories->render()}}
                        </div>
                    </div>
                    <div class="card-footer">

                    </div>


                </div>

            </div>
        </div>
    </div>
@endsection
