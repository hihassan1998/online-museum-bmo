<?php

$imageDir = "../img/250x250/";

if (!isset($_SESSION['objects'])) {
    include("./processObjects.php");
}

if (!isset($_SESSION['objects'])) {
    echo "<p>Inga objekt hittades i databsen.</p>";
    exit;
}

$objects = $_SESSION['objects'];

$objectsPerPage = 5;
$totalObjects = count($objects);
$totalPages = ceil($totalObjects / $objectsPerPage);

//Get current page from query string
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$currentPage = max(1, min($totalPages, $currentPage));

// Calculate the offset for objects
$offset = ($currentPage - 1) * $objectsPerPage;
$currentObjects = array_slice($objects, $offset, $objectsPerPage);
