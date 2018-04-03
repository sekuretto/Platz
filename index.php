<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Platz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=News+Cycle" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Podkova" rel="stylesheet">
    
    <?php include "kirjaudu_sisaan.php";?>
    <?php include "kirj_tai_rek.php";?>
    <?php include "luo_tunnus.php";?>
    <?php include "lisaa_ilmoitus.php";?>
</head>

<body>
    <div class="page">
        <!-- Yläpalkki -->
        <div class="row">
            <header class="">
                <img src="platz.PNG" alt="logo" class="img-fluid" alt="Responsive image"/>
            </header>
            <navbar class="col-7" >
                <div class="nav">
                    <!--<button type="button" class="col" class="btn btn-primary" href="lisaa_ilmoitus.php" data-toggle="modal" data-target="#ilmoitus" value="Kirjaudu sisään">Lisää ilmoitus</button>-->
                    <button type="button" class="col" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Lisätäksesi ilmoituksen, kirjaudu sisään tai luo tunnus.">Lisää ilmoitus</button>
                    <button type="button" class="col" class="btn btn-primary" href="luo_tunnus.php" data-toggle="modal" data-target="#luotunnus" data-dismiss="modal" name="rekisteroidy">Rekisteröidy</button>
                    <button type="button" class="col" class="btn btn-primary" href="kirjaudu_sisaan.php" data-toggle="modal" data-target="#kirjaudu" value="Kirjaudu sisään">Kirjaudu sisään</button>
                </div>
            </navbar>

        </div>
        <aside>
             <div class="jumbotron jumbotron-fluid" id="jumbo">
                  <div class="container">
                    <h1 class="display-4" id="jumbo-h1">Tervetuloa Platziin</h1>
                    <p class="lead">Olemme ihmiseltä ihmiselle palveluita tarjoava sivu. Myy, osta ja vaihda sitä mitä tarvitset tai parhaiten osaat!</p>
                  </div>
            </div>
        </aside>

        <!-- Kategoriat -->
        <menu class="btn-group-vertical">
            <button type="button" class="btn btn-secondary">Myy</button>
            <button type="button" class="btn btn-secondary">Osta</button>
            <button type="button" class="btn btn-secondary">Vaihda</button>
            <input class="form-control mr-sm-2" type="search" placeholder="Hae" aria-label="Search">
            <button class="btn btn-dark" type="submit">Hae</button>
        </menu>      

        <div id="container">
             <article>
                 <div class="row" class="otsikko">
                     <h3 class="col-3">Ostetaan</h3>
                     <h3 class="col-6">Ikkunan pesua</h3>
                     <h3>Pvm tänne</h3>
                 </div>
                 <div class="box">
                    <p>Ilmoitus jätett: 22.2.2222</p>
                    <p>Muumipeikko perheineen ja ystävineen lähtee vesille rannalta löytyneellä veneellä. Nipsu jää kotimieheksi. Jonkin aikaa purjehdittuaan veneilijät löytävät saaren.</p>
                <img src="platz.PNG">
                    <p>Ilmoituksen jättäjä: Minä</p><a>OIKEA ILMOOTUS</a>

                </div>


            </article>
            <article>
                <div class="row" class="otsikko">
                     <h3 class="col-3">Myydään</h3>
                     <h3 class="col-6">Auton huoltoa</h3>
                     <h3>Pvm tänne</h3>
                 </div>
                <div class="box">
                    <p>Ilmoitus jätett: 22.2.2222</p>
                    <p>Muumipeikko perheineen ja ystävineen lähtee vesille rannalta löytyneellä veneellä. Nipsu jää kotimieheksi. Jonkin aikaa purjehdittuaan veneilijät löytävät saaren.</p>
                <img src="platz.PNG">
                    <p>Ilmoituksen jättäjä: Minä</p>

                </div>
            </article>
            <article>
                <div class="row" class="otsikko">
                     <h3 class="col-3">Myydään</h3>
                     <h3 class="col-6">Auton huoltoa</h3>
                     <h3>Pvm tänne</h3>
                 </div>
                <div class="box">
                    <p>Ilmoitus jätett: 22.2.2222</p>
                    <p>Muumipeikko perheineen ja ystävineen lähtee vesille rannalta löytyneellä veneellä. Nipsu jää kotimieheksi. Jonkin aikaa purjehdittuaan veneilijät löytävät saaren.</p>
                <img src="platz.PNG">
                    <p>Ilmoituksen jättäjä: Minä</p>

                </div>

            </article>
            <article>
                <div class="row" class="otsikko">
                     <h3 class="col-3">Vaihdetaan</h3>
                     <h3 class="col-6">Auton huoltoa</h3>
                     <h3>Pvm tänne</h3>
                 </div>

                <div class="box">
                    <p>Ilmoitus jätett: 22.2.2222</p>
                    <p>Muumipeikko perheineen ja ystävineen lähtee vesille rannalta löytyneellä veneellä. Nipsu jää kotimieheksi. Jonkin aikaa purjehdittuaan veneilijät löytävät saaren.</p>
                <img src="platz.PNG">
                    <p>Ilmoituksen jättäjä: Minä</p>

                </div>
            </article>

            <nav aria-label="Page navigation example" class="sivut">
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
            </nav>
        </div>

        <footer class="fixed-bottom">
            <button type="button">Lähetä palautetta</button>
        </footer>
    </div>
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="jquery.js"></script>
    
   <!-- Postausten js --> 
    <script>
    $(document).ready(function() {
    /*Piilottaa box-elementin*/
    $(".box").hide();
    /*When article clicked, shows p-element*/
    $("article").click(function() {
        /*Finds closest p-element from article and shows it(animated)*/
        $(this).closest("article").find(".box").slideToggle(200);     
        
    });
    
    
});
    </script>
    <script>
    $('#notification').on('shown.bs.modal', function () {
  $('#notification').trigger('focus')
})
    
</script>

</body>

</html>