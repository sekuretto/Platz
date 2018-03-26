<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Platz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
    <!--<link rel="stylesheet" href="style/style.css" type="text/css"/> -->
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
</head>
<body>
    <!-- Yläpalkki -->
    <div class="row">
        <header class="col">
            <img src="<?php echo asset('images/platz.png')?>" alt="logo" class="img-fluid" alt="Responsive image"/>
        </header>
        <navbar class="col-7" >
            <div class="nav">
                <a data-toggle="modal" data-target="#ilmoitus">Lisää ilmoitus</a>

                <button type="submit" class="col" class="btn btn-primary" href="profiili.html">Profiili</button>       <button type="submit" class="col" class="btn btn-primary">Kirjaudu sisään</button>
            </div>
        </navbar>
    </div>
    <article>
         <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-4">Tervetuloa Platziin</h1>
                <p class="lead">THIS IS A MAIN LAYOUT</p>
              </div>
        </div>
    </article>
    <!-- Kategoriat -->
    <menu class="btn-group-vertical">
        <button type="button" class="btn btn-secondary">Myy</button>
        <button type="button" class="btn btn-secondary">Osta</button>
        <button type="button" class="btn btn-secondary">Vaihda</button>
        <input class="form-control mr-sm-2" type="search" placeholder="Hae" aria-label="Search">
        <button class="btn btn-dark" type="submit">Hae</button>
    </menu>      
    
    <!-- Container -->
    
    @yield('main')
    
    <footer>
        <button type="button">Lähetä palautetta</button>
    </footer>
    
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?php echo asset('js/jquery.js')?>"></script>
    <script>
    

    $(document).ready(function() {
        /*Piilottaa p-elementin*/
        $("p").hide();
        /*When article clicked, shows p-element*/
        $("article").click(function() {
            /*Finds closest p-element from article and shows it(animated)*/
            $(this).closest("article").find("p").slideToggle(200);     

        $('#notification').on('shown.bs.modal', function () {
            $('#notification').trigger('focus')
        });

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
          <form action="#" method="post" enctype="multipart/form-data">
                 <div class="form-group col-md-5">
                     <label for="staticEmail">Ilmoituksen nimi: </label>
                     <input type="text" class="form-control" id="staticEmail">
                 </div>
                    <div class="form-group col-md-5">
                        <label for="inputState">Myydään/Ostetaan</label>
                        <select id="inputState" class="form-control">
                            <option selected>Valitse vaihtoehdoista</option>
                            <option>Myydään</option>
                            <option>Ostetaan</option>
                            <option>Vaihdetaan</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="inputState">Kategoria</label>
                        <select id="inputState" class="form-control">
                            <option selected>Valitse vaihtoehdoista</option>
                            <option>Kotityöt</option>
                            <option>Auton huolto</option>
                            <option>Rakentaminen</option>
                            <option>Muut</option>
                        </select>
                    </div>
                    <div class="card" style="width: 15rem; float: right;">
                      <div class="card-body">
                        <h5 class="card-title">Lisää kuva</h5>
                            <input type="file" name="fileToUpload" id="fileToUpload" value="Valitse kuva">
                      </div>
                    </div>
                    <div class="form-group col-md-5">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Lisätietoja"></textarea>
                    </div>
            </form>

      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" name="submit" value="Lisää ilmoitus">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Peruuta</button>
      </div>
    </div>
  </div>
   
</div>    
    
</body>

</html>
