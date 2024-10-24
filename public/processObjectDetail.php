<?php

// database connection
$db = connectToDb($dsn);

$imageDir = "../img/550x550/";

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];

    // FetchObj by ID
    $query = <<<EDO
    SELECT title, category, text, image 
    FROM Object 
    WHERE id = :id 
    EDO;
    $stmt = $db->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $object = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$object) {
        echo "<p>Object not found.</p>";
        exit;
    }

    $title = htmlspecialchars($object['category']);
    include("../view/header.php");

    // Fetch objects from same category to next and previous
    $category = $object['category'];
    $queryAll = "SELECT id FROM Object WHERE category = :category ORDER BY id";
    $stmtAll = $db->prepare($queryAll);
    $stmtAll->bindParam(':category', $category, PDO::PARAM_STR);
    $stmtAll->execute();
    $allObjects = $stmtAll->fetchAll(PDO::FETCH_COLUMN);

    // Current index
    $currentIndex = array_search($id, $allObjects);
    $previousId = ($currentIndex > 0) ? $allObjects[$currentIndex - 1] : null;
    $nextId = ($currentIndex < count($allObjects) - 1) ? $allObjects[$currentIndex + 1] : null;
} else {
    echo "<p>No object ID provided.</p>";
    exit;
}

$from = isset($_GET['from']) ? $_GET['from'] : 'objects';
