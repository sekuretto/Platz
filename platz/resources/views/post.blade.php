@extends('layouts.main');

@section('main')
<div class="container">
    <h3>Pysyväislinkki: <b>{{$post->title}}</b></h3>
    <hr>
    <article>
            <h3 class="subinfo"><b>{{$post->category}}</b> - {{$post->title}} | <b>Lisätty:</b> {{$post->user->name}} - {{$post->created_at}}</h3>
            <hr>
            <p>{{$post->body}}<br></p>
                @if($post->image == 'noimage.png')
                    <img class="img-fluid articleimg" src="/storage/noimage.png" alt="kuva"><br>
                @else
                    <img class="img-fluid articleimg" src="/storage/{{$post->user->name}}/{{$post->image}}" alt="kuva"><br>
                @endif
                <p><b>Sähköposti: {{$post->user->email}}</b><br></p>
                <p><b>Kotikaupunki: {{$post->user->city}}</b></p> 
                <a href="#" data-toggle="modal" data-target="#{{$post->id}}" style="cursor:pointer;text-decoration:underline; display: inline">Ilmianna ilmoitus</a>      
    </article>
</div>

@endsection