@extends('layouts.main');

@section('main')
<div id="container">
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
                    {!! Form::open(['action' => ['ProfileController@update', Auth::user()->id], 'method' => 'POST']) !!}
                        <div class="form-group">
                        {{Form::label('email', 'Sähköposti')}}
                        {{Form::text('email', Auth::user()->email, ['class' => 'form-control'])}}
                        </div>
                        <div class="form-group">
                        {{Form::label('city', 'Kotikaupunki')}}
                        {{Form::text('city', Auth::user()->city, ['class' => 'form-control'])}}
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
                        <button type="button" class="btn btn-primary" name="submit" data-toggle="modal" data-target="#poistakayttaja">
                            Poista käyttäjä
                        </button>
                        <br>
                    </div>
                </form>
            </div>
            <br>
            <div id="omatilmoitukset" class="container tab-pane fade"><br>
                
                
                            @foreach($user->posts as $post)
                                <article>
                                <h3 class="subinfo"><b>{{$post->category}}</b> - {{$post->title}} | <b>Lisätty:</b> {{$post->user->name}} - {{$post->created_at}}</h3>
                                <p class="box">{{$post->body}}<br>
                                {!!Form::open(['action' => ['ProfileController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Poista ilmoitus', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                                </p>
                                </article>
                            @endforeach
            </div>
        </div>
    </div>
@endsection