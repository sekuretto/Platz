<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Platz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=News+Cycle" rel="stylesheet">
    <!--<link rel="stylesheet" href="style.css" type="text/css"/>-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Podkova" rel="stylesheet">
   
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>" type="text/css">
</head>
<body>
    <div class="page">
    <!-- Yläpalkki -->
 
        <header>
            <a href="/"><img src="<?php echo asset('images/platz.png')?>" alt="logo" class="img-fluid" alt="Responsive image"/></a>
        </header>
        <navbar>
            <div class="nav">
                <?php if(auth()->guard()->guest()): ?>
                    <!--<a data-toggle="modal" data-target="#ilmoitus">Lisää ilmoitus</a>-->
                    <a href="#" class="nappi" data-toggle="modal" data-target="#kirjaudu">Kirjaudu sisään</a>
                    <a href="#" class="nappi" data-toggle="modal" data-target="#register">Luo tunnus</a>
                <?php else: ?>
                    <a class="nappi" href="/profiles/<?php echo e(Auth::user()->id); ?>" >Profiili</a>
                    <a class="nappi" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Kirjaudu ulos</a>    
                    <a href="#" class="nappi" data-toggle="modal" data-target="#ilmoitus">Lisää ilmoitus</a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                        </form>          
                <?php endif; ?>
            </div>
        </navbar>
 
    <!-- JUMBO -->
    <aside>
        <div class="jumbotron jumbotron-fluid" id="jumbo">
            
                <?php if(auth()->guard()->guest()): ?>
            <div class="container">
                <h1 class="display-4" id="jumbo-h1">Tervetuloa Platziin</h1>
                <p class="lead">Olemme ihmiseltä ihmiselle palveluita tarjoava sivu. Myy, osta ja vaihda sitä mitä tarvitset tai parhaiten osaat!</p>
                
            </div>
                <?php else: ?>
            <div class="container">
                <h1 class="display-4" id="jumbo-h1">Tervetuloa, <?php echo e(Auth::user()->name); ?>!</h1>
                <p class="lead">Olemme ihmiseltä ihmiselle palveluita tarjoava sivu. Myy, osta ja vaihda sitä mitä tarvitset tai parhaiten osaat!</p>
                </div>
                <?php endif; ?>
             <?php echo $__env->make('inc.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
        </div>
    </aside>
         
    <!-- Kategoriat -->
    <?php echo $__env->yieldContent('nav'); ?>
    <!--<div class="menu" id="myTopnav">
        <a href="/myynti" class="btn btn-secondary">Myy</a>
        <a href="/osto" class="btn btn-secondary">Osta</a>
        <a href="/vaihto" type="button" class="btn btn-secondary">Vaihda</a>
        <?php echo Form::open(['action' => 'PagesController@haku', 'method' => 'POST']); ?>


                <?php echo e(Form::text('haku', '', ['class' => 'form-control'])); ?>


                <?php echo e(Form::submit('Hae', ['class' => 'btn btn-primary'])); ?>

                
        <?php echo Form::close(); ?>


    </div>     --> 
    
    <!-- Container -->
    <div id="container">
    <?php echo $__env->yieldContent('main'); ?>
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
        
        <p id="footer-p">Jos onnistuimme tai epäonnistuimme, niin <a id="footer-a" data-toggle="modal" data-target="#palaute">lähetä palautetta</a></p>       
    </footer>
    </div>
          


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
        <?php echo Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

            <div class="form-group row">
                <?php echo e(Form::label('title', 'Otsikko')); ?>

                <?php echo e(Form::text('title', '', ['class' => 'form-control'])); ?>

            </div>
            <div class="form-group row">
                <?php echo e(Form::label('body', 'Ilmoituksen sisältö')); ?>

                <?php echo e(Form::textarea('body', '', ['class' => 'form-control'])); ?>

            </div>
            <div class="form-group row">
                <?php echo e(Form::label('category', 'Kategoria')); ?>

                <?php echo e(Form::select('category', ['Osto' => 'Osto', 'Myynti' => 'Myynti', 'Vaihto' => 'Vaihto'])); ?>

            </div>
            <div class="form-group row">
                <?php echo e(Form::label('img', 'Lataa kuva')); ?>

                <?php echo e(Form::file('img', null,  ['class' => 'form-control'])); ?>

            </div>
                <?php echo e(Form::submit('Lähetä ilmoitus', ['class' => 'btn btn-primary'])); ?>

        <?php echo Form::close(); ?>


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
        <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nimi')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('S-Postiosoite')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Kotikaupunki')); ?></label>

                            <div class="col-md-6">
                                <input id="city" type="city" class="form-control<?php echo e($errors->has('city') ? ' is-invalid' : ''); ?>" name="city" value="<?php echo e(old('city')); ?>" required>

                                <?php if($errors->has('city')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('city')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Salasana')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Vahvista salasana')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
            

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Luo tunnus')); ?>

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
        <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right"><?php echo e(__('Käyttäjänimi')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Salasana')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> <?php echo e(__('Muista minut')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Kirjaudu')); ?>

                                </button>

                                <a class="btn btn-link" data-toggle="modal" data-target="#reset">
                                    <?php echo e(__('Unhoititko salasanasi?')); ?>

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
              <form action="<?php echo e(url('contact')); ?>" method="POST">
                  <?php echo e(csrf_field()); ?>

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
    <!-- RESET PASSWORD -->
    <div class="modal hide fade" tabindex="-1" role="dialog" id="reset">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Lähetä salasana sähköpostiin</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form action="<?php echo e(url('sendpsw')); ?>" method="POST">
                  <?php echo e(csrf_field()); ?>

                    <div class="form-group col-md-6">
                         <label for="staticEmail">Sähköpostiosoitteesi </label>
                         <input name="resetemail" type="text" class="form-control" id="staticEmail">
                     </div>
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Lähetä salasana sähköpostiin</button>
            
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Peruuta</button>
                    </div>
                  
                </form>

          </div>
          
        </div>
      </div>       
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?php echo e(URL::asset('js/jquery.js')); ?>" type="text/javascript"></script>
    
    <!-- RESPONSIIVINEN MENU -->    
    <script>
         function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "menu") {
                    x.className += "responsive";
                } else {
                    x.className = "menu";
                }
         }
    </script>
    
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
    
</body>

</html>
