<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta charset="utf-8">

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal">
Lisää ilmoitus
</button>

<div class="modal" tabindex="-1" role="dialog">
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    $('#notification').on('shown.bs.modal', function () {
  $('#notification').trigger('focus')
})
    
</script>


<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>