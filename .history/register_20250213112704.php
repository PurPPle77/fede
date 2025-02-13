<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>


<div class="container mt-5">
    <h2>Déjà inscrit, connectez-vous</h2>
        <form action="register.php" method="post">
            <div class="mb-3">
                <label for="utilisateur" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="utilisateur" name="utilisateur">
            </div>
            <div class="mb-3">
                <label for="mdp" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="mdp" name="mdp">
            </div>
            <button type="submit" class="btn btn-primary ">Se connecter</button>
            <div>
<?php
if (isset($_POST['Utilisateur']) && isset($_POST['mdp'])) {  // on vérifie si les champs sont bien "set" avec la fonction PHP isset
    $nom = $_POST['Utilisateur'];
    $mdp = $_POST['mdp'];

    // la connexion à la base de données se fait maintenant apres avoir verifié qu'un utilisateur existe et un mdp sont bien entrés
    include ('db_connect.php');

    $sql = "SELECT * FROM registered WHERE username = '$nom' AND mdpkey = '$mdp'";
    $resultat = $db_connexion->query($sql);  // query est une fonction SQL et sert a faire une requête à la base de données et on stocke le resultat dans la variable resultat
    $utilisateur = $resultat->fetch();  // fetch est aussi une fonction SQL et  sert a récupérer les données de la base de données

    if ($utilisateur) {  // si l'utilisateur existe dans la base de données
        echo 'Connexion réussie !';

        header('Location: enterdata.php');  // Rediriger l'utilisateur vers la page de mon choix
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}

?>
</div>
        <form>
</div>



    <div class="container mt-5">
        <h2>Pas encore enregistré ? Utilisez ce formulaire d'inscription</h2>
        <form action="register.php" method="post">
            <div class="mb-3">
                <label for="pseudo" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="pseudo" name="pseudo">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary ">S'inscrire</button>
            <div>
                <?php
                include 'db_connect.php';
                if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {
                    if (strlen($_POST['pseudo']) > 3 && strlen($_POST['password']) > 4) {  // strlen comme son nom l'indique (string length)
                        $sql = "INSERT INTO registered (username, mdpkey) VALUES ('" . $_POST['pseudo'] . "', '" . $_POST['password'] . "')";
                        $requete = $db_connexion->exec($sql);
                        header('Location: accespro.php');
                        exit;  // sert à arrêter le code "net" pour pas charger executer le reste et evite des soucis... apparemment ?
                    } elseif (strlen($_POST['password']) < 4) {
                        echo 'Le mot de passe doit contenir plus de 4 caractères';
                    } elseif (strlen($_POST['pseudo']) < 3) {
                        echo 'Le pseudo doit contenir plus de 3 caractères';
                    } else {
                        echo 'Remplir les 2 champs pour vous inscrire';
                    }
                }
                $db_connexion = null;
                ?>
            </div>
        </form>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
