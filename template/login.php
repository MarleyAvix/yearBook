<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Montserrat:wght@400;700&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">
    <title>Connexion</title>
</head>

<body>
   <?php require_once '../template/partials/header.php'; ?>

    <section class="section-form">
        <div class="auth-container">
            <form class="auth-form" action="/login" method="post">
                <h2>Connexion</h2>
                <div class="input-form">
                    <label for="username">Nom d'utilisateur:</label>
                    <input type="text" id="username" name="username" required>
                </div>

                <div class="input-form">
                    <label for="password">Mot de passe:</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <button class="login-btn" type="submit">Se connecter</button>
            </form>
        </div>
    </section>

    <?php require_once '../template/partials/footer.php'; ?>
    <script src="../public/js/script.js"></script>
</body>

</html>