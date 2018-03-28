@extends('layouts.main');

@section('main')
<div id="container">
    <h3>Kaikki ilmoitukset</h3>
    <hr>
    @if(count($posts) >= 1)
        @foreach($posts as $post)
    
            <article>
            <h3>{{$post->title}}</h3><h2>{{$post->user->name}}</h2><span>{{$post->category}}</span>
            <p>{{$post->created_at}}</p>
            <p>{{$post->body}}</p>
            </article>
    
        @endforeach
    @else
        <p>NO POSTS</p>
    @endif
</div>
@endsection