@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-dark text-white">

                    <div class="card-header">
                        <p class="card-title"> Editar etiqueta</p>
                    </div>

                    <div class="card-body bg-light">
                        {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
                        @include('admin.tags.partials.form')
                        {!! Form::close() !!}
                    </div>

                    <div class="card-footer">

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection