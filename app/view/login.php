<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="<?= PUBLIQUE ?>/asset/css/login.css">
    <!-- <link href='https://unpkg.com/boxicons@2.1.4/public/css/boxicons.min.public/css' rel='stylesheet'> -->
</head>

<body>
    <div class="login-page">
        <h1>Login</h1>
        <?php
        if (isset($_SESSION["error"])) {
            echo "<div style='color:red'>nom d'utilisateur ou mot de passe incorrect</div>";
        }

        ?>

        <form action="<?= URL ?>/validation_login" method="post">
            <div class="input-box">
                <input type="text" id="username" name="username" placeholder="username">
                <!-- <i class='bx bxs-user'></i> -->
            </div>

            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="Mot De Passe">
                <!-- <i class='bx bxs-lock-alt'></i> -->
            </div>

            <div class="remember">
                <input type="checkbox" id="remember-me">
                <label for="remember-me">Remember Me</label>
            </div>

            <input type="submit" value="login">
            <div class="register-link"></div>
        </form>
        <div class="create-account">
            <a href="#">J'ai pas un compte</a>
        </div>
    </div>
</body>

</html>


</body>

</html>