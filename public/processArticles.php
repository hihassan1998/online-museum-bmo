<?php

require "../src/connectdb.php";

// Connect a database
$db = connectToDb($dsn);

// Fetch all articles from Article table
$query = <<<EOD
SELECT id, title, content, category, author, pubdate
FROM Article
EOD;
$stmt = $db->prepare($query);
$stmt->execute();
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Store articles in session for later use
$_SESSION['articles'] = $articles;
