@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card bg-dark text-white">

                    <div class="card-header">
                        <p class="card-title"> Ver entrada</p>
                    </div>

                    <div class="card-body bg-light text-dark">

                        <p><strong>Nombre:</strong> {{$post->name}}</p>
                        <p><strong>Slug:</strong> {{$post->slug}}</p>
                        <p class="text-justify"><strong>Descripciòn:</strong>  {!! $post->body !!}<br></p>
                        <img  class="img-fluid" src="{{$post->image}}" alt="">

                    </div>

                    <div class="card-footer">

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection