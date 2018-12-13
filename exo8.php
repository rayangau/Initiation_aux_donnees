<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>NBR FEMMES ET HOMMES</title>
</head>
<body>




<?php

 $bdd = new PDO("mysql:host=localhost;dbname=projet;charset=UTF8", "root", "");



$requete = $bdd->query("SELECT ROUND(AVG(TIMESTAMPDIFF(year, STR_TO_DATE(birth_date, '%d/%m/%Y'), NOW())), 1) AS average FROM table2");
while ($donnees = $requete->fetch()){
echo "<p> La moyenne d'âge des employés est de " . $donnees['average'] . " ans.</p>";
}

$requete = $bdd->query("SELECT gender, ROUND(AVG(TIMESTAMPDIFF(year, STR_TO_DATE(birth_date, '%d/%m/%Y'), NOW())), 1) AS average FROM table2 GROUP BY gender");
while ($donnees = $requete->fetch()){
echo "<p> La moyenne d'âge des " . $donnees['gender'] ." est de " . $donnees['average'] . " ans.</p>";
}

$requete = $bdd->query('SELECT last_name, first_name, TIMESTAMPDIFF(year, STR_TO_DATE(birth_date, "%d/%m/%Y"), NOW()) AS age FROM table2');
while ($donnees = $requete->fetch()){
echo '<p>' . $donnees['first_name'] . ', ' . $donnees['age'] . '</p>';
}








?>

</body>
</html>
