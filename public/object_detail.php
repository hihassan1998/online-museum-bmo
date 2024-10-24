<?php

require "../src/connectdb.php";

include("./processObjectDetail.php");

?>


<div class="detail-container">

    <div class="image-container">
        <img src="<?= $imageDir . htmlspecialchars($object['image']); ?>" alt="<?= htmlspecialchars($object['title']); ?>" class="full-image">
    </div>

    <div class="text-container">
        <h1 class="detail-title"><?= htmlspecialchars($object['title']) ?></h1>

        <h3 class="detail-category"><?= htmlspecialchars($object['category']) ?></h3>
        <p class="detail-text"><?= htmlspecialchars($object['text']) ?></p>

        <div class="pagination">
            <?php if ($from === 'galleri') : ?>
                <a href="galleri.php" class="prev">Tillbaka till Galleri</a>
            <?php elseif ($from === 'search') : ?>
                <a href="search.php?search=<?= urlencode($_GET['searchTerm']) ?>" class="back-button">Tillbaka till Sökresultat</a>
            <?php else : ?>
                <a href="objects.php" class="prev">Tillbaka till Objekt</a>
            <?php endif; ?>
        </div>

    </div>
</div>

<?php include("../view/footer.php"); ?>