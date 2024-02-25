<!DOCTYPE html>
<html>
<head>
 <title>Aplikasi Sistem Persamaan Linear Dengan <br> Metode Eliminasi Gauss-Jordan</title>
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
 <h2>Aplikasi Sistem Persamaan Linear Dengan <br> Metode Eliminasi Gauss-Jordan</h2>
 <form method="POST">
 <label for="a1">Koefisien a1:</label><br>
 <input type="text" id="a1" name="a1" required><br>
 <label for="b1">Koefisien b1:</label><br>
 <input type="text" id="b1" name="b1" required><br>
 <label for="k1">Konstanta k1:</label><br>
 <input type="text" id="k1" name="k1" required><br>
 <br>
 <label for="a2">Koefisien a2:</label><br>
 <input type="text" id="a2" name="a2" required><br>
 <label for="b2">Koefisien b2:</label><br>
 <input type="text" id="b2" name="b2" required><br>
 <label for="k2">Konstanta k2:</label><br>
 <input type="text" id="k2" name="k2" required><br>
 <br>
 <button type="submit">Hitung</button>
 </form>
 <canvas id="chart"></canvas>
 <?php
 // Fungsi untuk menampilkan matriks
 function tampilkanMatriks($matriks) {
 foreach ($matriks as $baris) {
 foreach ($baris as $elemen) {
 echo $elemen . ' ';
 }
 echo '<br>';
 }
 echo '<br>';
 }
 // Fungsi untuk mengalikan baris dengan skalar
 function kaliBarisDenganSkalar(&$matriks, $baris, $skalar) {
 for ($i = 0; $i < count($matriks[$baris]); $i++) {
 $matriks[$baris][$i] *= $skalar;
 }
 }
 // Fungsi untuk menukar baris
 function tukarBaris(&$matriks, $baris1, $baris2) {
 $temp = $matriks[$baris1];
 $matriks[$baris1] = $matriks[$baris2];
 $matriks[$baris2] = $temp;
 }
 // Fungsi untuk menjumlahkan dua baris
 function jumlahkanBaris(&$matriks, $barisSumber, $barisTujuan, $skalar) {
 for ($i = 0; $i < count($matriks[$barisSumber]); $i++) {
 $matriks[$barisTujuan][$i] += $skalar * $matriks[$barisSumber][$i];
 }
 }
14;
 // Fungsi untuk membagi baris dengan elemen di diagonal utama
 function bagiBaris(&$matriks, $baris, $skalar) {
 for ($i = 0; $i < count($matriks[$baris]); $i++) {
 $matriks[$baris][$i] /= $skalar;
 }
 }
 // Mengecek apakah formulir sudah di-submit
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 // Mengambil nilai koefisien dan konstanta dari form input
 $koefisien = array(
 array($_POST['a1'], $_POST['b1']),
 array($_POST['a2'], $_POST['b2'])
 );
 $konstanta = array(
 $_POST['k1'],
 $_POST['k2']
 );
 // Matriks augmented
 $matriks = array(
 array_merge($koefisien[0], array($konstanta[0])),
 array_merge($koefisien[1], array($konstanta[1]))
 );
 // Menampilkan matriks awal
 echo 'Matriks Awal:<br>';
 tampilkanMatriks($matriks);
 // Metode eliminasi Gauss-Jordan
 $baris = count($matriks);
 $kolom = count($matriks[0]);
 for ($i = 0; $i < $baris; $i++) {
 // Mencari baris dengan elemen diagonal utama yang tidak nol
 $barisNonNol = -1;
 for ($j = $i; $j < $baris; $j++) {
 if ($matriks[$j][$i] != 0) {
 $barisNonNol = $j;
 break;
 }
 }
 if ($barisNonNol == -1) {
 echo 'Tidak ada solusi unik.';
 exit();
 }
 // Menukar baris dengan baris non-nol
 tukarBaris($matriks, $i, $barisNonNol);
 // Membagi baris dengan elemen di diagonal utama
 bagiBaris($matriks, $i, $matriks[$i][$i]);
 // Mengeliminasi elemen-elemen di kolom yang sama menjadi nol
 for ($j = 0; $j < $baris; $j++) {
 if ($j != $i) {
 $skalar = -$matriks[$j][$i];
 jumlahkanBaris($matriks, $i, $j, $skalar);
 }
15;
 }
 }
 // Menampilkan matriks setelah eliminasi Gauss-Jordan
 echo 'Matriks Setelah Eliminasi Gauss-Jordan:<br>';
 tampilkanMatriks($matriks);
 // Menampilkan solusi
 $x = $matriks[0][$kolom - 1];
 $y = $matriks[1][$kolom - 1];
 echo 'Solusi:<br>';
 echo 'x = ' . $x . '<br>';
 echo 'y = ' . $y . '<br>';
 }
 ?>
 <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
 <script>
 var ctx = document.getElementById('chart').getContext('2d');
 var chart = new Chart(ctx, {
 type: 'scatter',
 data: {
 datasets: [{
 label: 'Koefisien',
 data: [
 { x: <?php echo $koefisien[0][0]; ?>, y: <?php echo $koefisien[0][1]; ?> },
 { x: <?php echo $koefisien[1][0]; ?>, y: <?php echo $koefisien[1][1]; ?> }
 ],
 backgroundColor: 'red',
 borderColor: 'red',
 pointRadius: 6
 }, {
 label: 'Solusi',
 data: [
 { x: <?php echo $x; ?>, y: <?php echo $y; ?> }
 ],
 backgroundColor: 'blue',
 borderColor: 'blue',
 pointRadius: 6
 }]
 },
 options: {
 responsive: false,
 maintainAspectRatio: false,
 width: 1000,
 height: 800,
 scales: {
 x: {
 beginAtZero: true
 },
 y: {
 beginAtZero: true
 }
 }
 }
 });
 </script>
 <?php endif; ?>
</body>
</html>