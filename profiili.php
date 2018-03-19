<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Platz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
    <div class="row">
        <header class="col">
            <img src="platz.PNG" alt="logo"/>
        </header>
        <navbar class="col-6" >
            <div class="nav">
                <button type="button" class="col" class="btn btn-primary" href="#" >Lisää ilmoitus</button>
                <button type="button" class="col" class="btn btn-primary" href="#">Profiili</button>
                    <form class="col">
                         <div class="form-group">
                             <input type="text" class="form-control" placeholder="Käyttäjätunnus" aria-label="Recipient's username" aria-describedby="basic-addon2">
                          </div>
                          <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Salasana">
                          </div>     
                    </form>
                    <button type="submit" class="col" class="btn btn-primary">Kirjaudu sisään</button>
            </div>
        </navbar>
    </div>
    <article>
         <h1>Tervetuloa Platziin!</h1>
        <h3>Vaihda, myy tai osta palveluja helposti ja luotettavasti.</h3>
    </article>

    <menu class="btn-group-vertical">
        <button type="button" class="btn btn-secondary">Myy</button>
        <button type="button" class="btn btn-secondary">Osta</button>
        <button type="button" class="btn btn-secondary">Vaihda</button>
        <input class="form-control mr-sm-2" type="search" placeholder="Hae" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Hae</button>
    </menu>      
    
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
                <form method="get"  action="tietoja_muutettu.php">
                    <div class="form-group">
                        <h2>Omat tiedot</h2>
                        <p>Käyttäjätunnus: xxxxxxxxx</p><br>
                        <label>Nimi:</label> 
                        <input type="text" size="30" name="kokonimi"><br>
                        <label>Sähköposti:</label> 
                        <input type="text" size="30" name="sahkoposti"><br>
                        <label>Kaupunki:</label>
                        <input type="text" size="30" name="kaupunki"><br>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal">Tallenna muutokset</button>
                        <input type="reset" class="btn btn-primary" value="Peruuta">
                        <br>
                    </div>
                </form>
                <hr>
                <form method="get" action="salasana_muutettu.php">
                    <div class="form-group">
                        <h2>Vaihda salasana</h2>
                        <label>Uusi salasana:</label> 
                        <input type="password" size="30" name="uusisalasana"><br>
                        <label>Vahvista salasana:</label> 
                        <input type="password" size="30" name="vahvistus"><br>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal">Vaihda salasana</button>
                        <input type="reset" class="btn btn-primary" value="Peruuta">
                        <br>
                    </div>
                </form>
                <hr>
                <form method="get" action="poista_kayttaja.php">
                    <div class="form-group">
                        <h2>Poista käyttäjä</h2>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal">
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
                <hr>
                <h2>Ilmoitus 2</h2>
                    <h3>Talvirenkaiden vaihto</h3>
                    <p>Kategoria<br>
                    <br>
                    Etsitään renkaidenvaihtajaa....... </p>
            </div>
        </div>
    </div>
    
    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
            <button type="button" class="btn btn-primary">OK</button>
        </div>
        </div>
    </div>
    </div>
    
    <footer>
        <button type="button">Lähetä palautetta</button>
    </footer>
    
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>
</body>

</html>
