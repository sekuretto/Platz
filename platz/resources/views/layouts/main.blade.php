<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Platz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=News+Cycle" rel="stylesheet">
    <!--<link rel="stylesheet" href="style.css" type="text/css"/>-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Podkova" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
</head>
<body>
    <!-- Yläpalkki -->
    <div class="row">
        <header>
            <a href="/"><img src="<?php echo asset('images/platz.png')?>" alt="logo" class="img-fluid" alt="Responsive image"/></a>
        </header>
        <navbar class="col-7">
            <div class="nav">
                @guest
                    <!--<a data-toggle="modal" data-target="#ilmoitus">Lisää ilmoitus</a>-->
                    <a class="col" data-toggle="modal" data-target="#kirjaudu">Kirjaudu sisään</a>
                    <a class="col" data-toggle="modal" data-target="#register">Luo tunnus</a>
                @else
                    <a class="col" href="/profiles/{{ Auth::user()->id }}" style="margin-left: 100px">Profiili</a>
                    <a class="col" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Kirjaudu ulos</a>    
                    <a class="col" data-toggle="modal" data-target="#ilmoitus">Lisää ilmoitus</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                        </form>          
                @endguest
            </div>
        </navbar>
    </div>
    <!-- JUMBO -->
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
                </div>
                @endguest
             @include('inc.messages')
            
        </div>
    </aside>
         
    <!-- Kategoriat -->
    <menu class="btn-group-vertical">
        <button type="button" class="btn btn-secondary">Myy</button>
        <button type="button" class="btn btn-secondary">Osta</button>
        <button type="button" class="btn btn-secondary">Vaihda</button>
        <div id="search" class="form-control mr-sm-2" type="search" placeholder="Hae" aria-label="Search">
        <input id="input" placeholder="Hae" aria-label="Search"><img id="icon" src="<?php echo asset('images/search-icon.png')?>"></div>
    </menu>      
    
    <!-- Container -->
    <div id="container">
    @yield('main')
        <!--<nav aria-label="Page navigation example" class="sivut">
              <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>-->
        
    </div>
    
    <footer>
        @guest
        <p id="footer-p">Jos onnistuimme tai epäonnistuimme, niin <a id="footer-a" data-toggle="modal" data-target="#palaute">lähetä palautetta</a></p>
        @else
        <p id="footer-p">Jos onnistuimme tai epäonnistuimme, niin <a id="footer-a" data-toggle="modal" data-target="#palaute">lähetä palautetta</a></p>
        @endguest
    </footer>
    
          
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?php echo asset('js/jquery.js')?>"></script>
    <script>
    

    $(document).ready(function() {
    /*Piilottaa box-elementin*/
    $(".box").hide();
    /*When article clicked, shows box-element*/
    $(".subinfo").click(function() {
        /*Finds closest box-element from article and shows it(animated)*/
        $(this).closest("article").find(".box").slideToggle(200);     
        
    });
    
    
});
</script>

<!-- IMLOITUSIKKUNA-->
<div class="modal hide fade" data-focus-on="input:first" id="ilmoitus" tabindex="-1" role="dialog">

    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Lisää ilmoitus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group row">
                {{Form::label('title', 'Otsikko')}}
                {{Form::text('title', '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group row">
                {{Form::label('body', 'Ilmoituksen sisältö')}}
                {{Form::textarea('body', '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group row">
                {{Form::label('category', 'Kategoria')}}
                {{Form::select('category', ['Osto' => 'Osto', 'Myynti' => 'Myynti', 'Vaihto' => 'Vaihto'])}}
            </div>
            <div class="form-group row">
                {{Form::label('img', 'Lataa kuva')}}
                {{Form::file('img', null,  ['class' => 'form-control'])}}
            </div>
                {{Form::submit('Lähetä ilmoitus', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}

      </div>
      <!--<div class="modal-footer">
        <input type="submit" class="btn btn-primary" name="submit" value="Lisää ilmoitus">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Peruuta</button>
      </div>-->
    </div>
  </div>
   
</div>  
    
<!-- REKISTERÖIDY -->
<div class="modal hide fade" id="register" tabindex="-1" role="dialog" data-focus-on="input:first">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        
        <div class="modal-header">
        <h5 class="modal-title">Luo tunnus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="nappi">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nimi') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('S-Postiosoite') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Kotikaupunki') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required>

                                @if ($errors->has('city'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Salasana') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Vahvista salasana') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
            

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Luo tunnus') }}
                                </button>
                            </div>
                        </div>
                    </form>
    </div>
  </div>
   
</div>
    
<!-- KIRJAUDU SISÄÄN -->
<div class="modal hide fade" id="kirjaudu" tabindex="-1" role="dialog" data-focus-on="input:first">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Kirjaudu sisään</h5>
          
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('Käyttäjänimi') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Salasana') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Muista minut') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Kirjaudu') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Unhoititko salasanasi?') }}
                                </a>
                            </div>
                        </div>
                    </form>
    </div>
  </div>
   
</div>
    <!-- LÄHETÄ PALAUTETTA -->
    <div class="modal hide fade" tabindex="-1" role="dialog" id="palaute">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Palautelomake</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form action="{{ url('contact') }}" method="post">
                  {{ csrf_field() }}
                    <div class="form-group col-md-6">
                         <label for="staticEmail">Otsikko </label>
                         <input name="subject" type="text" class="form-control" id="staticEmail">
                    </div>
                    <div class="form-group col-md-6">
                         <label for="staticEmail">Sähköpostiosoitteesi </label>
                         <input name="email" type="text" class="form-control" id="staticEmail">
                     </div>
                        <div class="form-group col-md-7">Kerro palautteesi
                            <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder=""></textarea>
                        </div>
                  <button type="submit" class="btn btn-primary">Lähetä palaute</button>
                </form>

          </div>
          <div class="modal-footer">
            
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Peruuta</button>
          </div>
        </div>
      </div>       
    </div>
</body>

</html>
