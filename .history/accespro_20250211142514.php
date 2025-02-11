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


<body>


<form action="connexion.php" method="post">
   <input type="text" name="" id="" placeholder="user" />
   <input type="text" name="mdp" id="" placeholder="mdp" />
   <input type="submit" value="Envoyer données" />
</form>

   
</body>
