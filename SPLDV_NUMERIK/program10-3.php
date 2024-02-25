<?php
// Fungsi untuk menampilkan matriks
function printMatrix($matrix)
{
    foreach ($matrix as $row) {
        foreach ($row as $value) {
            echo $value . " ";
        }
        echo "<br>";
    }
}
// Fungsi untuk melakukan eliminasi Gauss pada matriks
function gaussElimination($matrix)
{
    $n = count($matrix);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            $ratio = $matrix[$j][$i] / $matrix[$i][$i];
            for ($k = $i; $k < $n + 1; $k++) {
                $matrix[$j][$k] -= $ratio * $matrix[$i][$k];
            }
        }
    }
    return $matrix;
}
// Fungsi untuk menghitung solusi dari matriks yang sudah dalam bentuk segitiga atas
function backSubstitution($matrix)
{
    $n = count($matrix);
    $x = array_fill(0, $n, 0);
    for ($i = $n - 1; $i >= 0; $i--) {
        $sum = 0;
        for ($j = $i + 1; $j < $n; $j++) {
            $sum += $matrix[$i][$j] * $x[$j];
        }
        $x[$i] = ($matrix[$i][$n] - $sum) / $matrix[$i][$i];
    }
    return $x;
}
// Sistem persamaan linear dalam bentuk matriks augmented
$matrix = array(
    array(2, -1, 3, 8),
    array(1, 2, 1, 11),
    array(3, 1, -2, -3)
);
echo "<h2>Penerapan Algoritma Numerik dalam Penyelesaian Sistem Persamaan Linear</h2>";
echo "<h3>Matriks Awal</h3>";
printMatrix($matrix);
$matrix = gaussElimination($matrix);

echo "<h3>Matriks setelah Eliminasi Gauss</h3>";
printMatrix($matrix);
$solution = backSubstitution($matrix);
echo "<h3>Solusi Sistem Persamaan Linear</h3>";
foreach ($solution as $index => $value) {
    echo "x" . ($index + 1) . " = " . $value . "<br>";
}
