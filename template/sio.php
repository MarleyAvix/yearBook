<?php
require_once '../template/bdd.php';

/* Récupérer le nombre d'étudiant dans la bdd pour les BTS SIO */

$getStudent = $conn->prepare("SELECT * FROM etudiant LEFT JOIN filliere ON etudiant.filliere_id = filliere.id WHERE filliere.titre = 'SIO' ");
$getStudent ->execute();
$students = $getStudent->fetchAll();
?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BTS SIO</title>

    <link rel="stylesheet" href="../public/css/style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Montserrat:wght@400;700&family=Roboto:wght@400;500&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php require_once '../template/partials/header.php'; ?>

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

              <img src="<?php echo $student['photo']; ?>" alt="Photo de <?php echo $student['nom'] . ' ' . $student['prenom']; ?>"><!-- Récupération de la photo de l'étudiant -->
            </div>

            <div class="content-card">
              <div class="student-name"><?php echo $student['prenom'] . ' '. $student['nom']; ?></div> <!-- Récupération du nom et du prénom -->
                <div>
                  <a href="mailto:<?php echo $student['mail']; ?>" class="table-mail">Contacter</a> <!-- récupération du mail -->
                  <p><?php echo $student['titre']; ?></p><!-- Récupération du titre de la filliere -->
                </div>
            </div>

          </div>

<?php endforeach; ?>

        </div>
      </section>
    </main>

  <?php require_once '../template/partials/footer.php'; ?>
  <script src="../public/js/script.js"></script>
  </body>
</html>
