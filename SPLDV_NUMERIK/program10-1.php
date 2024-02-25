<?php
// Inisialisasi matriks koefisien dan vektor konstanta
$A = [
    [5, -2, 1],
    [-1, 3, -1],
    [2, -1, 4]
];
$B = [10, 5, 15];
// Jumlah variabel (ukuran matriks)
$n = count($B);
// Inisialisasi solusi awal
$x = [0, 0, 0];
// Jumlah iterasi maksimal
$maxIter = 50;
// Toleransi konvergensi
$tolerance = 1e-6;
// Metode iterasi Jacobi
for ($iter = 0; $iter < $maxIter; $iter++) {
    $newX = [];
    for ($i = 0; $i < $n; $i++) {
        $sum = $B[$i];
        for ($j = 0; $j < $n; $j++) {
            if ($j != $i) {
                $sum -= $A[$i][$j] * $x[$j];
            }
        }
        $newX[$i] = $sum / $A[$i][$i];
    }
    // Menghitung perbedaan antara solusi sebelumnya dan solusi baru
    $diff = 0;
    for ($i = 0; $i < $n; $i++) {
        $diff += abs($x[$i] - $newX[$i]);
    }
    // Mengganti solusi dengan solusi baru
    $x = $newX;
    // Cek kriteria konvergensi
    if ($diff < $tolerance) {
        break;
    }
}
// Menampilkan hasil solusi
echo "Hasil solusi:<br>";
for ($i = 0; $i < $n; $i++) {
    echo "x" . ($i + 1) . " = " . $x[$i] . "<br>";
}
