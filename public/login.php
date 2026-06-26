<?php 

require_once '../template/bdd.php';

/* Vérifier que l'utilisateur a déjà un compte */
var_dump($_POST);
//die();

if (isset($_POST['email']) && empty($_POST['email'])) {
    // Rediriger vers la page register si le paramètre n'est pas présent ou vide
   // header('Location: login.php');
   // exit();
}

/* Récupérer les informations de l'utilisateur */
$getUsers = $conn->prepare("SELECT * FROM users WHERE email = :email ");
$getUsers->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
$getUsers->execute();
$user = $getUsers->fetch();

/* Récupérer le mot de passe */
if (isset($user['id'])) {
    if (password_verify($_POST['password'], $user['password'])) {
    echo 'Le mot de passe est valide !';
    } else {
        echo 'Le mot de passe est invalide.';
    }
}


?>

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
            <form class="auth-form" action="login.php" method="post">
                <h2>Connexion</h2>
                <div class="input-form">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
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
    <script src="../js/script.js"></script>
</body>

</html>