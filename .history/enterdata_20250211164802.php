<h1>Vous etes connecté</h1>

<h2>Ajouter un article dans la bdd et le publier immédiatement :</h2>
<form action="enterdata.php" method="post">
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


<h1>Titre des articles créé et publié : </h1>
<?php
require 'db_connect.php';

$sql = 'SELECT titre, date_publication FROM articles';
$requete = $db_connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);

foreach ($requete as $article) {
    echo $article['titre'] . ' : Crée et publié le : ' . $article['date_publication'] . '<br>';
}
?>

