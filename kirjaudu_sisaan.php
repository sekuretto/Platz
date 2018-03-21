<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta charset="utf-8">



<div class="modal hide fade" id="kirjaudu" tabindex="-1" role="dialog" data-focus-on="input:first">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Kirjaudu sisään</h5>
          
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="#" method="post" enctype="multipart/form-data">
              <div class="form-group col-md-6">
                     <label for="staticEmail">Käyttäjätunnus </label>
                     <input type="text" class="form-control" id="statickt">
              </div>
              <div class="form-group col-md-6">
                     <label for="staticEmail">Salasana </label>
                     <input type="text" class="form-control" id="passwd">
              </div>
              <a href="#">Unohditko salasanasi?</a>
            </form>
      </div>
      <div class="modal-footer" data-focus-on="input:first">
        <a class="col" class="btn btn-primary" href="luo_tunnus.php" data-dismiss="modal"data-target="#luotunnus" name="rekisteroidy">Rekisteröidy</a>
        <input type="submit" class="btn btn-primary" name="submit" value="Kirjaudu sisään">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Peruuta</button>
      </div>
    </div>
  </div>
   
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    $('#notification').on('shown.bs.modal', function () {
  $('#notification').trigger('focus')
})
    
</script>