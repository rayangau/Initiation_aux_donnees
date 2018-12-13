<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>exo9</title>
  <link rel="stylesheet" href="exo9.css">
</head>
<body>
  <div class="ins">
    <h1>INSCRIPTION</h1><br><br><br><br>
    <form action="" method="POST" id="form">

      <input type="text" name="first_name" placeholder="first_name" >
      <input type="text" name="last_name" placeholder="last_name">
      <input type="email" name="email" placeholder="email">
      <select name="departement" >
        <option value="montbeliard">Montbeliard</option>
        <option value="departement_belfort">Departement de Belfort</option>
        <option value="haute_saone">Haute Saône</option>
        <option value="alsace">Alsace</option>

      </select>

      <input type="submit" value="envoyer">

    </form>


    <?php
    $bdd=new PDO("mysql:host=promo-24.codeur.online;dbname=rayang_projet1;charset=utf8", "rayang", "tnXS46oH/AHKgA==");

//   $requete = $bdd->query('CREATE TABLE Persons(
// PersonID int,
// LastName varchar(255),
// FirstName varchar(255),
// StudAddress varchar(255),
// City varchar(255))');

// $donnees = $requete->fetch();
// if (isset($requete)){
// // echo "la table est créée";
// };

    if(isset($_POST['first_name'])AND isset($_POST['last_name']) AND isset($_POST['email']) AND isset($_POST['departement']));
    $requete = $bdd->prepare("INSERT INTO persons (first_name, last_name, email, departement) VALUES (? , ?, ?, ?)");


    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


    $requete->execute(array($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['departement']));

    if(isset($_POST) && !empty($_POST['first_name']) && !empty ($_POST['last_name']) && !empty ($_POST['email'])&& !empty($_POST['departement']))
    {
      echo 'Votre inscription a été  envoyée avec succes !!';
    }
var_dump($_POST);

    ?>
  </div>
</body>
</html>
