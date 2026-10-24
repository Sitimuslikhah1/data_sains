<?php
function e($value): string {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}
function get_theory(): array {
    return [
        [
            'title' => 'Definisi Sains Data dan Siklus Hidupnya',
            'summary' => 'Pengertian, ruang lingkup, dan tahapan proses data sains.',
            'content' => [
                ['heading' => 'Definisi Sains Data', 'text' => 'Sains Data (Data Science) adalah bidang ilmu yang menggabungkan statistika, matematika, pemrograman komputer, dan pengetahuan domain untuk mengolah data menjadi informasi, menemukan pola, serta menghasilkan wawasan yang membantu pengambilan keputusan.'],
                ['heading' => 'Ruang lingkup utama', 'list' => ['Pengumpulan data dari database, file, sensor, survei, atau sumber lain.', 'Pembersihan data untuk menangani nilai kosong, duplikasi, dan inkonsistensi.', 'Exploratory Data Analysis (EDA) untuk memahami pola, distribusi, dan hubungan antarvariabel.', 'Analisis dan pemodelan menggunakan statistik atau machine learning.', 'Evaluasi model, visualisasi, komunikasi hasil, deployment, serta pemantauan model.']],
                ['heading' => 'Siklus hidup data sains', 'list' => ['Perumusan masalah bisnis dan tujuan analisis.', 'Pengumpulan dan pemahaman data.', 'Pembersihan serta persiapan data.', 'EDA dan analisis awal.', 'Pemodelan dan pemilihan algoritma.', 'Evaluasi berdasarkan metrik yang sesuai.', 'Deployment atau penerapan model.', 'Pemantauan dan pemeliharaan model.']],
                ['heading' => 'Mengapa iteratif?', 'text' => 'Siklus ini bersifat iteratif karena hasil evaluasi dapat menunjukkan bahwa data belum memadai, model kurang baik, atau tujuan perlu diperjelas. Proses kemudian kembali ke tahap sebelumnya untuk memperbaiki data, memilih metode lain, atau merumuskan ulang masalah.']
            ]
        ],
        [
            'title' => 'Data Primer, Data Sekunder, dan EDA',
            'summary' => 'Membandingkan sumber data dan menjelaskan anomali yang dicari saat eksplorasi.',
            'content' => [
                ['heading' => 'Data primer', 'text' => 'Data primer dikumpulkan langsung oleh peneliti untuk memenuhi tujuan penelitian tertentu. Contohnya wawancara, kuesioner yang disebarkan sendiri, observasi, dan eksperimen.'],
                ['heading' => 'Data sekunder', 'text' => 'Data sekunder merupakan data yang telah dikumpulkan pihak lain dan digunakan kembali. Contohnya data BPS, laporan penelitian, arsip perusahaan, dan dataset dari repositori publik.'],
                ['heading' => 'Perbandingan', 'table' => [['Aspek','Primer','Sekunder'],['Sumber','Dikumpulkan langsung','Sudah tersedia'],['Tujuan','Sesuai kebutuhan peneliti','Mengikuti tujuan awal pengumpulan'],['Waktu dan biaya','Cenderung lebih besar','Cenderung lebih hemat'],['Contoh','Survei langsung','Dataset publik']]],
                ['heading' => 'Peran EDA', 'text' => 'Exploratory Data Analysis (EDA) adalah eksplorasi awal untuk memahami struktur, karakteristik, dan pola data sebelum pemodelan. EDA membantu memilih metode analisis yang sesuai dan mengurangi risiko kesalahan akibat kondisi data yang belum diketahui.'],
                ['heading' => 'Anomali yang dicari', 'list' => ['Missing values: nilai kosong atau tidak tersedia.', 'Outliers: nilai yang jauh berbeda dari mayoritas data.', 'Duplikasi: rekaman yang tercatat lebih dari satu kali.', 'Inkonsistensi: kategori atau format yang berbeda untuk hal yang sama.', 'Kesalahan tipe data: misalnya angka terbaca sebagai teks.', 'Distribusi tidak wajar: data terlalu menceng atau memiliki pola yang tidak biasa.']]
            ]
        ],
        [
            'title' => 'Dirty Data, Missing Values, dan Transformasi',
            'summary' => 'Teknik pembersihan data serta alasan normalisasi numerik dilakukan.',
            'content' => [
                ['heading' => 'Mengapa data mentah kotor?', 'text' => 'Data mentah dapat mengandung nilai kosong, kesalahan input, duplikasi, format tidak konsisten, atau nilai tidak masuk akal. Penggabungan data dari beberapa sumber juga dapat menghasilkan perbedaan struktur dan format.'],
                ['heading' => 'Teknik penanganan missing values', 'list' => ['Mean imputation: mengganti nilai kosong dengan rata-rata nilai valid. Sederhana untuk data numerik, tetapi dapat mengurangi variasi dan memengaruhi distribusi.', 'Median imputation: mengganti nilai kosong dengan median; relatif tahan terhadap pencilan.', 'Mode imputation: mengganti nilai kosong dengan nilai yang paling sering muncul, khususnya pada data kategorikal.', 'Penghapusan baris: dilakukan jika nilai kosong sedikit dan penghapusan tidak menimbulkan bias yang berarti.', 'Penghapusan kolom: dapat dipertimbangkan jika kolom memiliki terlalu banyak nilai kosong dan tidak penting bagi analisis.']],
                ['heading' => 'Normalisasi Min-Max', 'text' => 'Normalisasi Min-Max mengubah nilai numerik ke rentang tertentu, biasanya 0 hingga 1, agar skala atribut lebih sebanding. Hal ini membantu algoritma yang sensitif terhadap skala, misalnya K-Nearest Neighbors (KNN) dan K-Means.'],
                ['heading' => 'Rumus Min-Max', 'formula' => "x' = (x - x_min) / (x_max - x_min)", 'text' => 'x adalah nilai asli, x_min nilai minimum, dan x_max nilai maksimum. Metode ini sensitif terhadap pencilan karena nilai minimum dan maksimum menentukan hasil transformasi.']
            ]
        ],
        [
            'title' => 'Ukuran Pemusatan, Penyebaran, dan Outliers',
            'summary' => 'Memahami statistik deskriptif dan visualisasi distribusi.',
            'content' => [
                ['heading' => 'Ukuran pemusatan', 'table' => [['Ukuran','Pengertian'],['Mean','Rata-rata seluruh nilai'],['Median','Nilai tengah setelah data diurutkan'],['Modus','Nilai yang paling sering muncul']]],
                ['heading' => 'Ukuran penyebaran', 'table' => [['Ukuran','Pengertian'],['Varians','Rata-rata kuadrat penyimpangan terhadap mean; rumus bergantung pada populasi atau sampel'],['Standar deviasi','Akar kuadrat varians, menunjukkan tingkat penyebaran'],['IQR','Selisih kuartil ketiga dan kuartil pertama (Q3 − Q1)']]],
                ['heading' => 'Perbedaan utama', 'text' => 'Ukuran pemusatan menjelaskan nilai yang mewakili pusat data, sedangkan ukuran penyebaran menjelaskan seberapa jauh data bervariasi. Mean sensitif terhadap nilai ekstrem, sementara median relatif lebih tahan terhadap pencilan.'],
                ['heading' => 'Histogram dan Boxplot', 'list' => ['Histogram memperlihatkan frekuensi data pada interval tertentu. Nilai yang terpisah jauh dari kumpulan utama dapat mengindikasikan pencilan.', 'Boxplot menunjukkan median, kuartil, dan rentang data. Nilai di bawah Q1 − 1,5 × IQR atau di atas Q3 + 1,5 × IQR umumnya ditandai sebagai calon pencilan.', 'Pencilan tidak selalu salah; periksa konteks sebelum menghapus atau mengubahnya.']]
            ]
        ],
        [
            'title' => 'Jenis Machine Learning dan Train-Test Split',
            'summary' => 'Perbedaan supervised, unsupervised, reinforcement learning, dan evaluasi model.',
            'content' => [
                ['heading' => 'Jenis pembelajaran mesin', 'table' => [['Jenis','Karakteristik','Contoh'],['Supervised Learning','Belajar dari data berlabel','Prediksi kelulusan berdasarkan nilai dan kehadiran'],['Unsupervised Learning','Mencari pola tanpa label target','Mengelompokkan mahasiswa berdasarkan karakteristik'],['Reinforcement Learning','Belajar dari interaksi dan reward/penalty','Agen mempelajari strategi bermain gim']]],
                ['heading' => 'Training set dan testing set', 'text' => 'Training set digunakan untuk melatih model agar mempelajari pola. Testing set digunakan untuk mengukur kemampuan model pada data yang tidak digunakan selama pelatihan. Rasio 80:20 berarti 80% untuk pelatihan dan 20% untuk pengujian.'],
                ['heading' => 'Overfitting', 'text' => 'Overfitting terjadi ketika model terlalu menyesuaikan diri pada data latih sehingga performanya buruk pada data baru.'],
                ['heading' => 'Underfitting', 'text' => 'Underfitting terjadi ketika model terlalu sederhana atau belum belajar dengan baik sehingga performanya buruk pada data latih maupun data uji.'],
                ['heading' => 'Risiko rasio tidak proporsional', 'text' => 'Data latih yang terlalu sedikit dapat membuat model sulit mempelajari pola, sedangkan data uji yang terlalu sedikit membuat evaluasi kurang mewakili. Overfitting dan underfitting juga dipengaruhi kompleksitas model, kualitas data, dan proses pelatihan, bukan hanya rasio pembagian.']
            ]
        ]
    ];
}
function get_practicals(): array {
    return [
        [
            'title' => 'Simulasi Siklus Hidup Data Sains',
            'tag' => 'Data pipeline',
            'goal' => 'Memvalidasi data transaksi, menyaring data yang valid, menghitung total transaksi, dan menghasilkan status pipeline.',
            'code' => <<<'PHP'
<?php
$transaksi = [
    ["id"=>"TR001","produk"=>"Laptop","jumlah"=>2,"harga"=>7500000],
    ["id"=>"TR002","produk"=>"Mouse","jumlah"=>5,"harga"=>150000],
    ["id"=>"","produk"=>"Keyboard","jumlah"=>3,"harga"=>250000],
    ["id"=>"TR004","produk"=>"Monitor","jumlah"=>-1,"harga"=>2000000],
    ["id"=>"TR005","produk"=>"Headset","jumlah"=>2,"harga"=>350000]
];

$valid = [];
foreach ($transaksi as $row) {
    if (isset($row["id"], $row["produk"], $row["jumlah"], $row["harga"])
        && trim((string)$row["id"]) !== ""
        && trim((string)$row["produk"]) !== ""
        && is_numeric($row["jumlah"]) && is_numeric($row["harga"])
        && $row["jumlah"] > 0 && $row["harga"] >= 0) {
        $valid[] = $row;
    }
}

$processed = [];
foreach ($valid as $row) {
    $row["total"] = $row["jumlah"] * $row["harga"];
    $processed[] = $row;
}

echo "Total data mentah : " . count($transaksi) . PHP_EOL;
echo "Data valid        : " . count($valid) . PHP_EOL;
echo "Data tidak valid  : " . (count($transaksi)-count($valid)) . PHP_EOL;
echo "Data diproses     : " . count($processed) . PHP_EOL;

$totalPenjualan = 0;
foreach ($processed as $row) {
    printf("%s | %-10s | Total: Rp %s\n",
        $row["id"], $row["produk"],
        number_format($row["total"], 0, ",", "."));
    $totalPenjualan += $row["total"];
}
echo "Total penjualan: Rp " . number_format($totalPenjualan, 0, ",", ".") . PHP_EOL;
echo "Status pipeline: SIAP ANALISIS" . PHP_EOL;
?>
PHP,
            'output' => "Total data mentah : 5\nData valid        : 3\nData tidak valid  : 2\nData diproses     : 3\nTR001 | Laptop     | Total: Rp 15.000.000\nTR002 | Mouse      | Total: Rp 750.000\nTR005 | Headset    | Total: Rp 700.000\nTotal penjualan: Rp 16.450.000\nStatus pipeline: SIAP ANALISIS",
            'explanation' => 'Baris dengan ID kosong dan jumlah negatif ditolak. Tiga transaksi valid diproses untuk memperoleh nilai total penjualan.'
        ],
        [
            'title' => 'Ekstraksi CSV dan EDA',
            'tag' => 'CSV & EDA',
            'goal' => 'Membaca dataset_mahasiswa.csv menggunakan fopen() dan fgetcsv(), lalu menampilkan jumlah data, nama kolom, head lima baris, dan pemeriksaan tipe sederhana.',
            'code' => <<<'PHP'
<?php
$file = "dataset_mahasiswa.csv";
if (!file_exists($file)) die("File dataset tidak ditemukan!\n");

$handle = fopen($file, "r");
if ($handle === false) die("File gagal dibuka!\n");

$header = fgetcsv($handle);
if ($header === false) die("Dataset kosong!\n");
$header = array_map("trim", $header);
$data = [];

while (($row = fgetcsv($handle)) !== false) {
    if (count($row) === count($header)) {
        $data[] = array_combine($header, $row);
    }
}
fclose($handle);

echo "Jumlah rekaman: " . count($data) . "\n";
echo "Nama kolom: " . implode(", ", $header) . "\n";
echo "Pratinjau 5 baris pertama:\n";
print_r(array_slice($data, 0, 5));

echo "\nPemeriksaan tipe data sederhana:\n";
foreach ($header as $kolom) {
    $tipe = "string";
    foreach ($data as $row) {
        $nilai = trim((string)$row[$kolom]);
        if ($nilai === "") continue;
        $tipe = is_numeric($nilai) ? "numeric" : "string";
        break;
    }
    echo $kolom . " : " . $tipe . "\n";
}
?>
PHP,
            'output' => "Jumlah rekaman: 6\nNama kolom: nim, nama, nilai_tugas, nilai_ujian\nPratinjau: 5 baris pertama ditampilkan dengan print_r()\n\nPemeriksaan tipe data sederhana:\nnim : numeric\nnama : string\nnilai_tugas : numeric\nnilai_ujian : numeric",
            'explanation' => 'Buat file dataset_mahasiswa.csv di folder yang sama dengan skrip. Pemeriksaan tipe ini sederhana: kolom CSV tetap dibaca sebagai teks, lalu nilai nonkosong pertama diperiksa apakah numerik.'
        ],
        [
            'title' => 'Pembersihan Missing Value dan Normalisasi',
            'tag' => 'Preprocessing',
            'goal' => 'Menghitung mean dari nilai valid, mengimputasi null/string kosong, lalu menormalisasi seluruh nilai ke rentang 0–1.',
            'code' => <<<'PHP'
<?php
$nilai = [80, null, 75, "", 90, null, 65, 85, 100];
$valid = [];

foreach ($nilai as $v) {
    if ($v !== null && $v !== "" && is_numeric($v)) {
        $valid[] = (float)$v;
    }
}
$mean = array_sum($valid) / count($valid);
echo "Mean: " . round($mean, 2) . "\n";

$clean = [];
foreach ($nilai as $v) {
    $clean[] = ($v === null || $v === "")
        ? $mean : (float)$v;
}
echo "Setelah imputasi: " . json_encode($clean) . "\n";

$min = min($clean);
$max = max($clean);
$normalisasi = [];
foreach ($clean as $v) {
    $normalisasi[] = ($max == $min)
        ? 0 : ($v - $min) / ($max - $min);
}
echo "Normalisasi:\n";
foreach ($normalisasi as $v) {
    echo number_format($v, 4) . "\n";
}
?>
PHP,
            'output' => "Mean: 82.5\nSetelah imputasi: [80,82.5,75,82.5,90,82.5,65,85,100]\nNormalisasi:\n0.4286\n0.5000\n0.2857\n0.5000\n0.7143\n0.5000\n0.0000\n0.5714\n1.0000",
            'explanation' => 'Mean dihitung dari enam nilai valid: 80, 75, 90, 65, 85, dan 100. Nilai kosong diganti dengan 82,5. Nilai minimum 65 dan maksimum 100 menjadi dasar normalisasi Min-Max.'
        ],
        [
            'title' => 'Statistik Deskriptif dan Diagram ASCII',
            'tag' => 'Statistik',
            'goal' => 'Menghitung mean, median, modus, standar deviasi populasi, serta frekuensi pada interval nilai.',
            'code' => <<<'PHP'
<?php
$data = [65, 70, 75, 80, 80, 85, 90, 90, 90, 95];
$n = count($data);
$mean = array_sum($data) / $n;

sort($data);
$mid = intdiv($n, 2);
$median = ($n % 2 === 0)
    ? ($data[$mid-1] + $data[$mid]) / 2
    : $data[$mid];

$freq = array_count_values($data);
$maxFreq = max($freq);
$modus = [];
foreach ($freq as $nilai => $jumlah) {
    if ($jumlah === $maxFreq) $modus[] = $nilai;
}

$jumlahKuadrat = 0;
foreach ($data as $nilai) {
    $jumlahKuadrat += ($nilai - $mean) ** 2;
}
$varians = $jumlahKuadrat / $n; // populasi
$stdDev = sqrt($varians);

echo "Mean: " . round($mean, 2) . "\n";
echo "Median: " . $median . "\n";
echo "Modus: " . implode(", ", $modus) . "\n";
echo "Varians populasi: " . round($varians, 2) . "\n";
echo "Standar deviasi: " . round($stdDev, 2) . "\n";

$ranges = ["60-69"=>[60,69], "70-79"=>[70,79],
           "80-89"=>[80,89], "90-100"=>[90,100]];
foreach ($ranges as $label => $bounds) {
    $count = 0;
    foreach ($data as $nilai) {
        if ($nilai >= $bounds[0] && $nilai <= $bounds[1]) $count++;
    }
    echo str_pad($label, 8) . " | "
        . str_repeat("#", $count) . " ($count)\n";
}
?>
PHP,
            'output' => "Mean: 82\nMedian: 82.5\nModus: 90\nVarians populasi: 86\nStandar deviasi: 9.27\n60-69   | # (1)\n70-79   | ## (2)\n80-89   | ### (3)\n90-100  | #### (4)",
            'explanation' => 'Mean adalah rata-rata (82), median adalah nilai tengah (82,5), dan modus adalah nilai yang paling sering muncul (90). Standar deviasi populasi dihitung dengan pembagi n dan bernilai sekitar 9,27. Diagram batang menunjukkan frekuensi nilai pada empat rentang; jumlah seluruh frekuensi adalah 10 data.'
        ],
        [
            'title' => 'Pembagian Data Latih dan Data Uji',
            'tag' => 'Train-test split',
            'goal' => 'Membuat fungsi train_test_split() dengan rasio 80:20, pengacakan indeks opsional, dan tanpa duplikasi antar-subset.',
            'code' => <<<'PHP'
<?php
function train_test_split($data, $test_size = 0.2, $shuffle = true) {
    if ($test_size <= 0 || $test_size >= 1) {
        throw new InvalidArgumentException(
            "test_size harus lebih dari 0 dan kurang dari 1."
        );
    }

    $jumlah = count($data);
    $jumlahTest = (int) round($jumlah * $test_size);
    $indeks = $jumlah > 0 ? range(0, $jumlah - 1) : [];

    if ($shuffle) shuffle($indeks);

    $indeksTest = array_slice($indeks, 0, $jumlahTest);
    $indeksTrain = array_slice($indeks, $jumlahTest);

    $train = [];
    $test = [];
    foreach ($indeksTrain as $i) $train[] = $data[$i];
    foreach ($indeksTest as $i) $test[] = $data[$i];

    return ["train" => $train, "test" => $test];
}

$data = [];
for ($i = 1; $i <= 50; $i++) {
    $data[] = ["id" => $i, "nilai" => 50 + $i];
}

$hasil = train_test_split($data, 0.2, true);
$idTrain = array_column($hasil["train"], "id");
$idTest = array_column($hasil["test"], "id");
$irisan = array_intersect($idTrain, $idTest);

echo "Total dataset: " . count($data) . "\n";
echo "Data latih: " . count($hasil["train"]) . "\n";
echo "Data uji: " . count($hasil["test"]) . "\n";
echo "Duplikasi antar subset: " . count($irisan) . "\n";
?>
PHP,
            'output' => "Total dataset: 50\nData latih: 40\nData uji: 10\nDuplikasi antar subset: 0",
            'explanation' => 'Pengacakan dilakukan pada indeks unik, lalu indeks dibagi menjadi dua kelompok. Karena setiap indeks hanya muncul sekali, satu sampel tidak mungkin masuk ke kedua subset.'
        ]
    ];
}
