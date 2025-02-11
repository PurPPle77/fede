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

if (isset($_POST['Utilisateur']) && isset($_POST['mdp'])) {  // on vérifie si les champs sont bien tapés
    $nom = $_POST['Utilisateur'];
    $mdp = $_POST['mdp'];

    // la connexion à la base de données se fait maintenant apres avoir verifier qu'un utilisateur existe et un mdp sont bien tapés
    include ('db_connect.php');

    $sql = "SELECT * FROM users WHERE user = '$nom' AND mdp = '$mdp'";
    $resultat = $db_connexion->query($sql);
    $utilisateur = $resultat->fetch();

    if ($utilisateur) {
        echo 'Connexion réussie !';
        // Rediriger l'utilisateur vers la page d'accueil
        header('Location: entrerdonnees.php');
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}

?>


<body>
   
<form action="accespro.php" method="post">
 Utilisateur: <input type="text" name="Utilisateur" /><br />
 Mot de passe: <input type="Mot de passe" name="mdp" /><br />
<input type="submit" name="connexion" value="Connexion" />
</form>

   
</body>
