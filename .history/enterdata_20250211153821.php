<h1>Bonjour, <?php echo $_POST[$nom]; ?></h1>
<p>Vous pouvez maintenant entrer une news</p>



<h2>Ajouter une news dans la bdd:</h2>
<form action="entrerdonnées.php" method="post">
    <input type="text" name="titre" placeholder="titre article" /></br>
    <input type="text" name="accroche" placeholder="accroche" /></br>
    <textarea name="texte" placeholder="texte" ></textarea></br>
    <input type="submit" value="Envoyer données" />
</form>

<?php
include 'db_connect.php';

if (!empty($_POST['titre']) && !empty($_POST['accroche']) && !empty($_POST['texte'])) {
    $sql = "INSERT INTO articles (titre, accroche, texte, date_publication) 
        VALUES ('" . $_POST['titre'] . "', '" . $_POST['accroche'] . "', '" . $_POST['texte'] . "', '" . date('d-m-Y H:i:s') . "')";

    $requete = $db_connexion->exec($sql);

    header('Location: ' . $_SERVER['PHP_SELF']);
} else {
    echo 'remplir tout les champs pour pouvoir envoyer';
}
$db_connexion = null;

?>


<h1>Titre des articles déjà publié : </h1>
<?php
require 'db_connect.php';
$sql = 'SELECT titre FROM articles';
$requete = $db_connexion->query($sql)->fetchAll(PDO::FETCH_COLUMN);
foreach ($requete as $titre) {
    echo $titre . '<br>';
}
?>

