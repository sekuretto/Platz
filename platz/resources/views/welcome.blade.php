@extends('layouts.main');

@section('main')
<div class="container">
    @if($foo == 1)
    <h3>Myynti</h3>
    @elseif($foo == 2)
    <h3>Osto</h3>
    @elseif($foo == 3)
    <h3>Vaihto</h3>
    @elseif($foo == 4)
    <h3>Tulokset haulla <b>{{$haku}}</b></h3>
    @elseif($foo == 5)
    <h3>Kaikki ilmoitukset</h3>
    @endif
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
                <a data-toggle="modal" data-target="#ilmianna">Ilmianna ilmoitus</a>
            </div>
            </article>
            <br>
        @endforeach
    @else
        <p>NO POSTS</p>
    @endif
    <div class="modal" id="ilmianna" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ilmianna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form>
                    <div class="form-group col-md-6">
                        <label for="inputState">Valitse ilmiannon tyyppi</label>
                        <select id="inputState" class="form-control">
                            <option selected>Valitse vaihtoehdoista</option>
                            <option>Laiton</option>
                            <option>Sopimaton</option>
                            <option>Vilpillinen</option>
                            <option>Muu syy</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Lisätietoja"></textarea>
                    </div>
            </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Lisää ilmoitus</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Peruuta</button>
      </div>
    </div>
  </div>
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