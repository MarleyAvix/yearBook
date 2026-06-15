<?php
/* Connexion à la bdd*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yearbook";

/* Création de la connexion */
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  /* Set connection attributes */
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

/* Vérification de la connexion */
catch (Exception $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}

/* Récupérer le nombre d'étudiant dans la bdd pour les BTS SIO */

$getStudent = $conn->prepare("SELECT * FROM etudiant LEFT JOIN filiere ON etudiant.filiere_id = filiere.id WHERE filiere.titre = 'BTS SIO' ");
$getStudent ->execute();
$students = $getStudent->fetchAll();
echo "Nombre d'étudiants : " . count($students);
?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BTS SIO</title>

    <link rel="stylesheet" href="../css/style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Montserrat:wght@400;700&family=Roboto:wght@400;500&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
        <nav class="site-nav" aria-label="Navigation principale">
            <div class="navbar-inner">
                <div class="nav-header">
                    <a class="brand" href="../index.html" aria-label="Accueil Yearbook">
                        <img src="../assets/logoMDS.png" alt="Logo MyDigitalSchool" class="logo">
                        <span>MDS YEARBOOK</span>
                    </a>
                    <button class="nav-toggle" type="button" aria-expanded="false" aria-label="Ouvrir le menu">
                        <span class="nav-toggle-bar"></span>
                        <span class="nav-toggle-bar"></span>
                        <span class="nav-toggle-bar"></span>
                    </button>
                </div>

                <div class="nav-collapsible">
                    <ul class="nav-links">
                        <li><a class="active" href="../index.html">Accueil</a></li>
                        <li class="nav-dropdown">
                            <button class="nav-dropdown-toggle" type="button">Les filieres</button>
                            <ul class="nav-dropdown-menu">
                                <li><a href="../pages/sio.php">BTS SIO</a></li>
                                <li><a href="../pages/ciel.php">BTS CIEL</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a class="nav-login-btn" href="../pages/login.html">Connexion</a>
                    <a class="nav-login-btn primary" href="../pages/register.html">Inscription</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
      <section>
        <h1>BTS SIO</h1>
        <p>
          Spécialité : Solutions Informatiques aux Organisations
        </p>
        <p>
          Le BTS SIO forme aux métiers de la cybersécurité, du développement
          d'applications et de la gestion des réseaux. Découvrez les profils des
          étudiants de la promotion 2025-2027.
        </p>
      </section>

      <section class="promotion-grid">
        <div class="container">

          <div class="header-grid">
            <h2>Promotion : 2025 - 2027</h2>
          </div>

<?php foreach ($students as $student) : ?>
          <div class="student-block">

            <div class="student-photo">

              <img src="https://placehold.co/600x400?text=Hello+World" alt="Photo de John Doe">
            </div>

            <div class="content-card">
              <div class="student-name"><?php echo $student['prenom'] . ' '. $student['nom']; ?></div>
                <div>
                  <a href="mailto:<?php echo $student['mail']; ?>" class="table-mail">Contacter
                  </a>
                </div>
            </div>

          </div>

<?php endforeach; ?>
        </div>
      </section>
    </main>

    <footer class="home-footer">
        <div class="footer-columns">
            <a href="pages/contact.html">Contact</a>
            <a href="pages/mentions-legales.html">Mentions légales</a>
        </div>
        <p>&copy; 2026 MDS Yearbook</p>
    </footer>
  </body>
</html>
