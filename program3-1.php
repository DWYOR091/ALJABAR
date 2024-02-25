<!DOCTYPE html>
<html>
<head>
 <title>Aplikasi Sistem Persamaan Linear</title>
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
 <h2>Aplikasi Sistem Persamaan Linear</h2>
 <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 <label for="a1">Masukkan nilai a1:</label><br>
 <input type="text" name="a1" id="a1" required><br>
 <label for="b1">Masukkan nilai b1:</label><br>
 <input type="text" name="b1" id="b1" required><br>
 <label for="c1">Masukkan nilai c1:</label><br>
 <input type="text" name="c1" id="c1" required><br>
 <label for="a2">Masukkan nilai a2:</label><br>
 <input type="text" name="a2" id="a2" required><br>
 <label for="b2">Masukkan nilai b2:</label><br>
 <input type="text" name="b2" id="b2" required><br>
 <label for="c2">Masukkan nilai c2:</label><br>
 <input type="text" name="c2" id="c2" requixred><br><br>
 <input type="submit" value="Hitung">
 </form>
 <?php
 // Cek apakah form telah disubmit
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 // Mengambil nilai dari form input
 $a1 = $_POST['a1'];
 $b1 = $_POST['b1'];
 $c1 = $_POST['c1'];
 $a2 = $_POST['a2'];
 $b2 = $_POST['b2'];
 $c2 = $_POST['c2'];
 // Fungsi untuk menyelesaikan sistem persamaan linear dengan metode substitusi
 function selesaikanSistemPersamaan($a1, $b1, $c1, $a2, $b2, $c2) {
3;
 // Menggunakan persamaan pertama untuk menyelesaikan x
 $x = ($c1 - ($b1 * $c2 / $b2)) / ($a1 - ($b1 * $a2 / $b2));
 // Menggunakan persamaan kedua untuk menyelesaikan y
 $y = ($c2 - ($a2 * $x)) / $b2;
 // Mengembalikan nilai x dan y sebagai array
 return array('x' => $x, 'y' => $y);
 }
 // Memanggil fungsi selesaikanSistemPersamaan dan menyimpan hasilnya
 $hasil = selesaikanSistemPersamaan($a1, $b1, $c1, $a2, $b2, $c2);
 // Menampilkan hasil
 echo "<h3>Hasil dari sistem persamaan linear adalah:</h3>";
 echo "x = " . $hasil['x'] . "<br>";
 echo "y = " . $hasil['y'] . "<br>";
 // Data input dan output untuk ditampilkan di chart
 $dataInput = array($a1, $b1, $c1, $a2, $b2, $c2);
 $dataOutput = array($hasil['x'], $hasil['y']);
 // Membuat chart menggunakan Chart.js
 echo '<canvas id="myChart"></canvas>';
 echo '<script>';
 echo 'var ctx = document.getElementById("myChart").getContext("2d");';
 echo 'var myChart = new Chart(ctx, {';
 echo ' type: "scatter",';
 echo ' data: {';
 echo ' datasets: [{';
 echo ' label: "Data Input",';
 echo ' data: [{';
 echo ' x: ' . $a1 . ',';
 echo ' y: ' . $b1 . '';
 echo ' }, {';
 echo ' x: ' . $a2 . ',';
 echo ' y: ' . $b2 . '';
 echo ' }],';
 echo ' backgroundColor: "rgba(75, 192, 192, 0.2)",';
 echo ' borderColor: "rgba(75, 192, 192, 1)",';
 echo ' pointRadius: 8';
 echo ' }, {';
 echo ' label: "Data Output",';
 echo ' data: [{';
 echo ' x: ' . $hasil['x'] . ',';
 echo ' y: ' . $hasil['y'] . '';
 echo ' }],';
 echo ' backgroundColor: "rgba(255, 99, 132, 0.2)",';
 echo ' borderColor: "rgba(255, 99, 132, 1)",';
 echo ' pointRadius: 8';
 echo ' }]';
4;
 echo ' },';
 echo ' options: {';
 echo ' responsive: false,';
 echo ' maintainAspectRatio: false,';
 echo ' width: 1000,';
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