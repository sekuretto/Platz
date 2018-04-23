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
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/lightbox.css')); ?>" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

                    <a class="nappi" data-toggle="modal" data-target="#kirjaudu">Kirjaudu sisään</a>
                    <a class="nappi" data-toggle="modal" data-target="#register">Luo tunnus</a>
                <?php else: ?>
                    <a class="nappi" href="/profiles/<?php echo e(Auth::user()->id); ?>" >Profiili</a>
                    <a class="nappi" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Kirjaudu ulos</a>    
                    <a class="nappi" data-toggle="modal" data-target="#ilmoitus">Lisää ilmoitus</a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                      
                <?php endif; ?>
            </div>
        </navbar>
 
    <!-- JUMBO -->
    <?php echo $__env->yieldContent('jumbo'); ?>
         
    <!-- Kategoriat -->
    <?php echo $__env->yieldContent('nav'); ?>
    
    <!-- Container -->
    <div id="container">
    <?php echo $__env->yieldContent('main'); ?>
        
    </div>
    
    <footer>
        <p id="footer-p">Jos onnistuimme tai epäonnistuimme, niin <a id="footer-a" data-toggle="modal" data-target="#palaute">lähetä palautetta</a></p>
        <p id="footer-p2"><a data-toggle="modal" data-target="#ohje" id="footer-a">Ohje</a></p>
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
                <?php echo e(Form::label('category', 'Kategoria ')); ?>

                <?php echo e(Form::select('category', ['Osto' => 'Osto', 'Myynti' => 'Myynti', 'Vaihto' => 'Vaihto'])); ?>

            </div>
            <div class="form-group row">
                <?php echo e(Form::label('img', 'Lataa kuva ')); ?>

                <?php echo e(Form::file('img', null,  ['class' => 'form-control'])); ?>

            </div>
                
          
           <div class="modal-footer">
                  <?php echo e(Form::submit('Lähetä ilmoitus', ['class' => 'btn btn-primary'])); ?>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Peruuta</button>
              </div>
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
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                            <label class="form-check-label" for="dropdownCheck">
                                <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Hyväksyn käyttöehdot
                                </a>
                            </label>
                            <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                1.	Laittomat ja muuten sopimattomat ilmoitukset on kielletty. <br>
                                2.	Platzin ylläpitotiimillä on oikeus poistaa ilmoitus tai käyttäjä, lupaa tilin omistajalta kysymättä.<br>
                                3.	Platz ei ole vastuussa asiakkaiden välisistä sopimuksista koskien rahaa tai palveluita.
                            </div>
                    </div>
            </div>
            <div class="modal-footer">
                            
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Luo tunnus')); ?>

                                </button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Peruuta</button>
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

                        <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Kirjaudu')); ?>

                                </button>

                                <a class="btn btn-link" data-toggle="modal" data-target="#reset">
                                    <?php echo e(__('Unohditko salasanasi?')); ?>

                                </a>
                            
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
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Lähetä palaute</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Peruuta</button>
                  </div>
                </form>

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
    
    <!-- OHJE -->
       <div class="modal hide fade" tabindex="-1" role="dialog" id="ohje">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Ohje</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>
                Hei! Onko peukalosi keskellä kämmentä? Osaatko vaihtaa auton renkaat, mutta sukat jää parsimatta kun taidot eivät riitä? Onneksi olet nyt löytänyt Platzin! <br>

                Ennen vanhaan oli tavallista auttaa naapuria hädässä ja myös tarjota apua naapurille. Mutta nykyään kaupunkielämässä ei välttämättä tule edes tutustuttua muihin saman kerrostalon asukkaisiin, saatikka että viitsisi lähteä kolkuttamaan ovia avun pyytämiseksi… hyi olkoon! Mutta kun pieni pulma tulee ja vaikka ne auton renkaat olisi vaihdettava, maksatko mieluummin kalliisti siitä, että kiikutat auton huoltoon, kuin että tarjoat lähialueen riuskalle ja osaavalle opiskelijapojalle vähän käyttörahaa vastineeksi ajasta ja vaivasta, että hän vaihtaa ne renkaat? <br>

                Platz on palvelu, joka on suunniteltu juuri Sinulle, joka tarvitset apua arjen pikkuaskareissa tai haluat tarjota omia taitojasi muille pientä palkkiota vastaan. Voit esimerkiksi pyytää tai tarjota ikkunanpesuapua, tai tarjota vaihdossa omaa apuasi, jos joku auttaa sinua omassa ongelmassasi, esimerkiksi vaihtaa ne talvirenkaat naapurin mummon pikku-Fiatiin, jos mummo palkkioksi parsii sinun rikkinäiset sukat. <br><br><br>





                <b>Ilmoitusten selaaminen</b> <br>

                Voit selata ja lukea muiden käyttäjien jättämiä ilmoituksia, ja ottaa heihin yhteyttä palvelun pyytämiseksi tai ostamiseksi ilman rekisteröitymistä.  <br>

                Sivun reunassa olevalla haku-kentällä voi etsiä tarvitsemaasi palvelua sen tyypin tai kategorian suhteen, esim. ikkunanpesu. <br><br><br>



                <b>Palveluiden osto/myynti/vaihto</b> <br>

                Palveluiden osto, myynti ja vaihto tapahtuvat suoraan käyttäjältä käyttäjälle ilmoitukseen liitettyjen yhteystietojen avulla. Käyttäjien tulee siis sopia keskenään palvelun maksuehdoista, aikataulusta ja muista yksityiskohdista. <br><br><br>



                <b>Ilmianto</b> <br>

                Platz ei ole vastuussa palvelujen väärinkäytöksistä tai laadusta, tai toisten käyttäjien käytöksestä. Jokaisessa ilmoituksessa on kuitenkin ilmianto -mahdollisuus, josta voit lähettää Platzille ilmoituksen vilpillisestä, sopimattomasta tai käyttöehtoja rikkovasta ilmoituksesta tai käyttäjästä.  <br>

                Käyttäjien lisäämät ilmoitukset tarkistetaan ennen julkaisua, jotta ne ovat Platzin käyttöehtojen mukaisia. Käyttöehtoja rikkovat tai hyvästä syystä ilmiannetut ilmoitukset poistetaan, mikäli niitä ilmenee. Myös käyttöehtoja rikkonut, rekisteröitynyt käyttäjä voidaan poistaa mikäli hän toistuvasti rikkoo Platzin käyttöehtoja. 
<br><br><br>




                <b>Rekisteröityminen</b> <br>

                Sinun tulee luoda käyttäjätunnukset ja rekisteröityä Platzin käyttäjäksi voidaksesi jättää ilmoituksia ja tarjotaksesi omia palvelujasi. Sinun tulee myös hyväksyä käyttöehdot. <br>

                Pakollisia tietoja ovat käyttäjänimi, salasana, sekä vähintään sähköpostiosoite, jotta sinuun voi ottaa yhteyttä. Voit itse päättää kuinka paljon muita yhteystietoja haluat jättää yhteydenottamisen nopeuttamiseksi ja helpottamiseksi. Pakollinen tieto on myös kaupunki, jonka alueella tulet pääasiallisesti tarjoamaan palvelujasi. <br><br><br>





                <b>Oman ilmoituksen jättö</b> <br>

                Ilmoituksen jättääksesi sinun tulee olla rekisteröitynyt käyttäjä. Mikäli et ole rekisteröitynyt, sinun on ensiksi luotava käyttäjätunnukset Platziin.<br> 

                Täytä ilmoitusta tehdessäsi ainakin pakolliset kentät. Muista kuitenkin, että myyt ilmoituksellasi omaa persoonaasi ja palveluasi toiselle ihmiselle. Eli mitä paremmin kerrot itsestäsi ja tarjoamastasi palvelusta sitä luotettavamman kuvan se sinusta antaa.<br>  

                Ilmoituksesi EI tule välittömästi näkyviin, vaan se lähetetään käyttöehtojen mukaisesti ennen sen julkaisua Platzin ylläpidon tarkistettavaksi. Sinulle lähetetään sähköpostiisi ilmoitus, kun ilmoitus on hyväksytty ja julkaistu. Vastaavasti saat ilmoituksen myös, mikäli ilmoitustasi on korjattava ennen kuin se voidaan hyväksyä. 

<br><br><br>





                <b>Käyttäjätietojen hallinta / omat ilmoitukset</b> <br>

                Kirjautuneena käyttäjänä näet Profiili-sivulta omat käyttäjätietosi ja voit muuttaa niitä. Voit myös poistaa käyttäjätilisi ja profiilisi kokonaan, sekä vaihtaa salasanasi. <br>

                Omat Ilmoitukset -välilehdeltä näet kaikki omat ilmoituksesi, ja voit muokata ja poistaa omia ilmoituksiasi. Muokattu ilmoitus lähetetään käyttöehtojen mukaisesti ennen uudelleenjulkaisua Platzin ylläpidon tarkistettavaksi, ja saat sähköpostiisi ilmoituksen kun ilmoitus on hyväksytty ja julkaistu, tai mikäli sitä on korjattava ennen hyväksyntää.  <br><br><br>





                <b>Salasanan ja käyttäjätunnuksen palauttaminen</b> <br>

                Jos olet unohtanut käyttäjätunnuksesi tai salasanasi, voit saada ne muistutuksena sähköpostiisi.<br>  

                Löydät tämän painamalla sivun ylälaidasta Kirjaudu-painiketta ja Unohditko tunnuksesi?- linkkiä. Antamalla rekisteröinnin yhteydessä käyttämäsi sähköpostiosoitteen, lähetämme käyttäjätunnuksesi sinulle sähköpostina. <br>

                Ongelmatilanteen sattuessa voit lähettää meille myös palautetta. <br><br><br>





                <b>Palautteen lähettäminen</b> <br>

                Voit lähettää yleistä palautetta tai kysymyksiä Platzin ylläpidolle täyttämällä palautelomakkeen. <br>

                Voit lähettää palautetta myös mikäli sinulla on joku muu palveluumme liittyvä ongelma, johon et löydä ratkaisua.<br><br><br> 





                <b>Käyttöehdot</b> <br>
                1.	Laittomat ja muuten sopimattomat ilmoitukset on kielletty. <br>
                2.	Platzin ylläpitotiimillä on oikeus poistaa ilmoitus tai käyttäjä, lupaa tilin omistajalta kysymättä.<br>
                3.	Platz ei ole vastuussa asiakkaiden välisistä sopimuksista koskien rahaa tai palveluita.

                
            
              </p>
                  <div class="modal-footer">            
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Poistu</button>
                    </div>
                  
                

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
    <script src="<?php echo e(URL::asset('js/lightbox.js')); ?>" type="text/javascript"></script>
    
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
