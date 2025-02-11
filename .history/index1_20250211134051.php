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
  <header id="header1">

    <img src="./images/mainlogo.jpg" alt="Logo Fédération Sportive" id="mainlogo">

    <h1 id="maintitle">FÉDÉRATION SPORTIVE</h1>

    <div id="menu-vignette">
      <div id="menu">Menu</div>
      <div id="lienmenu">
        <nav id="nav" aria-label="menu">
          <ul>
            <li><a href="activites.html">Activités</a></li>
            <li><a href="exemple.html">Exemple</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <figure class="addusericon">
      <a href="register.html">
        <img src="./images/RegisterIcon.jpg" alt="Icône d'enregistrement">
      </a>
      <figcaption>Créer un compte</figcaption>
    </figure>

    <figure class="loginicon">
      <a href="connexion">
        <img src="./images/Connection.jpg" alt="Icône de connexion">
      </a>
      <figcaption>Se connecter</figcaption>
    </figure>

  </header>

  <div class="arianeetlogo">
    <nav aria-label="Page actuelle">
      <ul>
        <li><a href="index.html">Accueil</a></li>
      </ul>
    </nav>

    <ul>
      <li>
        <a href="https://www.facebook.com" target="_blank" aria-label="Facebook">
          <i class="fab fa-facebook"></i>
        </a>
      </li>
      <li>
        <a href="https://www.twitter.com" target="_blank" aria-label="Twitter">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li>
        <a href="https://www.instagram.com" target="_blank" aria-label="Instagram">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
    </ul>
  </div>

  <main>
    <article class="indexarticle">
      <a href="activites.html">
        <img src="./images/mosaiqueSport.jpg" alt="mosaïqueSport">
        <p>LES ACTIVITÉS</p>
      </a>
      <a href="resultats.html"><img src="./images/result.jpg" alt="résultats">
        <p>LES RÉSULTATS SPORTIF</p>
      </a>
    </article>
  </main>

  <div class="actualité">
    <!-- Titre de la section -->
    <h2 class="titreactu">Actualités</h2>

    <!-- Conteneur des tuiles -->
    <div class="tuile-container">
  
     <!-- Récupération des données depuis la base de données -->
<?php
include 'db_connect.php';
$sql = 'SELECT titre, accroche, texte, date_publication FROM articles ORDER BY date_publication DESC';
$articles = $db_connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>


<!-- ici je cree le tableau "article" qui contient les données de la table "articleS" de la base de données -->
 <?php foreach ($articles as $article): ?> 
      <div class="tuile">
        <img src="./images/actu1.jpg" alt="Image Actualité 1">
        <h3><?php echo $article['titre']; ?></h3>
        <p><?php echo $article['accroche']; ?></p>
        <p><?php echo $article['texte']; ?></p>
        <p>Le <?php echo $article['date_publication']; ?></p>
      </div>
<?php endforeach; ?>
    </div>
  </div>

<!-- ####################################################### -->
  <aside class="pub">

    <a href="./images/pub1.jpg" data-lightbox="pub1" data-title="Une image"><img src="./images/pub1.jpg"
        alt="Publicité 1"></a>

    <a href="./images/pub2.jpg" data-lightbox="pub2"><img src="./images/pub2.jpg" alt="Publicité 2"></a>

  </aside>

  <div class="redtopmargin"></div>

  <footer id="footer">
    <!-- Section gauche -->
    <div class="footnav">
      <nav aria-label="Liens">
        <ul>
          <li><a href="QuiSommesNous.html">Qui sommes nous ?</a></li>
          <li><a href="ContactForm.html">Contactez-nous</a></li>
          <li><a href="Confidentialite_RGPD_Cookies.html">Confidentialité/RGPD</a></li>
          <li><a href="CGU.html">Conditions d’utilisation</a></li>
        </ul>
      </nav>
    </div>

    <!-- Section droite : Accès professionnel -->
    <div class="accèspro">
      <img src="./images/padlock.png" alt="Cadenas">
      <a href="pagepro.html">
        <p>Accès professionnel</p>
      </a>
    </div>

    <!-- Section des icônes sociales -->
    <div class="social">
      <ul>
        <li><a href="https://www.facebook.com" target="_blank" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
        </li>
        <li><a href="https://www.twitter.com" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
        </li>
        <li><a href="https://www.instagram.com" target="_blank" aria-label="Instagram"><i
              class="fab fa-instagram"></i></a></li>
      </ul>
    </div>
    <p id="textecentré">2024. Joël Forestello</p>
  </footer>

  <script src="./jquery-3.7.1.js"></script>
  <!-- <script src="./script1.js"></script> -->
  <script src="./lightbox.js"></script>
  <script src="./jquery.responsiveNav.js"></script>

</body>

</html>