<?php
$page_title = 'Belajar HTML Lengkap';
require_once __DIR__ . '/includes/header.php';
$materi = load_materi();
?>
<main>
    <section class="page-hero html-hero">
        <div class="container">
            <span class="eyebrow">Materi HTML</span>
            <h1>Tag HTML, fungsi, contoh kode, dan hasilnya</h1>
            <p>HTML adalah struktur halaman web. Ibarat rumah, HTML adalah kerangka dan isi ruangannya.</p>
        </div>
    </section>

    <section class="container intro-card">
        <h2>Pola dasar HTML</h2>
        <?= render_code('<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Judul Halaman</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header>Bagian atas</header>
  <main>Konten utama</main>
  <footer>Bagian bawah</footer>
</body>
</html>'); ?>
    </section>

    <div class="container">
        <?php render_search_note(); ?>
    </div>

    <?php render_html_cards($materi['html']); ?>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
