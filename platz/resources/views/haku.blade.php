@extends('layouts.main');

@section('main')
<div class="container">
    <h3>Tulokset haulla <b>{{$haku}}</b></h3>
    <hr>
    @if(count($posts) >= 1)
        @foreach($posts as $post)
    
            <article>
            <h3 class="subinfo"><b>{{$post->category}}</b> - {{$post->title}} | <b>Lisätty:</b> {{$post->user->name}} - {{$post->created_at}}</h3>
            <hr>
            <div class="box">{{$post->body}}<br>
                @if($post->image == 'noimage.png')
                    <img class="img-fluid articleimg" src="/storage/noimage.png" alt="kuva"><br>
                @else
                    <img class="img-fluid articleimg" src="/storage/{{$post->user->name}}/{{$post->image}}" alt="kuva"><br>
                @endif
                <p><b>Sähköposti: {{$post->user->email}}</b><br></p>
                <p><b>Kotikaupunki: {{$post->user->city}}</b></p>  
            </div>
            </article>
            <br>
        @endforeach
    @else
        <p>NO POSTS</p>
    @endif
</div>
@endsection
@section('nav')
<div class="menu" id="myTopnav">
        <a href="/myynti" class="btn btn-secondary">Myy</a>
        <a href="/osto" class="btn btn-secondary">Osta</a>
        <a href="/vaihto" type="button" class="btn btn-secondary">Vaihda</a>
        {!! Form::open(['action' => 'PagesController@haku', 'method' => 'POST']) !!}

                {{Form::text('haku', '', ['class' => 'form-control'])}}

                {{Form::submit('Hae kaikista ilmoituksista', ['class' => 'btn btn-primary'])}}
                
        {!! Form::close() !!}

</div>  
@endsection