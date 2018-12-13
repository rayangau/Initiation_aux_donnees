<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>barre</title>
</head>
<body>

<?php

// $bdd = new PDO("mysql:host=localhost;dbname=tuto;charset=UTF8", "root", "");


//  $requete = $bdd->query("SELECT * FROM videos");



//  while($resultat=$requete->fetch()){
// echo $resultat ['id'].". " .$resultat ['titre'].'<br>';
//  };


// $bdd=new PDO("mysql:host=localhost;dbname=tuto;charset=utf8", "root" , "");

// $requete=$bdd->query("SELECT * FROM videos");

// $resultat=$requete->fetch();

// echo $resultat['id'].' ' .$resultat['titre'];


// $bdd= new PDO("mysql:host=localhost;dbname=tuto;charset=utf8", "root", "");

// $requete=$bdd->query("SELECT * FROM videos");

// // $resultat=$requete->fetch();

// // echo $resultat ['titre'];

// while($resultat=$requete->fetch()){
// echo $resultat ['id']. ' '. $resultat['titre'].'<br>';
// };



// $bdd=new PDO ("mysql:host=localhost;dbname=tuto;charset=utf8","root", "");

// $requete=$bdd->query("SELECT * FROM videos");

// // $resultat=$requete->fetch();

// // echo $resultat['titre'];

// while($resultat=$requete->fetch()){
// echo $resultat['id']. " ".$resultat['titre']. $resultat['categorie']. " ".'<br>';
// };


// $bdd=new PDO("mysql:host=localhost;dbname=tuto;charset=utf8", "root", "");

// $requete=$bdd->query("SELECT * FROM videos");

// $resultat=$requete->fetch();

// // echo $resultat['id'];

// while($resultat=$requete->fetch()){
// echo $resultat['id'].' '.$resultat['titre'].' '.'<br>';
// };





$bdd=new PDO("mysql:host=localhost;dbname=projet;charset=utf8","root", "");

// $requete=$bdd->query("SELECT * FROM videos  ORDER BY id DESC");
// $requete=$bdd->query("SELECT * FROM videos WHERE description like '%apprendre%'");

  $requete=$bdd->query("SELECT * FROM table1 ");



if(isset($_GET['q']) AND !empty($_GET['q'])){
$q=htmlspecialchars($_GET['q']);
  $requete=$bdd->query('SELECT * FROM table1 WHERE description like "%'.$q.'%" ORDER BY id ');
};



?>

<form method='GET'>

<input type="search" name="q" placeholder="recherche">
<input type="submit" value="envoyer">

</form>
<?php

$resultat=$requete->fetch();




while($resultat=$requete->fetch()){
  echo $resultat['COL 1'].'<br>';
};




















?>




</body>
</html>
