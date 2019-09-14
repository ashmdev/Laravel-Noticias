@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>Lista de articulos</h1>
        <div class="row">

            @foreach($posts as $post)
            <div class="col-xl-4 col-md-4 col-sm-12">
                <div class="card text-white" style="width:500px">
                    @if($post->image)
                        <img width="498" height="249" class="card-img-top "  src="{{$post->image}}" alt="Card image">
                    @endif
                    <div class="card-img-overlay">
                        <h4 class="card-title">{{$post->name}}</h4>
                        <p class="card-text">{{$post->excerpt}}</p>
                        <a href="{{route('post',$post->slug)}}" class="btn btn-primary">Leer Mas</a>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
        {{$posts->render()}}
    </div>
@endsection

