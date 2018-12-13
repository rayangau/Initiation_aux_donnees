<?php


 $bdd = new PDO("mysql:host=localhost;dbname=projet;charset=UTF8", "root", "");


  $requete = $bdd->query("SELECT * FROM table2 WHERE email like '%google%'");

 while($resultat=$requete->fetch()){
 echo $resultat['email'].' '.$resultat['first_name'].' '.$resultat['last_name'].'<br>';
  };



?>
