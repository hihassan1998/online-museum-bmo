<?php

include("./processArticles.php");

// Check if articles are available session
if (isset($_SESSION['articles'])) {
    $articles = $_SESSION['articles'];
} else {
    echo "<p>Försök ladda om sidan. Inga artiklar hittades i databsen.</p>";
    exit;
}

// Images array, to add after certain headings
$headingImages = [
    'Förr i tiden' => '<img src="../img/maggy/begravning_1800.jpg" alt="Maggy Article image" class="img-maggy">' .
        ' <p class = "bildtext-m">
  (Sörjande samlade runt kistan under en stillsam ceremoni)
    </p>',

    'Den första likvagnen i Hakarp' => '<img src="../img/maggy/likvagn_med_hast.jpg" alt="Begravningsbil image" class="img-maggy">' . ' <p class = "bildtext-m">(Likvagn som finns att beskåda på Ljungby Begravningsmuseum)</p>',

    'Begravningsbyråer' => '<img src="../img/maggy/begravningsbyra_skylt.jpg" alt="Minnesord image" class="img-maggy">' .
        ' <p class = "bildtext-m">
(Begravningsbyråer är ett nytt påfund. Tidigare sköttes begravning av familj och bybor gemensamt)
    </p>',

    'Begravningstavlor - minnestavlor' => '<img src="../img/maggy/minnestavla.jpg" alt="Minnesord image" class="img-maggy">' .
        ' <p class = "bildtext-m">
(Minnestavlor var en sed som slutades bruka kring början av 1900-talet)
    </p>',

    'Pärlkransar' => '<img src="../img/maggy/parlkrans.jpg" alt="Pärlkransar image" class="img-maggy">' .
        ' <p class = "bildtext-m">
 (Pärlkransar istället för blommor som utsmyckning av kistan och gravplatsen)
    </p>',

    'Gravöl' => '<img src="../img/maggy/gravol.jpg" alt="Minnesord image" class="img-maggy">' .
        ' <p class = "bildtext-m">
    (Gravöl)
    </p>',

    'Dödsannonser' => '<img src="../img/maggy/dodsannonser.jpg" alt="Minnesord image" class="img-maggy">' .
        ' <p class = "bildtext-m">
   (Dödsannonser var mycket exakta till en början, de angav både år, månad och dagar som den döde levt)
    </p>',

    'Klädsel' => '<img src="../img/maggy/sorgesloja.jpg" alt="Maggy Article image" class="img-maggy">' .
        ' <p class = "bildtext-m">
    (Begravning var en högtid som krävde sina kläder, här i form av en sorgeslöja. Slöjans längd angav sorgens storlek)
    </p>',
];
