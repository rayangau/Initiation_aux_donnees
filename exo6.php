<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>


<form action="" method="POST">

<input type="text" name="first_name" placeholder="first_name" >
<input type="text" name="last_name" placeholder="last_name">
<input type="email" name="email" placeholder="email">
<input type="id" name="id" placeholder="id">
<input type="submit" value="envoyer">

</form>

<?php


// $first_name=$_POST['first_name'];
// $last_name=$_POST['last_name'];
// $email=$_POST['email'];
//$id=$_POST['id'];

  $bdd = new PDO("mysql:host=localhost;dbname=projet;charset=UTF8", "root", "");
 $bdd->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

  if(isset($_POST['first_name'])AND isset($_POST['last_name']) AND isset($_POST['email']));
  //pour faire remonter des erreurs
  // $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  // $requete = $bdd->exec("INSERT INTO table2 (first_name, last_name, email) VALUES ('abraham' , 'lincoln', 'linc@google.com')");
  // $requete = $bdd->query($requete);

 // while($resultat=$requete->fetch()){
 // echo $resultat['id'].' '.$resultat['first_name'].' '.$resultat['last_name'].' '.$resultat['email'].'<br>';
 //  };
{
 $requete = $bdd->prepare("INSERT INTO table2 (first_name, last_name, email) VALUES (? , ?, ?)");

$requete->execute(array($_POST['first_name'], $_POST['last_name'], $_POST['email']));

if(isset($_POST) && !empty($_POST['first_name']) && !empty ($_POST['last_name']) && !empty ($_POST['email']))
  {
  echo 'Message envoyé avec success';
}

?>
<?php
}
?>
</body>
</html>
