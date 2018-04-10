/* http://webreference.com/programming/php/search/2.html */
/* haku tietokannasta */
<! DOCTYPE  HTML> 
2	<html> 
3	  <head> 
4	     <title>Haku</title> 
6	  </head> 
7	  <p><body> 
8	    <h3>Haku</h3> 
9	    <p>Hae ilmoituksista</p> 
10	    <form  method="post" action="search.php"  id="searchform"> 
11	      <input  type="text" name="haku"> 
12	      <input  type="submit" name="submit" value="Hae"> 
13	    </form> 
14	  </body> 
15	</html> 
16	</p> 


/* search.php */
<?php 
2	  if(isset($_POST['submit'])){ 
3	      if(preg_match("^/[A-Za-z]+/", $_POST['haku'])){ 
          $name=$_POST['haku'];
          // yhdistä tietokantaan
          $db=mysql_connect ("servername",  "<username>", "<password>") or die ('I cannot connect  to the database because: ' . mysql_error());
          // valitse käytettävä tietokanta 
9	      $mydb=mysql_select_db("platz.sql"); 
          // haku ilmoitustyypin tai kategorian mukaan 
11	      $sql="SELECT ilmoitusid, otsikko, tyyppi, kategoria, lisatiedot, kuva, kayttajaid, voimassaolo FROM ILMOITUS WHERE tyyppi LIKE '%" . $name . "%' OR kategoria LIKE '%" . $name  ."%'"; 
          $result=mysql_query($sql); 

          //-create  while loop and loop through result set 
15	  while($row=mysql_fetch_array($result)){ 
16	          $ilmoitusid  =$row['ilmoitusid']; 
17	          $otsikko = $row['otsikko']; 
18	          $tyyppi = $row['tyyppi']; 
              $kategoria = $row['kategoria']; 
17	          $lisatiedot = $row['lisatiedot']; 
18	          $kuva = $row['kuva']; 
  	          $kayttajaid = $row['kayttajaid'];
              $voimassaolo = $row['voimassaolo'];
19
19	  //-display the result of the array 
20	  echo "<ul>\n"; 
21	  echo "<li>" . "<a  href=\"search.php?id=$ilmoitusid\">"   .$otsikko . " " . $tyyppi .  " " . $kategoria .  " " . $lisatiedot .  " " . $kuva .  " " . $kayttajaid .  " " . $voimassaolo .  "</a></li>\n"; 
22	  echo "</ul>"; 
23	  } 
    
12	      } 
          else{ 
5	      echo  "<p>Please enter a search query</p>"; 
6	      } 
      }
8	?> 