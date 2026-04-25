<?php
function e($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

function load_materi() {
    $path = __DIR__ . '/../data/materi.json';
    $json = file_get_contents($path);
    return json_decode($json, true);
}

function active_class($file) {
    return basename($_SERVER['PHP_SELF']) === $file ? 'active' : '';
}

function group_by_kategori($items) {
    $groups = [];
    foreach ($items as $item) {
        $groups[$item['kategori']][] = $item;
    }
    return $groups;
}

function render_code($code) {
    return '<pre class="code-block"><code>' . e($code) . '</code></pre>';
}

function render_search_note() {
    echo '<div class="search-note">
        <strong>Tips:</strong> gunakan fitur Find di browser <kbd>Ctrl</kbd> + <kbd>F</kbd> untuk mencari command, misalnya <code>table</code>, <code>flex</code>, atau <code>foreach</code>.
    </div>';
}

function render_html_cards($items) {
    $groups = group_by_kategori($items);
    foreach ($groups as $kategori => $list) {
        echo '<section class="lesson-section" id="' . e(strtolower(str_replace(' ', '-', $kategori))) . '">';
        echo '<div class="section-heading"><span>HTML</span><h2>' . e($kategori) . '</h2><p>Fungsi, contoh kode, dan hasil tampilannya.</p></div>';
        echo '<div class="lesson-grid">';
        foreach ($list as $item) {
            echo '<article class="lesson-card">';
            echo '<div class="lesson-top"><h3>' . e($item['command']) . '</h3><span class="badge">' . e($item['kategori']) . '</span></div>';
            echo '<p>' . e($item['fungsi']) . '</p>';
            echo '<h4>Contoh kode</h4>';
            echo render_code($item['code']);
            echo '<h4>Hasil yang muncul</h4>';
            echo '<div class="preview-box">' . $item['preview'] . '</div>';
            echo '</article>';
        }
        echo '</div></section>';
    }
}

function render_css_cards($items) {
    $groups = group_by_kategori($items);
    foreach ($groups as $kategori => $list) {
        echo '<section class="lesson-section" id="' . e(strtolower(str_replace(' ', '-', $kategori))) . '">';
        echo '<div class="section-heading"><span>CSS</span><h2>' . e($kategori) . '</h2><p>Property/selector CSS beserta contoh visual.</p></div>';
        echo '<div class="lesson-grid">';
        foreach ($list as $item) {
            echo '<article class="lesson-card">';
            echo '<div class="lesson-top"><h3>' . e($item['command']) . '</h3><span class="badge css-badge">' . e($item['kategori']) . '</span></div>';
            echo '<p>' . e($item['fungsi']) . '</p>';
            echo '<h4>Contoh CSS</h4>';
            echo render_code($item['code']);
            echo '<h4>Hasil yang muncul</h4>';
            echo '<div class="preview-box css-preview">' . $item['demo'] . '</div>';
            echo '</article>';
        }
        echo '</div></section>';
    }
}

function render_php_cards($items) {
    $groups = group_by_kategori($items);
    foreach ($groups as $kategori => $list) {
        echo '<section class="lesson-section" id="' . e(strtolower(str_replace(' ', '-', $kategori))) . '">';
        echo '<div class="section-heading"><span>PHP</span><h2>' . e($kategori) . '</h2><p>Command PHP Native, fungsi, contoh kode, dan output.</p></div>';
        echo '<div class="lesson-grid">';
        foreach ($list as $item) {
            echo '<article class="lesson-card">';
            echo '<div class="lesson-top"><h3>' . e($item['command']) . '</h3><span class="badge php-badge">' . e($item['kategori']) . '</span></div>';
            echo '<p>' . e($item['fungsi']) . '</p>';
            echo '<h4>Contoh PHP</h4>';
            echo render_code($item['code']);
            echo '<h4>Output</h4>';
            echo '<div class="output-box">' . nl2br(e($item['output'])) . '</div>';
            echo '</article>';
        }
        echo '</div></section>';
    }
}
?>
