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
        <h2>Formulaire d'inscription</h2>
        <form action="register.php" method="post">
            <div class="mb-3">
                <label for="pseudo" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="pseudo" name="pseudo">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
            <div>
                <?php
                include 'db_connect.php';
                if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {
                    if (strlen($_POST['pseudo']) > 3 && strlen($_POST['password']) > 4) {
                        $sql = "INSERT INTO registered (username, mdpkey) VALUES ('" . $_POST['pseudo'] . "', '" . $_POST['password'] . "')";
                        $requete = $db_connexion->exec($sql);
                        header('Location: accespro.php');
                        exit(1);  // exit sert à
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
