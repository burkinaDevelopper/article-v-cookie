<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="<?= PUBLIQUE ?>/asset/images/favicon_google-removebg-preview.png">
    <link rel="stylesheet" href="<?= PUBLIQUE ?>/asset/css/style.css">
    <link rel="stylesheet" href="<?= PUBLIQUE ?>/asset/css/style1.css">
    <link rel="stylesheet" href="<?= PUBLIQUE ?>/asset/css/article.css">

    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Actualités</title>
</head>
<style>
</style>

<body>
    <div class="change-mode">
        <h3>choisie le Mode :</h3>
        <img src="<?= PUBLIQUE ?>/asset/images/moon.png" alt="Dark Mode" id="icon">

    </div>
    <div class="content">

        <head>
            <nav class="nav_container">
                <div class="logo">
                    <a href="home.php" style="cursor: pointer;">
                        <img src="<?= PUBLIQUE ?>/asset/images/logo_google.svg" alt="Logo">
                        <span>Actualités</span>
                    </a>
                </div>
                <div style="visibility: hidden;" class="help_center">
                    <div class="search_panel">
                        <div class="icon_search">
                            <span class="material-symbols-outlined search_icon">
                                search
                            </span>
                        </div>
                        <input type="text" placeholder="Rechercher des sujets">
                        <div class="arrow_icon">
                            <span class="material-symbols-outlined arrow_drop_down">
                                arrow_drop_down
                            </span>
                        </div>
                    </div>
                    <div class="help">
                        <span class="material-symbols-outlined">
                            help
                        </span>
                        <span class="material-symbols-outlined">
                            settings
                        </span>
                    </div>
                    <?php
                    if (!empty($user)) {
                        print ' <a href="favoPage.php">Voire les Favorites <i class="bx bxs-bookmark-star"></i></a>';
                    }
                    ?>
                </div>

                <div class="connexion">
                    <?php
                    if (!isset($user)) {
                        echo '   <a id="but" href="' . URL . '/login"><i class="bx bx-log-in"></i></a>
  <svg class="gb_h" focusable="false" viewBox="0 0 24 24">
    <path
      d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z">
    </path>
  </svg>
   ';
                    } else {
                        echo '   <a href="' . URL . '/profile"><img src="' . PUBLIQUE . '/asset/images/photo de compte.png" alt="image"></a>
        <svg class="gb_h" focusable="false" viewBox="0 0 24 24">';
                    }
                    ?>


                    <?php if (isset($user)) : ?>
                        <path d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z">
                        </path>
                        </svg>
                    <?php endif ?>
                    <?php

                    if (!isset($user) && !empty($role)) {
                        echo '<h3 >Bonjour,' . $user . ' | ' . $role . '</h3>';
                    }

                    ?>
                </div>
                <div class="search">
                    <input type="checkbox" id="search_btn">
                    <label for="search_btn">
                        <div class="icon_search">
                            <span class="material-symbols-outlined search_icon">
                                search
                            </span>
                        </div>
                    </label>

                    <div class="search_pannel">
                        <input type="text" placeholder="Rechercher des sujets">
                    </div>

                </div>
    </div>

    </nav>

    <nav class="links">
        <ul>
            <li><a class="active" href="<?= URL ?>">acceuil</a></li>
            <li><a href="<?= URL ?>/articles"'>tous les articles</a></li>
            <li><a href="<?= URL ?>/favorites">favorites</a></li>

            <li><a href="<?= URL ?>/about">à propos</a></li>
            <?php if (isset($user)) {
                echo ' <li ><a style="color:red" href="' . URL . '/logout">Déconnexion</a></li>';
            }
            ?>
            <span class="line">|</span>
            <li><a href="#">france</a></li>
            <li><a href="#">international</a></li>
            <li><a href="#">actualités locales</a></li>
            <li><a href="#">économie</a></li>
            <li><a href="#">sports</a></li>
            <li><a href="#">santé</a></li>

        </ul>
    </nav>

    </head>