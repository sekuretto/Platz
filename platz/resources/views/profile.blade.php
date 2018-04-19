@extends('layouts.main');

@section('main')
<div id="containerprofile">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#profiili">Profiili</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#omatilmoitukset">Omat ilmoitukset</a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="profiili" class="container tab-pane active"><br>
                <h2>Omat tiedot</h2>
                <h5>Sähköposti: {{ $user->email }}</h5>
                <h5>Kaupunki: {{ $user->city }}</h5>
                <hr>
                        <h2>Muokkaa omia tietojasi</h2>
                    {!! Form::open(['action' => ['ProfileController@update', $user->id], 'method' => 'POST']) !!}
                        <div class="form-group">
                        {{Form::label('email', 'Sähköposti')}}
                        {{Form::text('email', $user->email, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                        {{Form::label('city', 'Kotikaupunki')}}
                        {{Form::text('city', $user->city, ['class' => 'form-control'])}}
                        </div>
                        {{Form::hidden('_method','PUT')}}
                        {{Form::submit('Tallenna muutokset', ['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}
                        <br>
                <hr>
                <form method="get" action="platzform.php">
                    <div class="form-group">
                        <h2>Vaihda salasana</h2>
                        <label>Uusi salasana:</label> 
                        <input type="password" class="form-control" size="30" name="uusisalasana"><br>
                        <label>Vahvista salasana:</label> 
                        <input type="password" class="form-control" size="30" name="vahvistus"><br>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#salasana">Vaihda salasana</button>
                        <input type="reset" class="btn btn-secondary" value="Peruuta">
                        <br>
                    </div>
                </form>
                <hr>
                <form method="get" action="platzform.php">
                    <div class="form-group">
                        <h2>Poista käyttäjä</h2>
                        <button style="margin-bottom: 100px" type="button" class="btn btn-primary" name="submit" data-toggle="modal" data-target="#poistakayttaja">
                            Poista käyttäjä
                        </button>
                        <br>
                    </div>
                </form>
            </div>
            
        <!--KÄYTTÄJÄN POISTO-->
        <div class="modal hide fade" tabindex="-1" role="dialog" id="poistakayttaja">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Poistetaanko käyttäjä? Oletko aaaaivan varma tästä? Toimintoa ei voi perua.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              {!!Form::open(['action' => ['PagesController@deleteuser', $user->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::submit('Kyllä, poista minut', ['class' => 'btn btn-danger'])}}
              {!!Form::close()!!}

          </div>
          
        </div>
      </div>       
    </div>
            
            <br>
            <div id="omatilmoitukset" class="container tab-pane fade"><br>
                
                
                            @foreach($user->posts as $post)
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
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Poista ilmoitus', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </div>
                                </article>
                                <br>
                            @endforeach
            </div>
        </div>
    </div>
@endsection