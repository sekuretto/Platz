<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta charset="utf-8">
<title>MOMOMOMOM</title>

<div class="modal hide fade" id="luotunnus" tabindex="-1" role="dialog" data-focus-on="input:first">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Luo tunnus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="nappi">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="#" method="post" enctype="multipart/form-data">
              <div class="form-group col-md-7">
                     <label for="staticEmail">Käyttäjätunnus </label>
                     <input type="text" class="form-control" id="statickt">
              </div>
              
              <div class="form-group col-md-7">
                     <label for="staticEmail">Sähköpostiosoite </label>
                     <input type="text" class="form-control" id="staticEmail">
              </div>
              <div class="form-group col-md-7">
                     <label for="staticEmail">Salasana </label>
                     <input type="text" class="form-control" id="passwd">
              </div>
              <div class="form-group col-md-7">
                     <label for="staticEmail">Vahvista salasana </label>
                     <input type="text" class="form-control" id="confirm-pass">
              </div>
              <div class="form-group col-md-7">
                    <label for="inputState">Kaupunki</label>
                    <input type="text" class="form-control" id="city">
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
            </form>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" name="submit" value="Lisää ilmoitus">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Peruuta</button>
      </div>
    </div>
  </div>
   
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    $('#luotunnus').on('shown.bs.modal', function () {
  $('#nappi').trigger('focus')
})
    
</script>