<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Platz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <?php include "kirjaudu_sisaan.php";?>
    <?php include "kirj_tai_rek.php";?>
    <?php include "luo_tunnus.php";?>
    <?php include "lisaa_ilmoitus.php";?>
</head>
<body>
    <!-- Yläpalkki -->
    <div class="row">
        <header class="">
            <img src="platz.PNG" alt="logo" class="img-fluid" alt="Responsive image"/>
        </header>
        <navbar class="col-7" >
            <div class="nav">
                <button type="button" class="col" class="btn btn-primary" href="lisaa_ilmoitus.php" data-toggle="modal" data-target="#ilmoitus" value="Kirjaudu sisään">Lisää ilmoitus</button>
                <button type="button" class="col" class="btn btn-primary" href="luo_tunnus.php" data-toggle="modal" data-target="#luotunnus" data-dismiss="modal" name="rekisteroidy">Rekisteröidy</button>
                <button type="button" class="col" class="btn btn-primary" href="kirjaudu_sisaan.php" data-toggle="modal" data-target="#kirjaudu" value="Kirjaudu sisään">Kirjaudu sisään</button>
            </div>
        </navbar>
    </div>
    <aside>
         <div class="jumbotron jumbotron-fluid" id="jumbo">
              <div class="container">
                <h1 class="display-4">Tervetuloa Platziin</h1>
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
            <h3>Ikkunan pesua</h3> <p>Ostetaan</p>
             <div class="box">
                <p>Ilmoitus jätett: 22.2.2222</p>
                <p>Muumipeikko perheineen ja ystävineen lähtee vesille rannalta löytyneellä veneellä. Nipsu jää kotimieheksi. Jonkin aikaa purjehdittuaan veneilijät löytävät saaren.</p>
            <img src="platz.PNG">
                <p>Ilmoituksen jättäjä: Minä</p><a>OIKEA ILMOOTUS</a>
                
            </div>
            
        
        </article>
        <article>
            <h3>Renkaiden vaihto</h3> <p>Myydään</p>
            <div class="box">
                <p>Ilmoitus jätett: 22.2.2222</p>
                <p>Muumipeikko perheineen ja ystävineen lähtee vesille rannalta löytyneellä veneellä. Nipsu jää kotimieheksi. Jonkin aikaa purjehdittuaan veneilijät löytävät saaren.</p>
            <img src="platz.PNG">
                <p>Ilmoituksen jättäjä: Minä</p>
                
            </div>
        </article>
        <article>
            
            <h3>Siivous apua</h3><p>Ostetaan</p>
            <div class="box">
                <p>Ilmoitus jätett: 22.2.2222</p>
                <p>Muumipeikko perheineen ja ystävineen lähtee vesille rannalta löytyneellä veneellä. Nipsu jää kotimieheksi. Jonkin aikaa purjehdittuaan veneilijät löytävät saaren.</p>
            <img src="platz.PNG">
                <p>Ilmoituksen jättäjä: Minä</p>
                
            </div>
        
        </article>
        <article>
            <div class="box-head"><h3>Pienet rakennustyöt</h3><p>Myydään</p></div>
            
            <div class="box">
                <p>Ilmoitus jätett: 22.2.2222</p>
                <p>Muumipeikko perheineen ja ystävineen lähtee vesille rannalta löytyneellä veneellä. Nipsu jää kotimieheksi. Jonkin aikaa purjehdittuaan veneilijät löytävät saaren.</p>
            <img src="platz.PNG">
                <p>Ilmoituksen jättäjä: Minä</p>
                
            </div>
        </article>

    
    
    <!-- Container 
    <div id="container">
        <div id="accordion" data-spy="scroll">
            <div class="card">
            <div class="card-header" id="headingOne" style="float:right">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color:black">
                  Ikkunoiden pesu
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color:black">
                  Vaihdetaan marjapiirakka renkaiden vaihtoon
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color:black">
                  Ostetaan verhojen ompelu
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
            </div>
            <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color:black">
                  Ostetaan verhojen ompelu
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
            </div>
            <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color:black">
                  Ostetaan 
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
            </div>
            <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color:black">
                  Ostetaan verhojen ompelu
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
            </div>
</div></div>
-->
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
    
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="jquery.js"></script>
    
   <!-- Postausten js --> 
    <script>
    $(document).ready(function() {
    /*Piilottaa p-elementin*/
    $(".box").hide();
    /*When article clicked, shows p-element*/
    $("article").click(function() {
        /*Finds closest p-element from article and shows it(animated)*/
        $(this).closest("article").find(".box").slideToggle(200);     
        
    });
    
    
});
    </script>

</body>

</html>
