<?php
require_once __DIR__ . '/functions.php';
if (!isset($page_title)) {
    $page_title = 'Website Belajar Koding';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($page_title); ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;800&family=Source+Code+Pro:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="atelier/atelier.css">
<link rel="stylesheet" href="atelier/theme.css">
<script src="atelier/theme.js"></script>
<script src="atelier/atelier.js"></script>
</head>
<body>
<header class="site-header">
    <div class="container nav-wrap">
        <a class="brand" href="index.php">
            <span class="brand-icon">&lt;/&gt;</span>
            <span>
                <strong>Belajar Koding</strong>
                <small>HTML • CSS • PHP Native</small>
            </span>
        </a>

        <nav class="main-nav">
            <a class="<?= active_class('index.php'); ?>" href="index.php">Home</a>
            <a class="<?= active_class('belajar-html.php'); ?>" href="belajar-html.php">HTML</a>
            <a class="<?= active_class('belajar-css.php'); ?>" href="belajar-css.php">CSS</a>
            <a class="<?= active_class('belajar-php.php'); ?>" href="belajar-php.php">PHP</a>
            <a class="<?= active_class('belajar-layout.php'); ?>" href="belajar-layout.php">Layout</a>
            <a class="<?= active_class('latihan.php'); ?>" href="latihan.php">Latihan</a>
        </nav>
    </div>
</header>
