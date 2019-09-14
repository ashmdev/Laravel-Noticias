@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-dark text-white">

                    <div class="card-header">
                        <p class="card-title"> Crear entrada</p>
                    </div>

                    <div class="card-body bg-light text-dark">
                        {!! Form::open(['route' => 'posts.store', 'files' => true]) !!}

                        @include('admin.posts.partials.form')

                        {!! Form::close() !!}
                    </div>

                    <div class="card-footer">

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
