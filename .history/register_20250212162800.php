<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<?php
include 'db_connect.php';
if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO registered (username, mdpkey)
        VALUES ('" . $_POST['pseudo'] . "', '" . $_POST['password'] . "')";
    $requete = $db_connexion->exec($sql);
} else {
    echo 'remplir tout les champs pour pouvoir envoyer';
}
$db_connexion = null;

?>

    <div class="container mt-5">
        <h2>Formulaire d'inscription</h2>
        <form>
            <div class="mb-3">
                <label for="pseudo" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="pseudo" name="pseudo">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
