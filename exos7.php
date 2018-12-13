
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>NBR FEMMES ET HOMMES</title>
</head>
<body>




<?php

$bdd= new PDO("mysql:host=localhost;dbname=projet;charset=utf8", "root", "" );


// $requete=$bdd->query("SELECT * FROM table2 WHERE gender='Male' AND first_name='Daniel' ");


// while ($resultat=$requete->fetch()) {
//   echo $resultat['gender'].' '. $resultat['email'].'<br>';
// };

// // $resultat=$requete->fetch();

// // echo $resultat['Male'];


//  while ($resultat=$requete->fetch()) {
//   echo $resultat['gender'].'<br>';
//  };

// $requete=$bdd->query("SELECT * FROM table2");


 // $requete=$bdd->exec("DELETE FROM table2 WHERE id IS NULL");
 // $requete = $bdd->query($requete);

$requete = $bdd->query('SELECT gender, COUNT(*) AS nombre FROM table2 GROUP BY gender');

while ($bdd = $requete->fetch()){
echo "<p> Il y a ". $bdd['nombre'] . " " . $bdd['gender'] . " dans l'entreprise.";
}










?>










</body>
</html>
