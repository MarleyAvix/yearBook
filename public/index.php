<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Year Book H&M</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Montserrat:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

</head>
<body class="page-home">
    
    <?php require_once '../template/partials/header.php'; ?>

    <main class="home-main">
        <section class="hero">
            <h1>Bienvenue sur notre Yearbook</h1>
            <p class="hero-description">Retrouvez les filieres, les projets et la vie de campus de MyDigitalSchool Angers en un coup d'oeil.</p>
            <div class="hero-actions">
                <a class="hero-button primary" href="#filiere-section">Explorer les filieres</a>
            </div>
        </section>
        <section id="filiere-section" class="home-section">
            <article class="school-card">
                <h2>MyDigitalSchool Angers</h2>
                <h3>Presentation de l'ecole</h3>
                <p>Situee dans un ecrin de verdure au coeur du Maine-et-Loire, MyDigitalSchool Angers vous forme aux metiers du digital et de l'informatique. L'ecole propose notamment les parcours BTS SIO et BTS CIEL, accessibles en alternance comme en formation initiale.</p>
            </article>

            <div class="filiere-grid" aria-label="Liste des filieres">
                <a class="filiere-card" href="../template/sio.php">
                    <h4>BTS SIO</h4>
                    <p>Services Informatiques aux Organisations</p>
                </a>
                <a class="filiere-card" href="../template/ciel.php">
                    <h4>BTS CIEL</h4>
                    <p>Cybersecurite, Informatique et Reseaux</p>
                </a>
            </div>
        </section>
    </main>

    <?php require_once '../template/partials/footer.php'; ?>

    <script src="js/script.js"></script>
</body>
</html>