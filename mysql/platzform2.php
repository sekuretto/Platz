 <?php

include('dbConfig.php');

  if(isset($_POST['submit']))
{
    $sql = "INSERT INTO KAYTTAJA (kayttajanimi, salasana, email, kaupunki)
    VALUES ('".$_POST["statickt"]."','". md5($_POST["passwd"])."','".$_POST["staticEmail"]."','".$_POST["city"]."')";

    $result = mysqli_query($conn,$sql);
}

?>
