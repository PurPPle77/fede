<!DOCTYPE html>
<html lang="fr">

<head>
  <?php
try {
    $db_connexion = new PDO(dsn: 'sqlite:db.sqlite');
} catch (PDOException $e) {
    print 'Erreur : ' . $e->getMessage();
    die();
}
?>
  <title>Fédération Sportive-Accueil</title>
  <link rel="shortcut icon" href="Banksi_Pulp.jpg" type="image/jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta name="Index" content="Index_Fédération_Sportive">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style1.css">
  <!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
  <link rel="stylesheet" type="text/css" href="lightbox.css">
</head>


<?php
$sql = 'SELECT user, mdp FROM users';

$requete = $db_connexion->query($sql)->fetch();

if (isset($_POST['Utilisateur'])) {
    $nom = $_POST['Utilisateur'];
    $nom = $_POST['mdp'];
}
?>


<body>
   
<form action="accespro.php" method="post">
 Utilisateur: <input type="text" name="Utilisateur" /><br />
 Mot de passe: <input type="Mot de passe" name="mdp" /><br />
<input type="submit" name="connexion" value="Connexion" />
</form>

   
</body>
