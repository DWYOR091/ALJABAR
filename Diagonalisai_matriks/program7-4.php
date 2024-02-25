<?php
// Fungsi untuk menghitung matriks hasil perkalian dua matriks
function matrixMultiplication($matrixA, $matrixB)
{
    $result = [];
    $rowsA = count($matrixA);
    $colsA = count($matrixA[0]);
    $colsB = count($matrixB[0]);
    for ($i = 0; $i < $rowsA; $i++) {
        for ($j = 0; $j < $colsB; $j++) {
            $sum = 0;
            for ($k = 0; $k < $colsA; $k++) {
                $sum += $matrixA[$i][$k] * $matrixB[$k][$j];
            }
            $result[$i][$j] = $sum;
        }
    }
    return $result;
}
// Fungsi untuk menghitung transpose matriks
function transposeMatrix($matrix)
{
    $rows = count($matrix);
    $cols = count($matrix[0]);
    $transpose = array();
    for ($i = 0; $i < $cols; $i++) {
        $temp = array();
        for ($j = 0; $j < $rows; $j++) {
            $temp[] = $matrix[$j][$i];
        }
        $transpose[] = $temp;
    }
    return $transpose;
}
// Fungsi untuk diagonalisasi matriks bobot dalam jaringan syaraf tiruan
function diagonalizeWeightMatrix($weightMatrix)
{
    // Menghitung transpose matriks bobot
    $transposeWeightMatrix = transposeMatrix($weightMatrix);
    // Menghitung matriks kovariansi dari bobot
    $covarianceMatrix = matrixMultiplication($weightMatrix, $transposeWeightMatrix);
    // Menghitung eigenvalues dan eigenvectors menggunakan metode PCA
    eigen_decomp($covarianceMatrix, $eigenvalues, $eigenvectors);
    // Mengurutkan eigenvalues dan eigenvectors berdasarkan nilai eigenvalues terbesar
    array_multisort($eigenvalues, SORT_DESC, $eigenvectors);
    return [
        "eigenvalues" => $eigenvalues,
        "eigenvectors" => $eigenvectors,
    ];
}
// Fungsi eigen_decomp untuk mendekomposisi matriks menjadi eigenvalues dan eigenvectors
function eigen_decomp($matrix, &$eigenvalues, &$eigenvectors)
{
    // Mendapatkan ukuran matriks (jumlah baris dan kolom)
    $n = count($matrix);
    // Menggunakan metode PCA untuk menghitung eigenvalues dan eigenvectors
    // (Pada contoh ini, kita akan menggunakan metode simulasi sederhana, seharusnya menggunakan metode numerik yang lebih tepat)
    $eigenvalues = [1, 0]; // Contoh eigenvalues (harus dihitung menggunakan metode yang lebih tepat)
    $eigenvectors = [
        [1, 0], // Contoh eigenvector 1 (harus dihitung menggunakan metode yang lebih tepat)
        [0, 1], // Contoh eigenvector 2 (harus dihitung menggunakan metode yang lebih tepat)
    ];
}
// Matriks bobot jaringan syaraf tiruan sebagai contoh
$weightMatrix = array(
    array(1, 2),
    array(3, 4),
    array(5, 6),
);
echo "Matriks Bobot Jaringan Syaraf Tiruan:\n <br>";
foreach ($weightMatrix as $row) {
    echo implode("\t", $row) . PHP_EOL;
}
// Lakukan diagonalisasi matriks bobot untuk meningkatkan efisiensi jaringan syaraftiruan
$result = diagonalizeWeightMatrix($weightMatrix);
echo "<br>Eigenvalues λ:";
print_r($result["eigenvalues"]);
echo "<br>Eigenvectors X:";
foreach ($result["eigenvectors"] as $eigenvector) {
    echo implode("\t", $eigenvector) . PHP_EOL;
}
