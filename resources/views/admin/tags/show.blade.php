@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card bg-dark text-white">

                    <div class="card-header">
                        <p class="card-title"> Ver etiqueta</p>
                    </div>

                    <div class="card-body bg-light text-dark">
                        <pre>
                            <p><strong>Nombre:</strong> {{$tag->name}}</p>
                            <p><strong>Slug:</strong> {{$tag->slug}}</p>
                        </pre>
                    </div>

                    <div class="card-footer">

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection