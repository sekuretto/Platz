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
                <button type="button" class="col" class="btn btn-primary" href="lisaa_ilmoitus.php" data-toggle="modal" data-target="#ilmoitus">Lisää ilmoitus</button>
                <button href="profiili.php" type="button" class="col" class="btn btn-primary">Profiili</button>       
                <button type="submit" class="col" class="btn btn-primary">Kirjaudu ulos</button>
            </div>
        </navbar>
        
    </div>
    
    <!-- Kategoriat -->
    <menu class="btn-group-vertical">
        <button type="button" class="btn btn-secondary">Myy</button>
        <button type="button" class="btn btn-secondary">Osta</button>
        <button type="button" class="btn btn-secondary">Vaihda</button>
        <input class="form-control mr-sm-2" type="search" placeholder="Hae" aria-label="Search">
        <button class="btn btn-dark" type="submit">Hae</button>
    </menu>
    
    <!-- Ilmoitus-näkymä -->
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
    </div>
    
    
    <!-- ilmoituksen poisto/ -->
    <!--<div class="modal hide fade" id="ilmoituksenpoisto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Ilmoituksen poisto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Haluatko varmasti poistaa ilmoituksen?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">Kyllä</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Ei</button>
        </div>
        </div>
    </div>
    </div> -->
    
     <footer class="fixed-bottom">
        <button type="button">Lähetä palautetta</button>
    </footer>
    
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- <script>
        $('#tiedot').on('shown.bs.modal', function () {
            $('#nappi').trigger('focus')
        })
    
        $('#salasana').on('shown.bs.modal', function () {
            $('#nappi').trigger('focus')
        })
        
        $('#poistakayttaja').on('shown.bs.modal', function () {
            $('#nappi').trigger('focus')
        })
        
        $('#ilmoituksenpoisto').on('shown.bs.modal', function () {
            $('#nappi').trigger('focus')
        })
    </script> -->
</body> 

</html>
