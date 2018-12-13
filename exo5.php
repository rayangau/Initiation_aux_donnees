<?php


 $bdd = new PDO("mysql:host=localhost;dbname=projet;charset=UTF8", "root", "");



$requete=$bdd->query("SELECT * FROM table2 WHERE 1 ORDER BY country_code ASC");


// $requete=$bdd->query("SELECT count(`country_code`) FROM table2 WHERE country_code = 'AR'");




 while($resultat=$requete->fetch()){
 echo $resultat['country_code'].'<br>';
  };



?>
