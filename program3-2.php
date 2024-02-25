<!DOCTYPE html>
<html>
<head>
 <title>Aplikasi Sistem Persamaan Linear Dengan Metode Matriks</title>
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
 <h2>Aplikasi Sistem Persamaan Linear Dengan Metode Matriks</h2>

 <form method="POST" action="">
 <label for="koefisien-1-1">Koefisien 1,1:</label><br>
 <input type="text" name="koefisien[0][0]" id="koefisien-1-1" required><br>
 <label for="koefisien-1-2">Koefisien 1,2:</label><br>
 <input type="text" name="koefisien[0][1]" id="koefisien-1-2" required><br>
 <label for="koefisien-2-1">Koefisien 2,1:</label><br>
 <input type="text" name="koefisien[1][0]" id="koefisien-2-1" required><br>
 <label for="koefisien-2-2">Koefisien 2,2:</label><br>
 <input type="text" name="koefisien[1][1]" id="koefisien-2-2" required><br>
 <label for="konstanta-1">Konstanta 1:</label><br>
 <input type="text" name="konstanta[0]" id="konstanta-1" required><br>
 <label for="konstanta-2">Konstanta 2:</label><br>
 <input type="text" name="konstanta[1]" id="konstanta-2" required><br><br>
 <input type="submit" value="Hitung">
 </form>
 <?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 // Mengambil matriks koefisien dari form input
 $koefisien = $_POST['koefisien'];
 // Mengambil matriks konstanta dari form input
 $konstanta = $_POST['konstanta'];
 // Menghitung determinan matriks
 function hitungDeterminan($matriks)
 {
 $determinan = ($matriks[0][0] * $matriks[1][1]) - ($matriks[0][1] * $matriks[1][0]);
 return $determinan;
 }
 // Menghitung determinan matriks x
 function hitungDeterminanX($matriks, $konstanta)
 {
 $matriks[0][0] = $konstanta[0];
 $matriks[1][0] = $konstanta[1];
 $determinan_x = hitungDeterminan($matriks);
 return $determinan_x;
 }
9;
 // Menghitung determinan matriks y
 function hitungDeterminanY($matriks, $konstanta)
 {
 $matriks[0][1] = $konstanta[0];
 $matriks[1][1] = $konstanta[1];
 $determinan_y = hitungDeterminan($matriks);
 return $determinan_y;
 }
 $nilaix = (hitungDeterminanX($koefisien, $konstanta) / hitungDeterminan($koefisien));
 $nilaiy = (hitungDeterminanY($koefisien, $konstanta) / hitungDeterminan($koefisien));
 echo "<canvas id='myChart'></canvas>";
 echo "Determinan Koefisien = " . hitungDeterminan($koefisien) . "<br>";
 echo "Determinan Koefisien X = " . hitungDeterminanX($koefisien, $konstanta) .
"<br>";
 echo "Determinan Koefisien Y = " . hitungDeterminanY($koefisien, $konstanta) .
"<br>";
 echo "Nilai X = " . $nilaix . "<br>";
 echo "Nilai Y = " . $nilaiy . "<br>";
 // Membuat chart menggunakan Chart.js
 echo '<script>';
 echo 'var ctx = document.getElementById("myChart").getContext("2d");';
 echo 'var myChart = new Chart(ctx, {';
 echo ' type: "scatter",';
 echo ' data: {';
 echo ' datasets: [{';
 echo ' label: "Koefisien",';
 echo ' data: [{';
 echo ' x: ' . $koefisien[0][0] . ',';
 echo ' y: ' . $koefisien[0][1] . '';
 echo ' }, {';
 echo ' x: ' . $koefisien[1][0] . ',';
 echo ' y: ' . $koefisien[1][1] . '';
 echo ' }],';
 echo ' backgroundColor: "red"';
 echo ' }, {';
 echo ' label: "Nilai XY",';
 echo ' data: [{';
 echo ' x: ' . $nilaix . ',';
 echo ' y: ' . $nilaiy . '';
 echo ' }],';
 echo ' backgroundColor: "blue"';
 echo ' }]';
 echo ' },';
 echo ' options: {';
 echo ' responsive: false,';
 echo ' maintainAspectRatio: false,';
 echo ' width: 1000,';
10;
 echo ' height: 800,';
 echo ' scales: {';
 echo ' x: {';
 echo ' beginAtZero: true';
 echo ' },';
 echo ' y: {';
 echo ' beginAtZero: true';
 echo ' }';
 echo ' }';
 echo ' }';
 echo '});';
 echo '</script>';
 }
 ?>
</body>
</html>