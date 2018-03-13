<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta charset="utf-8">

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal">
Lisää ilmoitus
</button>

<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ilmianna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form>
                    <div class="form-group col-md-6">
                        <label for="inputState">Valitse ilmiannon tyyppi</label>
                        <select id="inputState" class="form-control">
                            <option selected>Valitse vaihtoehdoista</option>
                            <option>Laiton</option>
                            <option>Sopimaton</option>
                            <option>Vilpillinen</option>
                            <option>Muu syy</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Lisätietoja"></textarea>
                    </div>
            </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Lisää ilmoitus</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Peruuta</button>
      </div>
    </div>
  </div>
    
    
    
    
    
    <div class="modal-body">
        <div class="container-fluid">
                
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