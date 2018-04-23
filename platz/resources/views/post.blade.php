@extends('layouts.main')

@section('main')
<div class="container">
    <h3>Pysyväislinkki: <b>{{$post->title}}</b></h3>
    <hr>
    <article style="margin-bottom: 100px">
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

@endsection