<?php

$title = 'Sök';

include '../view/header.php';

include("../public/processSearch.php");

?>

<main class="main-search">

    <form method="GET" action="search.php" class="search-form">
        <input class="search-input" type="text" name="search" value="<?= $searchTerm ?>" placeholder="Sök här bland artiklar och objekten">
        <button type="submit" class="search-button">Search</button>
    </form>

    <hr>

    <h2 class="results-title">Sökresultat för "<?php echo htmlspecialchars($searchTerm); ?>" :</h2>

    <?php if (!empty($searchResults)) : ?>
        <ul class="results-list">

            <?php foreach ($searchResults as $result) : ?>
                <li class="result-item">
                    <h2>
                        <a class="result-link" href="<?= $result['type'] === 'article' ? 'articlesOpen.php?id=' . $result['id'] . '&from=search&searchTerm=' . urlencode($searchTerm) : 'object_detail.php?id=' . $result['id'] . '&from=search&searchTerm=' . urlencode($searchTerm) ?>">
                            <?= $result['title'] ?>
                        </a>

                    </h2>
                    <p><?= substr($result['content'], 0, 150) ?>...</p>
                </li>
            <?php endforeach; ?>

        </ul>

    <?php elseif ($searchTerm) : ?>
        <p>Inga sök resultat för "<?= $searchTerm ?>"</p>
    <?php endif; ?>

</main>