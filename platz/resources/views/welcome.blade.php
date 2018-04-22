@extends('layouts.main')

@section('main')
<div class="container">
    @if($foo == 1)
    <h3>Ilmoitukset: Myydään</h3>
    @elseif($foo == 2)
    <h3>Ilmoitukset: Ostetaan</h3>
    @elseif($foo == 3)
    <h3>Ilmoitukset: Vaihdetaan</h3>
    @elseif($foo == 4)
    <h3>Tulokset haulla <b>{{$haku}}</b></h3>
    @elseif($foo == 5)
    <h3>Kaikki ilmoitukset</h3>
    @endif
    <hr>
    @if(count($posts) >= 1)
        @foreach($posts as $post)
    
            <article>
            <h3 class="subinfo"><b>{{$post->category}}</b> - {{$post->title}} | <b>Lisätty:</b><a href="profiles/{{$post->user->id}}"> {{$post->user->name}}</a> - {{$post->created_at}}</h3>
            <hr>
            <div class="box">{!!nl2br(e($post->body))!!}<br>
                @if($post->image == 'noimage.png')
                    <img class="img-fluid articleimg" src="/storage/noimage.png" alt="kuva"><br>
                @else
                <a data-lightbox="{{$post->id}}" data-caption="{{$post->title}}" href="/storage/{{$post->user->name}}/{{$post->image}}"><img class="img-fluid articleimg" src="/storage/{{$post->user->name}}/{{$post->image}}"></a>
                @endif
                <p><b>Sähköposti: {{$post->user->email}}</b><br></p>
                <p><b>Kotikaupunki: {{$post->user->city}}</b></p> 
                <a href="#" data-toggle="modal" data-target="#{{$post->id}}" style="cursor:pointer;text-decoration:underline; display: inline">Ilmianna ilmoitus</a>
                <a href="/posts/{{$post->id}}" style="cursor:pointer;text-decoration:underline; display: inline">Pysyväislinkki</a>
            </div>
            </article>
            <br>
    <div class="modal" id="{{$post->id}}" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Ilmianna ilmoitus: {{ $post->title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  {!! Form::open(['action' => 'PagesController@report', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                            <div class="form-group">
                                {{Form::label('reason', 'Valitse ilmiannon tyyppi')}}
                {{Form::select('reason', ['Valitse' => 'Valitse', 'Laiton' => 'Laiton', 'Sopimaton' => 'Sopimaton', 'Vilpillinen' => 'Vilpillinen', 'Muu syy' => 'Muu syy'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('body', 'Lisätietoja')}}
                                {{Form::textarea('body', '', ['class' => 'form-control'])}}
                                {{Form::textarea('id', $post->id, ['style' => 'display:none'])}}
                                {{Form::textarea('title', $post->title, ['style' => 'display:none'])}}
                                {{Form::textarea('postBody', $post->body, ['style' => 'display:none'])}}
                            </div>
                  

              </div>
              <div class="modal-footer">
                  {{Form::submit('Lähetä ilmianto', ['class' => 'btn btn-primary'])}}
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Peruuta</button>
              </div>
                {!! Form::close() !!}
            </div>
      </div>
</div>


        @endforeach
    {{$posts->links()}}
    @else
        <p>NO POSTS</p>
    @endif
</div>
@endsection
@section('nav')
<div class="menu" id="myTopnav">
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        <a style="display:block; margin: 0;">Etsi ilmoituksia</a>
        <a href="/myynti" class="btn btn-secondary">Myydään</a>
        <a href="/osto" class="btn btn-secondary">Ostetaan</a>
        <a href="/vaihto" class="btn btn-secondary">Vaihdetaan</a>
        <a>
            {!! Form::open(['action' => 'PagesController@haku', 'method' => 'POST']) !!}

                    {{Form::text('haku', '', ['class' => 'form-control', 'style'=>'display:inline;width:80%;'])}}

                    {{Form::image('images/search-icon.png', '', ['style'=>'width:30px;display:inline;margin-left:10px;'])}}


            {!! Form::close() !!}
        
          
        </a>
</div>  
@endsection