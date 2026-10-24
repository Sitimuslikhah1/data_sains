<?php
require_once __DIR__ . '/includes/functions.php';
$pageTitle = 'UTS Enterprise Resource Planning';
$activePage = 'dashboard';
$theory = get_theory();
$practicals = get_practicals();
include __DIR__ . '/includes/header.php';
?>
<main class="main-content direct-page">
  <section class="direct-hero">
    <div>
      <span class="eyebrow eyebrow-dark">UJIAN TENGAH SEMESTER</span>
      <h1>Tugas <span>Enterprise Resource Planning</span></h1>
      <p>Jawaban teori dan implementasi praktikum menggunakan PHP Native.</p>
    </div>
  </section>

  <section class="direct-section" id="identitas">
    <div class="direct-section-heading"><div><span class="section-kicker">IDENTITAS MAHASISWA</span><h2>Informasi Mahasiswa</h2></div></div>
    <div class="student-details">
      <div><span>Nama lengkap</span><strong>Siti Muslikhah</strong></div>
      <div><span>Nomor Induk Mahasiswa</span><strong>2222803</strong></div>
      <div><span>Kelas</span><strong>TRPL Reg B</strong></div>
      <div><span>Mata kuliah</span><strong>Enterprise Resource Planning</strong></div>
    </div>
  </section>

  <section class="direct-section" id="teori">
    <div class="direct-section-heading"><div><span class="section-kicker">BAGIAN I</span><h2>Soal Esai: Teori & Analisis</h2><p>Lima pembahasan konsep dasar Enterprise Resource Planning.</p></div><span class="section-count">05 SOAL</span></div>
    <div class="direct-answers">
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
      </article>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="direct-section" id="praktikum">
    <div class="direct-section-heading"><div><span class="section-kicker">BAGIAN II</span><h2>Praktikum PHP Native</h2><p>Kode program, tujuan, dan output untuk setiap praktikum.</p></div><span class="section-count">05 SOAL</span></div>
    <div class="practical-list">
      <?php foreach ($practicals as $i => $item): ?>
      <article class="practical-card" id="praktikum-<?= $i+1 ?>">
        <div class="practical-head"><div><span class="question-number">PRAKTIKUM <?= sprintf('%02d', $i+1) ?></span><h2><?= e($item['title']) ?></h2></div><span class="tag-pill"><?= e($item['tag']) ?></span></div>
        <div class="goal-box"><strong>Tujuan praktikum</strong><p><?= e($item['goal']) ?></p></div>
        <div class="code-title"><div><span class="file-dot"></span><strong>source.php</strong><small>PHP</small></div><button class="copy-btn" type="button" data-copy-target="direct-code-<?= $i+1 ?>">▣ Salin kode</button></div>
        <pre class="code-block"><code id="direct-code-<?= $i+1 ?>"><?= e($item['code']) ?></code></pre>
        <div class="output-title"><span class="output-icon">›_</span><strong>Output yang diharapkan</strong><span class="output-label">HASIL PROGRAM</span></div>
        <pre class="output-block"><?= e($item['output']) ?></pre>
        <?php if ($i === 0): ?>
        <section class="result-dashboard" aria-label="Ringkasan pipeline transaksi">
          <div class="result-heading"><div><span class="section-kicker">RINGKASAN PIPELINE</span><h3>Hasil validasi transaksi</h3><p>Data mentah diperiksa berdasarkan kelengkapan ID, produk, jumlah, dan harga sebelum dihitung nilai transaksinya.</p></div><span class="result-state"><i></i> Siap dianalisis</span></div>
          <div class="metric-grid"><div class="metric-card"><span>Data mentah</span><strong>5</strong><small>rekaman diterima</small></div><div class="metric-card"><span>Transaksi valid</span><strong class="metric-positive">3</strong><small>lolos validasi</small></div><div class="metric-card"><span>Data ditolak</span><strong class="metric-warning">2</strong><small>perlu diperbaiki</small></div></div>
          <div class="stats-detail-grid"><div class="stats-detail"><span>Total penjualan</span><strong>Rp 16.450.000</strong></div><div class="stats-detail"><span>Produk diproses</span><strong>3 produk</strong></div><div class="stats-detail"><span>Tahap pipeline</span><strong>4 tahapan</strong></div><div class="stats-detail"><span>Status akhir</span><strong class="metric-positive">Siap analisis</strong></div></div>
          <div class="result-footnote"><span>i</span><p><strong>Interpretasi:</strong> 3 dari 5 transaksi lolos validasi. Satu data ditolak karena ID kosong dan satu data ditolak karena jumlah bernilai negatif.</p></div>
        </section>
        <?php elseif ($i === 1): ?>
        <section class="result-dashboard" aria-label="Ringkasan eksplorasi dataset CSV">
          <div class="result-heading"><div><span class="section-kicker">RINGKASAN DATASET</span><h3>Hasil ekstraksi CSV & EDA</h3><p>Dataset mahasiswa dibaca, dikenali nama kolomnya, lalu diperiksa tipe data sederhananya.</p></div><span class="result-state"><i></i> File terbaca</span></div>
          <div class="metric-grid"><div class="metric-card"><span>Jumlah rekaman</span><strong>6</strong><small>baris data mahasiswa</small></div><div class="metric-card"><span>Jumlah kolom</span><strong>4</strong><small>atribut terdeteksi</small></div><div class="metric-card"><span>Pratinjau</span><strong>5</strong><small>baris pertama</small></div></div>
          <div class="result-table-wrap"><table class="result-table"><thead><tr><th>Nama kolom</th><th>Contoh isi</th><th>Tipe terdeteksi</th><th>Kegunaan</th></tr></thead><tbody><tr><td><code>nim</code></td><td>2222801</td><td><span class="status-chip status-valid">Numeric</span></td><td>Identitas mahasiswa</td></tr><tr><td><code>nama</code></td><td>Mahasiswa</td><td><span class="status-chip status-imputed">String</span></td><td>Nama mahasiswa</td></tr><tr><td><code>nilai_tugas</code></td><td>80</td><td><span class="status-chip status-valid">Numeric</span></td><td>Nilai tugas</td></tr><tr><td><code>nilai_ujian</code></td><td>85</td><td><span class="status-chip status-valid">Numeric</span></td><td>Nilai ujian</td></tr></tbody></table></div>
          <div class="result-footnote"><span>i</span><p><strong>Catatan:</strong> contoh isi hanya ilustrasi format. Pratinjau lengkap dari lima baris pertama dicetak oleh program dengan <code>print_r()</code>; tipe data diperiksa menggunakan nilai nonkosong pertama di setiap kolom.</p></div>
        </section>
        <?php endif; ?>
        <?php if ($i === 2): ?>
        <?php $cleanValues = [80, 82.5, 75, 82.5, 90, 82.5, 65, 85, 100]; $rawValues = [80, null, 75, "", 90, null, 65, 85, 100]; $validValues = [80,75,90,65,85,100]; $meanValid = array_sum($validValues) / count($validValues); $cleanMin = min($cleanValues); $cleanMax = max($cleanValues); ?>
        <section class="result-dashboard" aria-label="Ringkasan hasil preprocessing">
          <div class="result-heading"><div><span class="section-kicker">RINGKASAN ANALISIS</span><h3>Hasil proses data</h3><p>Nilai kosong ditandai sebagai <em>missing value</em>, lalu diganti menggunakan mean dari nilai valid.</p></div><span class="result-state"><i></i> Selesai diproses</span></div>
          <div class="metric-grid">
            <div class="metric-card"><span>Mean nilai valid</span><strong><?= number_format($meanValid, 2, ',', '.') ?></strong><small>tanpa null dan string kosong</small></div>
            <div class="metric-card"><span>Nilai minimum</span><strong><?= number_format($cleanMin, 2, ',', '.') ?></strong><small>setelah imputasi</small></div>
            <div class="metric-card"><span>Nilai maksimum</span><strong><?= number_format($cleanMax, 2, ',', '.') ?></strong><small>setelah imputasi</small></div>
          </div>
          <div class="result-table-wrap"><table class="result-table"><thead><tr><th>Indeks</th><th>Data awal</th><th>Status</th><th>Setelah imputasi</th><th>Min–Max (0–1)</th></tr></thead><tbody>
          <?php foreach ($rawValues as $idx => $raw): $missing = ($raw === null || $raw === ''); $clean = $cleanValues[$idx]; $norm = ($clean - $cleanMin) / ($cleanMax - $cleanMin); ?>
            <tr><td><?= $idx + 1 ?></td><td><?= $raw === null ? '<span class="null-value">null</span>' : ($raw === '' ? '<span class="null-value">"" (kosong)</span>' : number_format((float)$raw, 0, ',', '.')) ?></td><td><span class="status-chip <?= $missing ? 'status-imputed' : 'status-valid' ?>"><?= $missing ? 'Diimputasi' : 'Valid' ?></span></td><td><?= number_format($clean, 2, ',', '.') ?></td><td><?= number_format($norm, 4, ',', '.') ?></td></tr>
          <?php endforeach; ?>
          </tbody></table></div>
          <div class="result-footnote"><span>i</span><p><strong>Interpretasi:</strong> 3 nilai kosong diisi dengan mean 82,50. Setelah imputasi, rentang data adalah 65 hingga 100 dan hasil normalisasi berada pada skala 0–1.</p></div>
        </section>
        <?php endif; ?>
        <?php if ($i === 3): ?>
        <?php $statsData = [65, 70, 75, 80, 80, 85, 90, 90, 90, 95]; $statsMean = array_sum($statsData) / count($statsData); $statsSorted = $statsData; sort($statsSorted); $statsMedian = ($statsSorted[4] + $statsSorted[5]) / 2; $statsVariance = array_sum(array_map(fn($v) => ($v - $statsMean) ** 2, $statsData)) / count($statsData); $statsStd = sqrt($statsVariance); $statsFreq = array_count_values($statsData); $statsMaxFreq = max($statsFreq); $statsModes = array_keys(array_filter($statsFreq, fn($v) => $v === $statsMaxFreq)); ?>
        <section class="result-dashboard" aria-label="Ringkasan statistik deskriptif">
          <div class="result-heading"><div><span class="section-kicker">RINGKASAN ANALISIS</span><h3>Hasil statistik deskriptif</h3><p>Ukuran pemusatan dan penyebaran dihitung dari 10 data nilai.</p></div><span class="result-state"><i></i> Analisis selesai</span></div>
          <div class="metric-grid metric-grid-4">
            <div class="metric-card"><span>Mean</span><strong><?= number_format($statsMean, 2, ',', '.') ?></strong><small>rata-rata nilai</small></div>
            <div class="metric-card"><span>Median</span><strong><?= number_format($statsMedian, 2, ',', '.') ?></strong><small>nilai tengah</small></div>
            <div class="metric-card"><span>Modus</span><strong><?= implode(', ', $statsModes) ?></strong><small>frekuensi tertinggi</small></div>
            <div class="metric-card"><span>Standar deviasi</span><strong><?= number_format($statsStd, 2, ',', '.') ?></strong><small>populasi · pembagi n</small></div>
          </div>
          <div class="stats-detail-grid"><div class="stats-detail"><span>Jumlah data</span><strong><?= count($statsData) ?> nilai</strong></div><div class="stats-detail"><span>Nilai minimum</span><strong><?= min($statsData) ?></strong></div><div class="stats-detail"><span>Nilai maksimum</span><strong><?= max($statsData) ?></strong></div><div class="stats-detail"><span>Varians populasi</span><strong><?= number_format($statsVariance, 2, ',', '.') ?></strong></div></div>
        </section>
        <section class="frequency-panel" aria-label="Diagram batang frekuensi nilai">
          <div class="frequency-heading"><div><span class="section-kicker">VISUALISASI DATA</span><h3>Diagram Batang Frekuensi Nilai</h3><p>Setiap karakter # mewakili satu data mahasiswa.</p></div><span class="frequency-total"><?= count($statsData) ?> DATA</span></div>
          <?php $frequencyRanges = []; foreach ([['60–69',60,69],['70–79',70,79],['80–89',80,89],['90–100',90,100]] as [$label,$low,$high]) { $count = count(array_filter($statsData, fn($v) => $v >= $low && $v <= $high)); $frequencyRanges[] = ['label'=>$label,'count'=>$count]; } $maxRangeFrequency = max(array_column($frequencyRanges, 'count')); ?>
          <div class="frequency-bars">
            <?php foreach ($frequencyRanges as $range): ?>
            <div class="frequency-row"><span class="frequency-range"><?= e($range['label']) ?></span><div class="frequency-track"><div class="frequency-fill" style="width: <?= $maxRangeFrequency ? ($range['count'] / $maxRangeFrequency) * 100 : 0 ?>%"></div></div><strong><?= $range['count'] ?></strong><code><?= str_repeat('#', $range['count']) ?></code></div>
            <?php endforeach; ?>
          </div>
          <div class="frequency-note"><strong>Interpretasi:</strong> rentang 90–100 memiliki frekuensi tertinggi, yaitu 4 nilai. Rentang 60–69 memiliki frekuensi terendah, yaitu 1 nilai. Setiap karakter # pada output ASCII mewakili satu data.</div>
        </section>
        <?php endif; ?>
        <?php if ($i === 4): ?>
        <section class="result-dashboard" aria-label="Ringkasan pembagian data latih dan uji">
          <div class="result-heading"><div><span class="section-kicker">RINGKASAN PEMBAGIAN DATA</span><h3>Hasil train-test split</h3><p>Dataset berisi 50 sampel dan dibagi dengan rasio 80:20. Karena pengacakan aktif, anggota subset dapat berubah setiap program dijalankan.</p></div><span class="result-state"><i></i> Pembagian selesai</span></div>
          <div class="metric-grid"><div class="metric-card"><span>Total dataset</span><strong>50</strong><small>seluruh sampel</small></div><div class="metric-card"><span>Data latih</span><strong class="metric-positive">40</strong><small>80% dari dataset</small></div><div class="metric-card"><span>Data uji</span><strong>10</strong><small>20% dari dataset</small></div></div>
          <div class="split-visual"><div class="split-labels"><span>Komposisi pembagian</span><strong>80% : 20%</strong></div><div class="split-track"><span class="split-train"></span><span class="split-test"></span></div><div class="split-legend"><span><i class="legend-train"></i>Data latih · 40 sampel</span><span><i class="legend-test"></i>Data uji · 10 sampel</span></div></div>
          <div class="stats-detail-grid"><div class="stats-detail"><span>Duplikasi antar-subset</span><strong class="metric-positive">0</strong></div><div class="stats-detail"><span>Pengacakan</span><strong>Aktif</strong></div><div class="stats-detail"><span>Rasio latih</span><strong>0,80</strong></div><div class="stats-detail"><span>Rasio uji</span><strong>0,20</strong></div></div>
          <div class="result-footnote"><span>i</span><p><strong>Interpretasi:</strong> seluruh 50 sampel terbagi menjadi 40 data latih dan 10 data uji. Pemeriksaan irisan memastikan tidak ada ID sampel yang masuk ke kedua subset sekaligus.</p></div>
        </section>
        <?php endif; ?>
        <div class="explanation"><span class="explanation-icon">i</span><p><?= e($item['explanation']) ?></p></div>
      </article>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="run-guide" id="cara-menjalankan"><div class="run-guide-icon">⌁</div><div><h2>Petunjuk menjalankan kode praktikum</h2><ol><li>Gunakan XAMPP atau PHP CLI untuk menjalankan kode PHP.</li><li>Simpan kode praktikum yang ingin diuji sebagai file berakhiran <code>.php</code>.</li><li>Untuk soal CSV, letakkan <code>dataset_mahasiswa.csv</code> di folder kerja yang sama dengan skrip.</li></ol><p class="small-note">Kode di halaman ini ditampilkan sebagai materi dan tidak dieksekusi langsung oleh website.</p></div></section>
  <?php include __DIR__ . '/includes/footer.php'; ?>
</main>
