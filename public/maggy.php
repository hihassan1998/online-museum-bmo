<?php

$title = "Maggys Artikel";

include('../view/header.php');

include("./maggyHeadings.php");

?>



<main>

    <?php if (!empty($articles)) : ?>
        <?php foreach ($articles as $article) : ?>
            <?php if ($article['id'] == "6") : ?>
                <div class='om-content'>

                    <h2>
                        <?= htmlspecialchars($article['title']) ?>
                    </h2>
                    <img src="../img/maggy/begravningsfolje.jpg" alt="bild på begravningsfolje" class="img-maggy">
                    <p class="bildtext-m">
                        (Stort kalas var vanligt vid begravningar. Festen pågick från morgon till kväll och skiljde sig inte nämnvärt från firandet av ett bröllop.)
                    </p>

                    <div class="col-mag">
                        <?php
                        $content = $article['content'];

                        foreach ($headingImages as $heading => $imageWithText) {
                            $content = str_replace("<h2>$heading</h2>", "<h2>$heading</h2>" . $imageWithText, $content);
                        }
                        echo $content;
                        ?>
                    </div>

                </div>

            <?php endif; ?>
        <?php endforeach; ?>
    <?php else : ?>
        <p>No data found.</p>
    <?php endif; ?>

</main>

<?php include('../view/footer.php'); ?>