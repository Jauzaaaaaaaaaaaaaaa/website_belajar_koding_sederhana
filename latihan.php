<?php
$page_title = 'Latihan Coding';
require_once __DIR__ . '/includes/header.php';

$jawaban = [
    'html' => 'HTML dipakai untuk membuat struktur/konten halaman web.',
    'css' => 'CSS dipakai untuk mengatur tampilan, warna, jarak, layout, dan responsive design.',
    'php' => 'PHP dipakai untuk logika server seperti form, database, login, session, dan CRUD.'
];

$hasil = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $topik = $_POST['topik'] ?? '';
    $hasil = $jawaban[$topik] ?? 'Pilih topik terlebih dahulu.';
}
?>
<main>
    <section class="page-hero exercise-hero">
        <div class="container">
            <span class="eyebrow">Latihan</span>
            <h1>Latihan kecil untuk memahami HTML, CSS, dan PHP</h1>
            <p>Halaman ini berisi checklist dan contoh form PHP sederhana.</p>
        </div>
    </section>

    <section class="container intro-card">
        <h2>Checklist latihan HTML</h2>
        <ol class="checklist">
            <li>Buat halaman dengan <code>header</code>, <code>main</code>, dan <code>footer</code>.</li>
            <li>Buat tabel berisi minimal 3 baris data.</li>
            <li>Buat form berisi nama, email, pesan, dan tombol kirim.</li>
            <li>Tambahkan gambar dengan atribut <code>alt</code>.</li>
        </ol>
    </section>

    <section class="container intro-card">
        <h2>Checklist latihan CSS</h2>
        <ol class="checklist">
            <li>Atur warna background dan warna teks.</li>
            <li>Buat card dengan padding, border, border-radius, dan box-shadow.</li>
            <li>Buat layout dua kolom dengan flexbox.</li>
            <li>Buat grid card responsif dengan CSS Grid.</li>
            <li>Tambahkan media query untuk layar HP.</li>
        </ol>
    </section>

    <section class="container intro-card">
        <h2>Checklist latihan PHP</h2>
        <ol class="checklist">
            <li>Buat variable nama dan tampilkan dengan <code>echo</code>.</li>
            <li>Buat percabangan nilai lulus/tidak lulus.</li>
            <li>Buat array materi dan tampilkan dengan <code>foreach</code>.</li>
            <li>Buat function sederhana untuk menghitung total harga.</li>
            <li>Buat form POST dan tampilkan hasil inputnya.</li>
        </ol>
    </section>

    <section class="container intro-card">
        <h2>Mini form PHP yang jalan</h2>
        <p>Pilih topik, lalu PHP akan menampilkan penjelasan dari array.</p>

        <?php if ($hasil !== null): ?>
            <div class="output-box"><?= e($hasil); ?></div>
        <?php endif; ?>

        <form action="latihan.php" method="POST" class="learning-form">
            <label for="topik">Pilih topik</label>
            <select name="topik" id="topik">
                <option value="">-- Pilih --</option>
                <option value="html">HTML</option>
                <option value="css">CSS</option>
                <option value="php">PHP</option>
            </select>

            <button class="btn primary" type="submit">Lihat Penjelasan</button>
        </form>

        <h3>Kode PHP yang dipakai</h3>
        <?= render_code('<?php
$jawaban = [
  "html" => "HTML dipakai untuk struktur halaman.",
  "css" => "CSS dipakai untuk tampilan.",
  "php" => "PHP dipakai untuk logika server."
];

$topik = $_POST["topik"] ?? "";
echo $jawaban[$topik] ?? "Pilih topik.";
?>'); ?>
    </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
