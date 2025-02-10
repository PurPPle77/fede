<?php
try {
    $db_connexion = new PDO(dsn: "sqlite:db.sqlite");
} catch (PDOException $e) {
    print "Erreur : " . $e->getMessage();
    die();
}

?>