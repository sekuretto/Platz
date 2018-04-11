@extends('layouts.main');

@section('main')
<div class="container">
    <h3>Kaikki ilmoitukset</h3>
    <hr>
    @if(count($posts) >= 1)
        @foreach($posts as $post)
    
            <article>
            <h3 class="subinfo"><b>{{$post->category}}</b> - {{$post->title}} | <b>Lisätty:</b> {{$post->user->name}} - {{$post->created_at}}</h3>
            <p class="box">{{$post->body}}<br>
            <b>Sähköposti: {{$post->user->email}}</b><br>
            <b>Kotikaupunki: {{$post->user->city}}</b><br>
            <img src="/storage/{{$post->user->name}}/{{$post->image}}" alt="kuva">
            </p>
            
            </article>
    
        @endforeach
    @else
        <p>NO POSTS</p>
    @endif
</div>
@endsection