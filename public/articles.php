<?php

$title = "Alla Artiklar";
$title2 = "Läs våra artiklar";
include("../view/header.php");

include("./processArticles.php");

?>

<main class="main-home">
    <h1 class="home1-h1">Alla Artiklar</h1>

    <div class="container">
        <aside>
            <h3>Innehålls-förteckning</h3>
            <ul>
                <?php foreach ($articles as $article) : ?>
                    <?php if ($article['id'] != 4) : ?>
                        <li>
                            <a href="#article-<?= $article['id'] ?>">
                                <?= $article['title'] ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </aside>

        <div class="">
            <?php if (!empty($articles)) : ?>
                <?php foreach ($articles as $article) : ?>
                    <?php if ($article['id'] != 4) : ?>
                        <div class="article">
                            <div class='' id="article-<?= $article['id'] ?>">
                                <h2>
                                    <?= $article['title'] ?>
                                </h2>
                                <p>
                                    <strong>Author:</strong>
                                    <?= $article['author'] ?>
                                </p>
                                <p>
                                    <strong>Category:</strong>
                                    <?= $article['category'] ?>
                                </p>
                                <p>
                                    <strong>Uppdaterat:</strong>
                                    <?= $article['pubdate'] ?>
                                </p>
                                <br>
                                <div class="pagination">

                                    <a class="prev" href="articlesOpen.php?id=<?= $article['id'] ?>">Läsa artikel..</a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>

            <?php else : ?>
                <p>No articles found.</p>
            <?php endif; ?>

        </div>
    </div>
</main>

<?php include("../view/footer.php"); ?>