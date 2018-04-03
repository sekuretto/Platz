@extends('layouts.main');

@section('main')
<div class="container">
    <h3>Kaikki ilmoitukset</h3>
    <hr>
    @if(count($posts) >= 1)
        @foreach($posts as $post)
    
            <article>
            <h3 class="subinfo">{{$post->category}} - {{$post->title}} | {{$post->user->name}} - {{$post->created_at}}</h3>
            <p class="box">{{$post->body}}</p>
            </article>
    
        @endforeach
    @else
        <p>NO POSTS</p>
    @endif
</div>
@endsection