<?php
$page_title = 'Home - Website Belajar Koding';
require_once __DIR__ . '/includes/header.php';
$materi = load_materi();
$total_html = count($materi['html']);
$total_css = count($materi['css']);
$total_php = count($materi['php']);
?>
<main>
    <section class="hero">
        <div class="container hero-grid">
            <div>
                <span class="eyebrow">Website belajar koding dari nol</span>
                <h1>Kamus Praktis HTML, CSS, dan PHP Native</h1>
                <p>
                    Setiap materi berisi command/tag/property, fungsi, contoh kode,
                    dan hasil yang akan muncul. Cocok untuk acuan saat membuat program web.
                </p>
                <div class="hero-actions">
                    <a class="btn primary" href="belajar-html.php">Mulai dari HTML</a>
                    <a class="btn ghost" href="belajar-layout.php">Pelajari Layout</a>
                </div>
            </div>
            <div class="hero-card">
                <h2>Ringkasan Materi</h2>
                <div class="stats">
                    <div><strong><?= $total_html; ?></strong><span>HTML</span></div>
                    <div><strong><?= $total_css; ?></strong><span>CSS</span></div>
                    <div><strong><?= $total_php; ?></strong><span>PHP</span></div>
                </div>
                <p>Semua contoh bisa dibuka langsung lewat XAMPP atau server PHP lokal.</p>
            </div>
        </div>
    </section>

    <section class="container roadmap">
        <div class="section-heading center">
            <span>Roadmap</span>
            <h2>Urutan Belajar yang Disarankan</h2>
            <p>Ikuti dari kiri ke kanan agar konsepnya nyambung.</p>
        </div>

        <div class="roadmap-grid">
            <article>
                <b>01</b>
                <h3>HTML</h3>
                <p>Belajar struktur halaman, teks, tabel, form, media, dan semantic tag.</p>
                <a href="belajar-html.php">Buka HTML →</a>
            </article>
            <article>
                <b>02</b>
                <h3>CSS</h3>
                <p>Belajar warna, box model, font, flexbox, grid, position, dan responsive.</p>
                <a href="belajar-css.php">Buka CSS →</a>
            </article>
            <article>
                <b>03</b>
                <h3>PHP Native</h3>
                <p>Belajar variable, echo, if, loop, function, form, session, dan database.</p>
                <a href="belajar-php.php">Buka PHP →</a>
            </article>
            <article>
                <b>04</b>
                <h3>Layout</h3>
                <p>Belajar menyusun header, sidebar, card, dashboard, dan form layout.</p>
                <a href="belajar-layout.php">Buka Layout →</a>
            </article>
        </div>
    </section>

    <section class="container info-panel">
        <div>
            <h2>Cara menjalankan website ini</h2>
            <p>Jika folder ada di <code>C:\xampp\htdocs\BELAJAR-KODING</code>, kamu bisa buka:</p>
            <?= render_code('http://localhost/BELAJAR-KODING/index.php'); ?>
            <p>Atau dari terminal di folder ini:</p>
            <?= render_code('php -S localhost:8000'); ?>
            <p>Lalu buka:</p>
            <?= render_code('http://localhost:8000/index.php'); ?>
        </div>
    </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
