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
if (!empty($_POST['Utilisateur']) && !empty($_POST['mdp'])) {  // Vérification des champs non vides
    $nom = $_POST['Utilisateur'];
    $mdp = $_POST['mdp'];

    include ('db_connect.php');

    // Utilisation d'une requête préparée pour éviter les injections SQL
    $sql = 'SELECT * FROM users WHERE user = :nom AND mdp = :mdp';
    $stmt = $db_connexion->prepare($sql);
    $stmt->execute(['nom' => $nom, 'mdp' => $mdp]);
    $utilisateur = $stmt->fetch();

    if ($utilisateur) {
        echo 'Connexion réussie !';
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
} else {
    echo 'Veuillez remplir tous les champs.';
}
?>


<body>
   
<form action="entrerdonnées.php" method="post">
 Utilisateur: <input type="text" name="Utilisateur" /><br />
 Mot de passe: <input type="password" name="mdp" /><br />
<input type="submit" name="connexion" value="Connexion" />
</form>

   
</body>
