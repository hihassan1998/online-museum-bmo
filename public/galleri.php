<?php

$title = "Bildergalleri";

include("../view/header.php");

include("../public/processGalleri.php");

?>

<main>
    <h1>Galleri</h1>

    <div class="gallery">
        <?php foreach ($currentObjects as $object) : ?>
            <div class="gallery-item">
                <div class="card-content">
                    <a href="object_detail.php?id=<?= htmlspecialchars($object['id']); ?>&from=galleri">
                        <img src="<?= $imageDir . htmlspecialchars($object['image']) ?>" alt="<?= htmlspecialchars($object['title']) ?>">
                        <h5 class="card-content"><?= htmlspecialchars($object['title']) ?></h5>
                    </a>
                </div>

            </div>
        <?php endforeach; ?>
    </div>

    <div class="pagination">
        <?php if ($currentPage > 1) : ?>
            <a href="?page=<?= ($currentPage - 1) ?>" class="prev">&lt;</a>
        <?php endif; ?>
        <?php if ($currentPage < $totalPages) : ?>
            <a href="?page=<?= ($currentPage + 1) ?>" class="next">&gt;</a>
        <?php endif; ?>
    </div>

</main>

<?php include("../view/footer.php"); ?>