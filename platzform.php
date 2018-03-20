<?php
include('dbConfig.php');
?>
<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="$1">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="style.css">

<title>test</title>


</head>
<body>

 <?php

  if(isset($_POST['save']))
{
    $sql = "INSERT INTO KAYTTAJA (kokonimi, email, kaupunki)
    VALUES ('".$_POST["kayttajanimi"]."','".$_POST["email"]."','".$_POST["kaupunki"]."')";

    $result = mysqli_query($conn,$sql);
}

if(isset($_POST['password']))
{
    $sql = "INSERT INTO KAYTTAJA (salasana)
    VALUES ('".$_POST["salasana"]."')";

    $result = mysqli_query($conn,$sql);
}

?>

<!--
<form action="platzform.php" method="post"> 
<label id="first"> name:</label><br/>
<input type="text" name="kayttajanimi"><br/>

<label id="first">Password</label><br/>
<input type="password" name="salasana"><br/>

<label id="first">Email</label><br/>
<input type="text" name="email"><br/>
    
<label id="first">City</label><br/>
<input type="text" name="kaupunki"><br/>

<button type="submit" name="save">save</button>

</form> -->
