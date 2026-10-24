<?php
require_once __DIR__ . '/includes/functions.php';
$pageTitle = 'Praktikum PHP';
$activePage = 'praktikum';
$practicals = get_practicals();
include __DIR__ . '/includes/header.php';
?>
<main class="main-content">
  <section class="page-heading">
    <div><span class="eyebrow eyebrow-dark">BAGIAN II · PEMROGRAMAN PHP NATIVE</span><h1>Laboratorium <span>Praktikum</span></h1><p>Lima implementasi dasar dengan kode sumber, penjelasan, dan output yang diharapkan.</p></div>
    <div class="heading-mark code-mark">{ }</div>
  </section>
  <div class="lab-banner"><div class="lab-banner-icon">⌘</div><div><strong>Lingkungan praktikum</strong><p>PHP Native · HTML · CSS · JavaScript · Tanpa Composer package</p></div><span class="runtime-badge"><i></i> XAMPP Ready</span></div>
  <div class="practical-nav">
    <?php foreach ($practicals as $i => $item): ?><a href="#praktikum-<?= $i+1 ?>"><span><?= sprintf('%02d', $i+1) ?></span><?= e($item['tag']) ?></a><?php endforeach; ?>
  </div>
  <div class="practical-list">
    <?php foreach ($practicals as $i => $item): ?>
    <article class="practical-card" id="praktikum-<?= $i+1 ?>">
      <div class="practical-head"><div><span class="question-number">PRAKTIKUM <?= sprintf('%02d', $i+1) ?></span><h2><?= e($item['title']) ?></h2></div><span class="tag-pill"><?= e($item['tag']) ?></span></div>
      <div class="goal-box"><strong>Tujuan praktikum</strong><p><?= e($item['goal']) ?></p></div>
      <div class="code-title"><div><span class="file-dot"></span><strong>source.php</strong><small>PHP</small></div><button class="copy-btn" type="button" data-copy-target="code-<?= $i+1 ?>">▣ Salin kode</button></div>
      <pre class="code-block"><code id="code-<?= $i+1 ?>"><?= e($item['code']) ?></code></pre>
      <div class="output-title"><span class="output-icon">›_</span><strong>Output yang diharapkan</strong><span class="output-label">CONSOLE</span></div>
      <pre class="output-block"><?= e($item['output']) ?></pre>
      <div class="explanation"><span class="explanation-icon">i</span><p><?= e($item['explanation']) ?></p></div>
    </article>
    <?php endforeach; ?>
  </div>
  <section class="run-guide"><div class="run-guide-icon">⌁</div><div><h2>Cara menjalankan di XAMPP</h2><ol><li>Salin folder website ke <code>C:\xampp\htdocs\website_uts_sains_data</code>.</li><li>Jalankan Apache dari XAMPP Control Panel.</li><li>Buka <code>http://localhost/website_uts_sains_data/</code>.</li><li>Untuk menjalankan kode praktikum secara terpisah, simpan kode ke file <code>.php</code> di folder project lalu buka melalui browser atau jalankan dengan perintah <code>php nama_file.php</code> di terminal.</li><li>Untuk praktikum CSV, letakkan <code>dataset_mahasiswa.csv</code> di folder yang sama dengan skrip CSV.</li></ol><p class="small-note">Output pada halaman ini merupakan hasil yang diharapkan dari kode yang ditampilkan. Program praktikum ditampilkan sebagai bahan pembelajaran dan tidak dieksekusi langsung oleh halaman.</p></div></section>
  <?php include __DIR__ . '/includes/footer.php'; ?>
</main>
