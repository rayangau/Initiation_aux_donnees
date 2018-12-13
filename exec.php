<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<!-- <form methode="GET" action="">
  <input type="submit" value="ok">



</form> -->


<?php


 $bdd = new PDO("mysql:host=localhost;dbname=projet;charset=UTF8", "root", "");
 $bdd->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );



// $requete=$bdd->query("SELECT * FROM table2 WHERE 1 ORDER BY country_code ASC");


// $requete=$bdd->query("SELECT count(`country_code`) FROM table2 WHERE country_code = 'AR'");

 // $bdd->exec("INSERT INTO table2(first_name, last_name, email) VALUES ('jacques' , 'zidane', 'rg@gmail.com')");
// $requete=$bdd->exec("INSERT INTO table2 (first_name,last_name) VALUES ('jacques','zidane')");
$requete=$bdd->prepare("DELETE FROM table2 WHERE last_name = `gauth` ");
$requete=$bdd->execute();

/* while($resultat=$requete->fetch()){
 echo $resultat['first_name'].'<br>';
  };

*/

?>
</body>
</html>
