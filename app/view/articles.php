<?php include_once('header.php') ?>
<br>
<div class="search_panel" style="margin-left:25%;">
    <form action="articles.php" method="GET" class="search-form">
        <div class="search_icon">
            <span class="material-symbols-outlined">search</span>
        </div>
        <input type="text" name="query" class="search_input" placeholder="Entrez votre recherche...">
        <button type="submit" class="search_button">
            Rechercher
        </button>
    </form>
</div>

<main>
    <div class="container_tousArticles">
        <div class="top_informations" style="padding-left: 37px;">
            <div class="selection">
                <div class="titles">
                    <h2>News Showcase </h2>
                    <span>Histoires sélectionnées par les rédacteurs de la rédaction</span>
                </div>
                <?php
                print ' <a class="favopage" href="' . URL . '/favorite">Voire les Favorites <i class="bx bxs-bookmark-star"></i></a>';

                ?>
            </div>

        </div>

        <?php if ($result > 0) : ?>
            <div class="section-grid search-results">
                <?php foreach ($result as $row) : ?>
                    <?php if ($row['id_art'] != 'id_art') : ?>
                        <div class="grid-prod">
                            <article class="article">
                                <a href="articles/<?php echo $row['id_art']; ?>">
                                    <h2><?= $row['title_art']; ?></h2>
                                </a>
                                <img src="<?= PUBLIQUE ?>/asset/images/<?= $row['image_art']; ?>" alt="Article Image">
                                <p><strong>Catégorie:</strong> <?= $row['category_art']; ?></p>
                                <form method="post" action="<?= URL ?>/favorite">
                                    <input type="hidden" name="id_art" value="<?= $row['id_art']; ?>">
                                    <button type="submit" class="favorite-button">Ajouter aux favorite</button>
                                </form>
                            </article>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
            <!-- Affichage de la pagination -->

        <?php else : ?>
            <p>Aucun article trouvé.</p>
        <?php endif; ?>


        <br><br>
        <div class="sponsor">

            <?php include 'sponsors.php'; ?>
        </div>

    </div>
</main>
<hr style="margin-top: 20px;margin-bottom: 20px;border-color:transparent ;">
<?php include_once('footer.php') ?>