<?php
$page_title = 'Belajar PHP Native Lengkap';
require_once __DIR__ . '/includes/header.php';
$materi = load_materi();

$form_result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama'] ?? '');
    $kelas = trim($_POST['kelas'] ?? '');

    if ($nama === '') {
        $form_result = 'Nama masih kosong. Isi dulu input nama.';
    } else {
        $form_result = 'Halo, ' . e($nama) . '. Kamu memilih kelas ' . e($kelas ?: 'belum dipilih') . '.';
    }
}
?>
<main>
    <section class="page-hero php-hero">
        <div class="container">
            <span class="eyebrow">Materi PHP Native</span>
            <h1>Command PHP, fungsi, contoh kode, dan output</h1>
            <p>PHP berjalan di server. Cocok untuk form, login, session, database, CRUD, dan halaman dinamis.</p>
        </div>
    </section>

    <section class="container intro-card">
        <h2>Pola dasar PHP di dalam HTML</h2>
        <?= render_code('<?php
$nama = "Jauza";
echo "Halo " . $nama;
?>'); ?>

        <h2>Contoh form yang benar-benar jalan</h2>
        <?php if ($form_result !== null): ?>
            <div class="output-box"><?= $form_result; ?></div>
        <?php endif; ?>

        <form action="belajar-php.php" method="POST" class="learning-form">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama">

            <label for="kelas">Pilih kelas</label>
            <select id="kelas" name="kelas">
                <option value="">-- Pilih --</option>
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
                <option value="PHP Native">PHP Native</option>
            </select>

            <button class="btn primary" type="submit">Proses dengan PHP</button>
        </form>
    </section>

    <div class="container">
        <?php render_search_note(); ?>
    </div>

    <?php render_php_cards($materi['php']); ?>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
