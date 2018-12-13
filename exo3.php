
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>



<?php


 $bdd = new PDO("mysql:host=localhost;dbname=projet;charset=UTF8", "root", "");


  $requete = $bdd->query("SELECT * FROM table2 WHERE country_code like 'N%'");

 while($resultat=$requete->fetch()){
 echo $resultat['country_code'].' '.$resultat['first_name'].' '.$resultat['last_name'].'<br>';
  };



?>
</body>
</html>
