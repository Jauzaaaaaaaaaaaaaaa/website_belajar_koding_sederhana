<?php
$page_title = 'Belajar Tata Letak Website';
require_once __DIR__ . '/includes/header.php';
?>
<main>
    <section class="page-hero layout-hero">
        <div class="container">
            <span class="eyebrow">Tata Letak</span>
            <h1>Cara menggunakan div, section, flexbox, grid, sidebar, dan card</h1>
            <p>Halaman ini fokus ke pola layout yang sering dipakai saat membuat website atau aplikasi.</p>
        </div>
    </section>

    <section class="container intro-card">
        <h2>1. Struktur layout website umum</h2>
        <?= render_code('<body>
  <header>Logo dan menu</header>
  <main>
    <section>Hero</section>
    <section>Konten</section>
  </main>
  <footer>Copyright</footer>
</body>'); ?>

        <div class="layout-visual">
            <div class="lv-header">header</div>
            <div class="lv-main">
                <div class="lv-section">section hero</div>
                <div class="lv-section">section konten</div>
            </div>
            <div class="lv-footer">footer</div>
        </div>
    </section>

    <section class="container intro-card">
        <h2>2. Layout dua kolom: konten + sidebar</h2>
        <p>Gunakan parent <code>display: flex</code>, lalu atur child dengan <code>flex</code>.</p>
        <?= render_code('<div class="two-column">
  <main class="content">Konten utama</main>
  <aside class="sidebar">Sidebar</aside>
</div>

.two-column {
  display: flex;
  gap: 20px;
}

.content {
  flex: 2;
}

.sidebar {
  flex: 1;
}'); ?>

        <div class="two-column-demo">
            <main>
                <h3>Konten Utama</h3>
                <p>Biasanya untuk artikel, tabel data, produk, atau isi dashboard.</p>
            </main>
            <aside>
                <h3>Sidebar</h3>
                <p>Biasanya untuk kategori, filter, profil, atau menu samping.</p>
            </aside>
        </div>
    </section>

    <section class="container intro-card">
        <h2>3. Layout kartu responsif dengan CSS Grid</h2>
        <p>Cocok untuk produk, fitur, artikel, dan dashboard.</p>
        <?= render_code('<div class="card-grid">
  <div class="card">Kartu 1</div>
  <div class="card">Kartu 2</div>
  <div class="card">Kartu 3</div>
</div>

.card-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 16px;
}'); ?>

        <div class="card-grid-demo">
            <article>Kartu 1</article>
            <article>Kartu 2</article>
            <article>Kartu 3</article>
            <article>Kartu 4</article>
        </div>
    </section>

    <section class="container intro-card">
        <h2>4. Layout form rapi</h2>
        <?= render_code('<form class="form-layout">
  <label>Nama</label>
  <input type="text">

  <label>Email</label>
  <input type="email">

  <button>Kirim</button>
</form>

.form-layout {
  display: grid;
  gap: 12px;
  max-width: 500px;
}'); ?>

        <form class="learning-form">
            <label>Nama</label>
            <input type="text" placeholder="Nama">
            <label>Email</label>
            <input type="email" placeholder="Email">
            <button type="button" class="btn primary">Kirim</button>
        </form>
    </section>

    <section class="container intro-card">
        <h2>5. Kapan pakai div, section, article, aside?</h2>
        <div class="comparison-table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Tag</th>
                        <th>Kapan dipakai</th>
                        <th>Contoh</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>div</code></td>
                        <td>Pembungkus umum untuk styling/layout.</td>
                        <td>Card, wrapper, grid item.</td>
                    </tr>
                    <tr>
                        <td><code>section</code></td>
                        <td>Bagian besar dengan topik tertentu.</td>
                        <td>Section hero, section produk.</td>
                    </tr>
                    <tr>
                        <td><code>article</code></td>
                        <td>Konten mandiri.</td>
                        <td>Artikel blog, card berita.</td>
                    </tr>
                    <tr>
                        <td><code>aside</code></td>
                        <td>Konten samping/tambahan.</td>
                        <td>Sidebar, filter, kategori.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
