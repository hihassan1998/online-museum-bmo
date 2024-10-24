<?php
require "../src/connectdb.php";
$db = connectToDb($dsn);

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];

    $query = <<<EDO
    SELECT title, content, category, author, pubdate 
    FROM Article 
    WHERE id = :id
    EDO;
    $stmt = $db->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $article = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$article) {
        echo "<p>Article not found.</p>";
        exit;
    }

    $title = htmlspecialchars($article['title']);
} else {
    echo "<p>No article ID provided.</p>";
    exit;
}

include("../view/header.php");
$from = isset($_GET['from']) ? $_GET['from'] : 'article';
// var_dump($_GET);
?>

<main class="article-container">

    <article class="article-content">
        <h1 class="article-title">
            <?= htmlspecialchars($article['title']) ?>
        </h1>

        <?php if (!empty($article['author'])) : ?>
            <p><strong>Author:</strong> <?= htmlspecialchars($article['author']) ?></p>
        <?php endif; ?>

        <p><strong>Category:</strong> <?= htmlspecialchars($article['category']) ?></p>
        <p><strong>Published:</strong> <?= htmlspecialchars($article['pubdate']) ?></p>

        <?= $article['content'] ?>
    </article>


    <div class="pagination">
        <?php if ($from === 'search') : ?>
            <a href="search.php?search=<?= urlencode($_GET['searchTerm']) ?>" class="back-button">Tillbaka till Sökresultat</a>

        <?php else : ?>
            <a href="articles.php" class="prev">Tillbaka till alla artiklar </a>
        <?php endif; ?>
    </div>

</main>

<!-- Set iamges based on article title -->

<?php if ($article['title'] === 'Minnestavlor') : ?>
    <div class="col">
        <img src="../img/550/minnestavla_anders_petters.jpg" alt="minnestavla image">
        <img src="../img/550/minnestavla_anna_persson.jpg" alt="minnestavla image">
        <img src="../img/550/minnestavla_epad.jpg" alt="minnestavla image">
        <img src="../img/550/minnestavla_eug.jpg" alt="minnestavla image">
    </div>
<?php endif; ?>

<?php if ($article['title'] === 'Begravningsseder och bruk') : ?>
    <div class="col">
        <img src="../img/550/minnestavla_anders_petters.jpg" alt="minnestavla image">
        <img src="../img/550/minnestavla_anna_persson.jpg" alt="minnestavla image">
        <img src="../img/550/minnestavla_epad.jpg" alt="minnestavla image">
        <img src="../img/550/minnestavla_eug.jpg" alt="minnestavla image">
    </div>
<?php endif; ?>

<?php include("../view/footer.php"); ?>