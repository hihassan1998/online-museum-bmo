<?php

// Check data is preserved in session

include("./processArticles.php");


include("./processObjects.php");

if (isset($_SESSION['articles'])) {
    $articles = $_SESSION['articles'];
} else {
    echo "<p> Försök ladda om sidan. Inga artiklar hittades i databsen.</p>";
    include("./processArticles.php");
    exit;
}

if (isset($_SESSION['objects'])) {
    $objects = $_SESSION['objects'];
} else {
    echo "<p>Försök ladda om sidan. Inga objekt hittades i databsen.</p>";
    include("./processObjects.php");
    exit;
}

$searchTerm = '';
$searchResults = [];

// Check if form is submitted
if (isset($_GET['search'])) {
    $searchTerm = htmlspecialchars($_GET['search']);
    $searchTerm = strtolower($searchTerm);

    // Search articles
    foreach ($articles as $article) {
        if (
            strpos(strtolower($article['title']), $searchTerm) !== false ||
            strpos(strtolower($article['content']), $searchTerm) !== false
        ) {
            $searchResults[] = ['type' => 'article', 'id' => $article['id'], 'title' => $article['title'], 'content' => $article['content']];
        }
    }

    // Search objects
    foreach ($objects as $object) {
        if (
            strpos(strtolower($object['title']), $searchTerm) !== false ||
            strpos(strtolower($object['text']), $searchTerm) !== false
        ) {
            $searchResults[] = ['type' => 'object', 'id' => $object['id'], 'title' => $object['title'], 'content' => $object['text']];
        }
    }
}
