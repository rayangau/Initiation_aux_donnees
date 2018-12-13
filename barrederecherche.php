<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>recherche</title>
</head>
<body>

<form action="" method="GET">

  <select name="gender">
    <option>Male</option>
    <option>Female</option>

  </select>

   <input type="text" name="birth_date" placeholder="birth_date 03/02/1997">


<input type="submit" value="go">
</form>
<?php
$bdd= new PDO("mysql:host=localhost;dbname=projet;charset=utf8", "root", "");

$requete=$bdd->prepare("SELECT * FROM table2 WHERE gender = ? AND birth_date = ");
$requete->execute(array($_GET['gender'], $_GET['birth_date']));

while($resultat=$requete->fetch()){
echo $resultat['gender'].' '.$resultat['first_name'].' '.$resultat['last_name'].' '.$resultat['birth_date'].'<br>';
};


?>














</body>
</html>
