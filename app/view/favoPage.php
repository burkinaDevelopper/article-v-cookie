<?php include_once('header.php') ?>
<style>
    .big_articles {
        display: flex;
        flex-wrap: wrap;
    }

    .article {
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 10px;
        margin: 10px;
        width: 300px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .article h3 {
        margin-top: 0;
    }

    .article-image {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }

    .error-message {
        color: red;
    }
</style>

<main>


    <main>
        <h1 align="center">Articles Favoris</h1>
        <div class="favorite-articles">
            <div class="favorite-articles">
                <ul>
                    <?php
                    // Récupérer les articles du panier depuis le cookie

                    echo "<div class='big_articles'>";

                    if (isset($result)) {
                        foreach ($result as $row) {
                            $articles_found = true; // Un article a été trouvé
                            echo "<div class='article'>";
                            echo "<h3> <a href='" . URL . "/articles/{$row['id_art']}'>{$row['title_art']}</a></h3>";
                            echo "<figure>";
                            echo "<img src='" . PUBLIQUE . "/asset/images/{$row['image_art']}' alt='' class='article-image'>";
                            echo "</figure>";
                            echo "<p>Date: {$row['date_art']}</p>";
                            echo "<form method ='post' action='" . URL . "/delete_favorite'>";
                            echo "<input type='hidden' name='article_id' value='{$row['id_art']}'>";
                            echo "<button class='favorite-button' type='submit'>Supprimer</button>";
                            echo "</form>";
                            echo "</div>";
                        }
                    } else {
                        echo "<p class='error-message' align='center'>Votre panier est vide.</p>";
                    }

                    echo "</div>"; // Fermeture de la div 'big_articles'

                    ?>
                </ul>
            </div>
    </main>

</main>

<hr style="margin-top: 20px;margin-bottom: 20px;border-color:transparent ;">
<?php include_once('footer.php'); ?>
<script src="../public/script/darkMode1.js"></script>
<script src="../public/script/favorites.js"></script>
</body>

</html>