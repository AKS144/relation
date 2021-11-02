@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-5">
                @foreach($posts as $post)
                <h1>{{ $post->title}}</h1>
                <p>{{$post->author->name}}</p>
                <ul>
                    @foreach($post->tags as $tag)
                        <li>Name: {{$tag->name}}     ||     &nbsp Date: {{ $tag->pivot->created_at}}</li>                      
                    @endforeach
                </ul>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection