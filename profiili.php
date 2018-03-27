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
    
    <!-- Profiili/Omat ilmoitukset -->
    <div id="container">
        <!-- Nav tabs -->
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
                <p>Käyttäjätunnus: <!-- hae userid mysql:stä --> xxxxxxxxx</p>
                <p>Nimi: <!-- hae kokonimi mysql:stä --></p>
                <p>Sähköposti: <!-- hae email mysql:stä --></p>
                <p>Kaupunki: <!-- hae kaupunki mysql:stä --></p>
                <hr> 
                <form method="post" action="platzform.php">
                    <div class="form-group">
                        <h2>Muokkaa omia tietojasi</h2>
                        <label>Nimi:</label> 
                        <input type="text" class="form-control" size="30" name="kokonimi"><br>
                        <label>Sähköposti:</label> 
                        <input type="text" class="form-control" size="30" name="sahkoposti"><br>
                        <label>Kaupunki:</label>
                        <input type="text" class="form-control" size="30" name="kaupunki"><br>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tiedot">Tallenna muutokset</button>
                        <!-- jos tietoja täytetty mutta yritetään poistua sivulta alert data-target="#tiedot" -->
                        <!-- kun tietoa oikeasti tallennetaan, käytetään button type="submit" ja data-target="#tietoja_muutettu.php" -->
                        <input type="reset" class="btn btn-secondary" value="Peruuta">
                        <br>
                    </div>
                </form>
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
            <div id="omatilmoitukset" class="container tab-pane fade"><br>
                <h2>Ilmoitus 1</h2>
                    <h3>Ikkunoiden pesu</h3>
                    <p>Kategoria<br>
                    <br>
                    Tarjoan....... </p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ilmoituksenpoisto">Poista ilmoitus</button>
                <hr>
                <h2>Ilmoitus 2</h2>
                    <h3>Talvirenkaiden vaihto</h3>
                    <p>Kategoria<br>
                    <br>
                    Etsitään renkaidenvaihtajaa....... </p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ilmoituksenpoisto">Poista ilmoitus</button>
                <br>
            </div>
        </div>
    </div>
    
    <!-- omia tietoja muutettu -->
    <div class="modal hide fade" id="tiedot" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Käyttäjätietoja on muutettu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="nappi">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Olet poistumassa sivulta, mutta olet muokannut käyttäjätietojasi ja niitä ei ole vielä tallennettu. Tallennetaanko muutokset ennen kuin poistut sivulta?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">Tallenna muutokset</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hylkää muutokset</button>
        </div>
        </div>
    </div>
    </div>
    
    <!-- salasanan vaihto -->
    <div class="modal hide fade" id="salasana" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Salasana on muutettu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Salasana on muutettu</p>
        </div>
        <div class="modal-footer">
            <!-- sulje modal -->
            <button type="button" class="btn btn-primary">OK</button>
        </div>
        </div>
    </div>
    </div>
    
    <!-- käyttäjän poisto -->
    <div class="modal hide fade" id="#poistakayttaja" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Käyttäjän poisto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Haluatko varmasti poistaa käyttäjän?</p>
        </div>
        <div class="modal-footer">
            <!-- <form action="poista_kayttaja.php" method="post" enctype="multipart/form-data"> -->
            <button type="button" name="submit" class="btn btn-primary">Kyllä</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Ei</button>
            <!-- </form> -->
        </div>
        </div>
    </div>
    </div>
    
    <!-- ilmoituksen poisto -->
    <div class="modal hide fade" id="ilmoituksenpoisto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
    </div>
    
     <footer class="fixed-bottom">
        <button type="button">Lähetä palautetta</button>
    </footer>
    
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script>
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
    </script>
</body>

</html>
