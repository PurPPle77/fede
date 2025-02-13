<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Fédération Sportive-Accueil</title>
  <link rel="shortcut icon" href="Banksi_Pulp.jpg" type="image/jpg">
  <meta charset="UTF-8">
  <meta name="Index" content="Index_Fédération_Sportive">
  <!-- <link rel="stylesheet" type="text/css" href="style1.css"> -->
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
      <h1 id="titreactivite">Toutes les activités</h1>
    </header>

    <h2 id="titrechoixactiv">Choisissez un groupe d’activité :</h2>


<h2 id="titrechoixactiv">Choisissez un groupe d’activité :</h2>

<?php
// Connexion à la base de données
include 'db_connect.php';

// Requête pour récupérer les groupes d'activités
$sql = 'SELECT GroupeActivite FROM Activites';
$activite = $db_connexion->query($sql)->fetchAll(PDO::FETCH_COLUMN);

// Enlever les doublons
$unikgroup = array_unique($activite);
?>

<!-- Formulaire pour les groupes d'activités -->
<form method="post" action="">

    <div class="cocheactiv">
        <?php
		// Afficher chaque groupe d'activité comme une checkbox
		foreach ($unikgroup as $groupsport) {
			echo '<input type="checkbox" name="activites[]" value="' . htmlspecialchars($groupsport) . '">';
			echo '<label>' . htmlspecialchars($groupsport) . '</label><br>';
		}
		?>
    </div>

    <br>
    <input type="submit" value="Valider les groupes">

</form>

<h3 id="choixsscat">Choisissez des sous-catégories :</h3>

<?php
// Vérifier si le formulaire des groupes a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['activites'])) {
	// Récupérer les groupes sélectionnés
	$groupesCoches = $_POST['activites'];

	// Affichage du message indiquant les groupes sélectionnés
	echo '<h3>Vous avez sélectionné les groupes suivants :</h3>';
	echo '<ul>';
	foreach ($groupesCoches as $group) {
		echo '<li>' . htmlspecialchars($group) . '</li>';
	}
	echo '</ul>';

	// Requête pour récupérer les sous-catégories associées aux groupes sélectionnés
	$placeholders = implode(',', array_fill(0, count($groupesCoches), '?'));
	$sql_sub = "SELECT DISTINCT SousCategorie FROM Activites WHERE GroupeActivite IN ($placeholders)";
	$stmt = $db_connexion->prepare($sql_sub);
	$stmt->execute($groupesCoches);

	// Récupérer les sous-catégories
	$sousCategories = $stmt->fetchAll(PDO::FETCH_COLUMN);

	// Si des sous-catégories existent, les afficher
	if (!empty($sousCategories)) {
		echo '<form method="post">';
		echo '<h3>Choisissez des sous-catégories :</h3>';

		foreach ($sousCategories as $sub) {
			echo '<input type="checkbox" name="souscategories[]" value="' . htmlspecialchars($sub) . '">';
			echo '<label>' . htmlspecialchars($sub) . '</label><br>';
		}

		echo '<br><input type="submit" value="Valider les sous-catégories">';
		echo '</form>';
	} else {
		echo '<p>Aucune sous-catégorie disponible pour les groupes sélectionnés.</p>';
	}
} else {
	// Si aucun groupe n'est sélectionné, afficher un message
	echo '<p>Choisissez au moins un groupe d’activité pour afficher les sous-catégories.</p>';
}
?>

      </div>
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