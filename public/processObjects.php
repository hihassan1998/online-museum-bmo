<?php

//Includerar once för att inte överlappa med Serach includes
require_once "../src/connectdb.php";

// database connection
$db = connectToDb($dsn);
$imageDir = "../img/550x550/";

// Fetch all articles
$query = <<<EOD
SELECT id, title, category, text, image, owner
FROM Object
EOD;
$stmt = $db->prepare($query);
$stmt->execute();
$objects = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Store objects in session
$_SESSION['objects'] = $objects;

// Array of objects by category
$groupedObjects = [];
foreach ($objects as $object) {
    $groupedObjects[$object['category']][] = $object;
}
