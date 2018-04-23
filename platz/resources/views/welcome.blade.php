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
            <h3 class="subinfo"><b>{{$post->category}}</b> - {{$post->title}} | <b>Lisätty:</b><a href="profiles/{{$post->user->id}}" style="color:#ff794c;"> {{$post->user->name}}</a> - {{$post->created_at}}<i style="font-size:24px; float:right;" class="fa">&#xf107;</i></h3>
                
            <hr>
            <div class="box">{!!nl2br(e($post->body))!!}<br>
                @if($post->image == 'noimage.png')
                    <img class="img-fluid articleimg" src="/storage/noimage.png" alt="kuva"><br>
                @else
                <a data-lightbox="{{$post->id}}" data-caption="{{$post->title}}" href="/storage/{{$post->user->name}}/{{$post->image}}"><img class="img-fluid articleimg" src="/storage/{{$post->user->name}}/{{$post->image}}"></a>
                @endif
                <p><b>Sähköposti: {{$post->user->email}}</b><br></p>
                <p><b>Kotikaupunki: {{$post->user->city}}</b></p> 
                <a href="#" data-toggle="modal" data-target="#{{$post->id}}" style="cursor:pointer;text-decoration:underline; display: inline; color:#ff794c;">Ilmianna ilmoitus</a> |
                <a href="/posts/{{$post->id}}" style="cursor:pointer;text-decoration:underline; display: inline; color:#ff794c;">Avaa omassa ikkunassa</a>
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
        <h4>Ei ilmoituksia saatavilla :(</h4>
    @endif
</div>
@endsection
@section('nav')
<div class="menu" id="myTopnav">
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        <p style="display:block; margin:auto; margin-left:10%;">Etsi ilmoituksia</p>
        <a href="/myynti" class="btn btn-secondary">Myydään</a>
        <a href="/osto" class="btn btn-secondary">Ostetaan</a>
        <a href="/vaihto" class="btn btn-secondary">Vaihdetaan</a>
        <a style="margin-top:3px;">
            {!! Form::open(['action' => 'PagesController@haku', 'method' => 'POST']) !!}

                    {{Form::text('haku', '', ['class' => 'form-control', 'style'=>'display:inline;width:75%;'])}}

                    {{Form::image('images/search-icon.png', '', ['style'=>'width:25px;display:inline;margin-left:10px;'])}}


            {!! Form::close() !!}
        
          
        </a>
</div>  
@endsection
@section('jumbo')
<aside>
        <div class="jumbotron jumbotron-fluid" id="jumbo">
                @guest
            <div class="container">
                <h1 class="display-4" id="jumbo-h1">Tervetuloa Platziin</h1>
                <p class="lead">Olemme ihmiseltä ihmiselle palveluita tarjoava sivu. Myy, osta ja vaihda sitä mitä tarvitset tai parhaiten osaat!</p>
                
            </div>
                @else
            <div class="container">
                <h1 class="display-4" id="jumbo-h1">Tervetuloa, {{ Auth::user()->name }}!</h1>
                <p class="lead">Hei! Nyt voit lisätä omia ilmoituksia tai selata muiden jättämiä ilmoituksia.</p>
                </div>
                @endguest
             @include('inc.messages')
            
        </div>
    </aside>
@endsection