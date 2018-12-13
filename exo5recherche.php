<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RECHERCHE BY </title>
</head>
<body>
	

<form action="" methode="GET">
	
<input type="text" name="id" placeholder="RECHERCHE ...">
<select name="country_code">
	<option value="CN">CN</option>
	<option value="CR">CR</option>

</select>




<input type="submit" value="envoyer">

</form>
<?php



$bdd = new PDO("mysql:host=localhost;dbname=projet;charsey=utf8", "root", "");


if(isset($_GET['id']))
{

$requete = $bdd->prepare('SELECT * FROM table2 WHERE  id = ?');
$requete ->execute(array(
		$_GET['id']));
	

/*$requete = $bdd->prepare('SELECT * FROM table2 WHERE country_code = ? and id = ?');
$requete ->execute(array(
		$_GET['id'],  $_GET['country_code']));*/
	


while($resultat=$requete->fetch()){
	echo $resultat['id'].' '.$resultat['first_name'].' '.$resultat['last_name'].' '.$resultat['country_code'];
}


}








?>
</body>
</html>