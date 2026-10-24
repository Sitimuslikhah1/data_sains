<?php
require_once __DIR__ . '/includes/functions.php';
$pageTitle = 'Soal Teori';
$activePage = 'teori';
$theory = get_theory();
include __DIR__ . '/includes/header.php';
?>
<main class="main-content">
  <section class="page-heading">
    <div><span class="eyebrow eyebrow-dark">BAGIAN I · TEORI & ANALISIS</span><h1>Dasar-Dasar <span>Sains Data</span></h1><p>Lima jawaban esai yang membahas konsep, proses, dan analisis data.</p></div>
    <div class="heading-mark">Aa</div>
  </section>
  <div class="content-layout">
    <aside class="content-index"><div class="index-title">DAFTAR SOAL <span>05</span></div>
      <?php foreach ($theory as $i => $item): ?><a href="#soal-<?= $i+1 ?>"><span class="index-number"><?= sprintf('%02d', $i+1) ?></span><span><?= e($item['title']) ?></span></a><?php endforeach; ?>
    </aside>
    <div class="article-list">
      <?php foreach ($theory as $i => $item): ?>
      <article class="article-card" id="soal-<?= $i+1 ?>">
        <div class="article-top"><span class="question-number">SOAL <?= sprintf('%02d', $i+1) ?></span><span class="reading-time">TEORI</span></div>
        <h2><?= e($item['title']) ?></h2><p class="article-summary"><?= e($item['summary']) ?></p>
        <?php foreach ($item['content'] as $section): ?>
          <section class="answer-section"><h3><?= e($section['heading']) ?></h3>
          <?php if (isset($section['text'])): ?><p><?= e($section['text']) ?></p><?php endif; ?>
          <?php if (isset($section['list'])): ?><ul><?php foreach ($section['list'] as $line): ?><li><?= e($line) ?></li><?php endforeach; ?></ul><?php endif; ?>
          <?php if (isset($section['formula'])): ?><div class="formula"><?= e($section['formula']) ?></div><?php endif; ?>
          <?php if (isset($section['table'])): ?><div class="table-wrap"><table><?php foreach ($section['table'] as $r => $row): ?><tr><?php foreach ($row as $cell): ?><?= $r === 0 ? '<th>' . e($cell) . '</th>' : '<td>' . e($cell) . '</td>' ?><?php endforeach; ?></tr><?php endforeach; ?></table></div><?php endif; ?>
          </section>
        <?php endforeach; ?>
        <a class="back-top" href="#top" onclick="window.scrollTo({top:0,behavior:'smooth'});return false;">Kembali ke atas ↑</a>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
  <?php include __DIR__ . '/includes/footer.php'; ?>
</main>
