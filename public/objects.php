<?php

$title = 'Objekt';

include("../view/header.php");

include("./processObjects.php");

?>


<main>
    <h1 class="home1-h1">Utställningsobjekt </h1>

    <div class="container">
        <aside>
            <h3>Innehålls-förteckning</h3>
            <ul>
                <?php foreach (array_keys($groupedObjects) as $category) :  ?>
                    <li>
                        <a href="#<?= htmlspecialchars($category); ?>">
                            <?= htmlspecialchars($category); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>
        <div class="">
            <?php foreach ($groupedObjects as $category => $items) : ?>
                <h2 id="<?= htmlspecialchars($category); ?>">
                    <?= htmlspecialchars($category) ?>
                </h2>

                <div class="object-category">

                    <div class="card-grid">
                        <?php foreach ($items as $object) : ?>
                            <div class="card">
                                <a href="object_detail.php?id=<?= htmlspecialchars($object['id']); ?>&from=objects">
                                    <img src="<?= $imageDir . htmlspecialchars($object['image']) ?>" alt="<?= htmlspecialchars($object['title']); ?>" class="">
                                    <div class="card-content">
                                        <h4 class="card-content"><?= htmlspecialchars($object['title']) ?></h4>
                                        <h4 class="card-title"> <?= htmlspecialchars($object['text']) ?></h4>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</main>


<?php include('../view/footer.php'); ?>