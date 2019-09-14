@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>{{$post->name}}</h1>
        <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12">
                    <h4 class="card-title">{{$post->name}}</h4>
                    <div class="card bg-dark text-white" >
                        <div class="card-header">
                            Categoria:
                            <a href="{{ route('category', $post->category->slug) }}">{{  $post->category->name}}</a>

                        </div>

                        <div class="card-body bg-light text-dark">
                            @if($post->image)
                                <img class="card-img-top img-fluid"  src="{{$post->image}}" alt="Card image">
                            @endif
                            <p class="card-text">{{$post->excerpt}}</p>
                                <hr>
                            {!! $post->body !!}
                                <hr>
                        </div>
                        <div class="card-footer bg-dark text-white">
                            Etiquetas
                            @foreach($post->tags as $tag)
                                <a href="{{ route('tag', $tag->slug) }}">{{$tag->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection

