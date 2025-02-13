<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Fédération Sportive-Accueil</title>
  <link rel="shortcut icon" href="Banksi_Pulp.jpg" type="image/jpg">
  <meta charset="UTF-8">
  <meta name="Index" content="Index_Fédération_Sportive">
  <link rel="stylesheet" type="text/css" href="style1.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
  <header id="header1">

    <img src="./images/mainlogo.jpg" alt="Logo Fédération Sportive" id="mainlogo">

    <h1 id="maintitle">FÉDÉRATION SPORTIVE</h1>

    <nav aria-label="menu">
      <ul class="menu">
        <li><a href="activites.html">Activités</a></li>
      </ul>
    </nav>

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
    <header>
      <h1 id="titreactivite">toutes les activités</h1>
    </header>

    <h2 id="titrechoixactiv">Choisissez un groupe d’activité :</h2>


<?php
include 'db_connect.php';
$sql = 'SELECT GroupeActivite FROM Activites';
$activite = $db_connexion->query($sql)->fetch(PDO::FETCH_COLUMN);

?>
    <div class="cocheactiv">
      <div>
        <form>
          <?php foreach ($activites as $activite): ?>
            <input type="checkbox" class="coche" name="activites[]" value="<?php echo htmlspecialchars($activite); ?>">
            <label><?php echo htmlspecialchars($activite); ?></label>
          <?php endforeach; ?>
        </form>
      </div>
      
      <div>
        <input type="checkbox" id="terrestre" name="terre" value="Terrestre" class="coche">
        <label for="terrestre">Terrestre</label>
      </div>
      <div>
        <input type="checkbox" id="aeriennes" name="air" value="Aériennes" class="coche">
        <label for="aeriennes">Aériennes</label>
      </div>
      <div>
        <input type="checkbox" id="mixte" name="combiné" value="Mixte" class="coche">
        <label for="mixte">Mixte</label>
      </div>
      <div>
        <input type="checkbox" id="glace" name="froid" value="Glace/neige" class="coche">
        <label for="glace">Glace/neige</label>
      </div>
    </div>

    <h3 id="choixsscat">Choisissez des sous-catégories :</h3>

    <div class="checkbox-container">
      <label>
        <input type="checkbox" class="custom-checkbox">
        Piscine ou eau calme
      </label>
      <label>
        <input type="checkbox" class="custom-checkbox">
        Mer ou en eau vive
      </label>
      <label>
        <input type="checkbox" class="custom-checkbox">
        Eau vive
      </label>
      <label>
        <input type="checkbox" class="custom-checkbox">
        Sous-marins
      </label>
      <label>
        <input type="checkbox" class="custom-checkbox">
        Extrême ou combiné
      </label>

      <label>
        <input type="checkbox" class="custom-checkbox">
        etc
      </label>
      <label>
        <input type="checkbox" class="custom-checkbox">
        etc
      </label>
      <label>
        <input type="checkbox" class="custom-checkbox">
        etc
      </label>
      <label>
        <input type="checkbox" class="custom-checkbox">
        etc
      </label>
      <label>
        <input type="checkbox" class="custom-checkbox">
        etc
      </label>
      <label>
        <input type="checkbox" class="custom-checkbox">
        etc
      </label>
      <label>
        <input type="checkbox" class="custom-checkbox">
        etc
      </label>
      <label>
        <input type="checkbox" class="custom-checkbox">
        etc
      </label>
      <label>
        <input type="checkbox" class="custom-checkbox">
        etc
      </label>
      <label>
        <input type="checkbox" class="custom-checkbox">
        etc
      </label>
      <label>
        <input type="checkbox" class="custom-checkbox">
        etc
      </label>
      <label>
        <input type="checkbox" class="custom-checkbox">
        etc
      </label>
      <label>
        <input type="checkbox" class="custom-checkbox">
        etc
      </label>
      <label>
        <input type="checkbox" class="custom-checkbox">
        etc
      </label>
      <label>
        <input type="checkbox" class="custom-checkbox">
        etc
      </label>
    </div>

    <div id="zonenombre">
      <div class="nombreactivite">Nombre d'activités : XX JS<span id="nombre-video"></span></div>
    </div>


    <div class="zonevideo">

      <div class="vignette">
        <video controls>
          <source src="./videos/file_example_MP4_480_1_5MG.mp4" type="video/mp4">
          Désolé, votre navigateur ne peut pas lire cette vidéo.
        </video>
        <div class="titrevideo">Natation</div>
        <a href="#" class="lienactivite">Fiche de l'activité</a>
      </div>

      <div class="vignette">
        <video controls>
          <source src="./videos/plonge.mp4" type="video/mp4">
          Désolé, votre navigateur ne peut pas lire cette vidéo.
        </video>
        <div class="titrevideo">Plongée</div>
        <a href="#" class="lienactivite">Fiche de l'activité</a>
      </div>

      <div class="vignette">
        <video controls>
          <source src="video3.mp4" type="video/mp4">
          Désolé, votre navigateur ne peut pas lire cette vidéo.
        </video>
        <div class="titrevideo">Aquagym</div>
        <a href="#" class="lienactivite">Fiche de l'activité</a>
      </div>

      <div class="vignette">
        <video controls>
          <source src="video4.mp4" type="video/mp4">
          Désolé, votre navigateur ne peut pas lire cette vidéo.
        </video>
        <div class="titrevideo">Apnée</div>
        <a href="#" class="lienactivite">Fiche de l'activité</a>
      </div>

      <!-- Ajoutez autant de vidéos que nécessaire -->
      <div class="vignette">
        <video controls>
          <source src="./videos/file_example_MP4_640_3MG.mp4" type="video/mp4">
          Désolé, votre navigateur ne peut pas lire cette vidéo.
        </video>
        <div class="titrevideo">Natation</div>
        <a href="#" class="lienactivite">Fiche de l'activité</a>
      </div>

      <div class="vignette">
        <video controls>
          <source src="video2.mp4" type="video/mp4">
          Désolé, votre navigateur ne peut pas lire cette vidéo.
        </video>
        <div class="titrevideo">Aquagym</div>
        <a href="#" class="lienactivite">Fiche de l'activité</a>
      </div>

      <div class="vignette">
        <video controls>
          <source src="video3.mp4" type="video/mp4">
          Désolé, votre navigateur ne peut pas lire cette vidéo.
        </video>
        <div class="titrevideo">Plongée</div>
        <a href="#" class="lienactivite">Fiche de l'activité</a>
      </div>

      <div class="vignette">
        <video controls>
          <source src="video4.mp4" type="video/mp4">
          Désolé, votre navigateur ne peut pas lire cette vidéo.
        </video>
        <div class="titrevideo">Apnée</div>
        <a href="#" class="lienactivite">Fiche de l'activité</a>
      </div>

      <div class="vignette">
        <video controls>
          <source src="video1.mp4" type="video/mp4">
          Désolé, votre navigateur ne peut pas lire cette vidéo.
        </video>
        <div class="titrevideo">Natation</div>
        <a href="#" class="lienactivite">Fiche de l'activité</a>
      </div>

      <div class="vignette">
        <video controls>
          <source src="video2.mp4" type="video/mp4">
          Désolé, votre navigateur ne peut pas lire cette vidéo.
        </video>
        <div class="titrevideo">Aquagym</div>
        <a href="#" class="lienactivite">Fiche de l'activité</a>
      </div>

      <div class="vignette">
        <video controls>
          <source src="video3.mp4" type="video/mp4">
          Désolé, votre navigateur ne peut pas lire cette vidéo.
        </video>
        <div class="titrevideo">Plongée</div>
        <a href="#" class="lienactivite">Fiche de l'activité</a>
      </div>

      <div class="vignette">
        <video controls>
          <source src="video4.mp4" type="video/mp4">
          Désolé, votre navigateur ne peut pas lire cette vidéo.
        </video>
        <div class="titrevideo">Apnée</div>
        <a href="#" class="lienactivite">Fiche de l'activité</a>
      </div>
    </div>

  </main>

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

  <script src="script1.js"></script>
</body>

</html>