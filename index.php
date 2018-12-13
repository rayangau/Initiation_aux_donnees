
<?php


 $bdd = new PDO("mysql:host=localhost;dbname=projet;charset=UTF8", "root", "");


  $requete = $bdd->query("SELECT * FROM table1 WHERE `COL 3` = 'palmer'");

 while($resultat=$requete->fetch()){
 echo $resultat['COL 1'].". " .$resultat['COL 2'].". " .$resultat['COL 3'].'<br>';
  };



?>
