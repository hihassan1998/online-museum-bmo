<?php
// session_start();
$title = 'Om';
// $title2 = 'Om';

include('../view/header.php');

include("./processArticles.php");

// Check if articles are available in the session
if (isset($_SESSION['articles'])) {
    $articles = $_SESSION['articles'];
} else {
    // include("./processArticles.php");
    echo "<p>Försök ladda om sidan. Inga artiklar hittades i databsen.</p>";
    exit;
}

?>


<main>

    <?php if (!empty($articles)) : ?>
        <?php foreach ($articles as $article) : ?>
            <?php if ($article['category'] == "about") : ?>
                <div class=''>
                    <h2>Om Begravningsmuseum Online </h2>
                    <div>
                        <?= $article['content'] ?>
                        <div class="pagination">
                            För att läsa på projekts dokumentation: <a href="doc.php" class="prev">Tryck här </a>
                        </div>


                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>

    <?php else : ?>
        <p>No data found.</p>
    <?php endif; ?>
</main>


<?php include('../view/footer.php'); ?>