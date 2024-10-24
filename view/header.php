<?php

include('../config/config.php');

// $title = '';


// Special body design for home page
$page = basename($_SERVER['PHP_SELF'], ".php");
$bodyClass = '';

if ($page == 'home') {
    $bodyClass = 'special-body';
}
?>

<!doctype html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="referrer" content="unsafe-url">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMO | <?= $title ?></title>
    <link rel="shortcut icon" href="../img/bmo_logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/galleri.css">
    <link rel="stylesheet" href="css/articles.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/byline.css">
    <link rel="stylesheet" href="css/objects.css">
    <link rel="stylesheet" href="css/object-detail.css">
    <link rel="stylesheet" href="css/search.css">

</head>


<body class="<?= $bodyClass ?>">

    <?php include("navbar.php") ?>