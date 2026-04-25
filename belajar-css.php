<?php
$page_title = 'Belajar CSS Lengkap';
require_once __DIR__ . '/includes/header.php';
$materi = load_materi();
?>
<main>
    <section class="page-hero css-hero">
        <div class="container">
            <span class="eyebrow">Materi CSS</span>
            <h1>Property CSS, fungsi, contoh kode, dan hasil visual</h1>
            <p>CSS digunakan untuk mengatur warna, ukuran, jarak, layout, animasi, dan responsive design.</p>
        </div>
    </section>

    <section class="container intro-card">
        <h2>Pola dasar CSS</h2>
        <?= render_code('selector {
  property: value;
}

/* Contoh */
.card {
  background-color: white;
  padding: 20px;
  border-radius: 12px;
}'); ?>
    </section>

    <div class="container">
        <?php render_search_note(); ?>
    </div>

    <?php render_css_cards($materi['css']); ?>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
