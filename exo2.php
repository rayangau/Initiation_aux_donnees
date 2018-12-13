<?php


 $bdd = new PDO("mysql:host=localhost;dbname=projet;charset=UTF8", "root", "");


  $requete = $bdd->query("SELECT * FROM table1 WHERE gender = 'Female'");

 while($resultat=$requete->fetch()){
 echo $resultat['gender'].' '.$resultat['first_name'].' '.$resultat['last_name'].' '.$resultat['email'].'<br>';
  };



?>
