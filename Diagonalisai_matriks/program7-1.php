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
// Fungsi untuk menghitung matriks identitas dengan ukuran tertentu
function identityMatrix($size)
{
    $identity = [];
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            $identity[$i][$j] = ($i == $j) ? 1 : 0;
        }
    }
    return $identity;
}
// Fungsi untuk menampilkan matriks dalam bentuk tabel
function displayMatrix($matrix)
{
    foreach ($matrix as $row) {
        echo implode("\t", $row) . PHP_EOL;
    }
}
// Fungsi untuk melakukan diagonalisasi matriks
function diagonalizeMatrix($matrix)
{
    $n = count($matrix);
    // Salin matriks ke matriks sementara
    $tempMatrix = $matrix;
    // Inisialisasi matriks eigenvectors dengan matriks identitas
    $eigenvectors = identityMatrix($n);
    // Metode iterasi hingga konvergensi
    for ($iteration = 0; $iteration < 10; $iteration++) {
        // Lakukan perkalian matriks untuk mendekati diagonalisasi
        $matrixProduct = matrixMultiplication($tempMatrix, $tempMatrix);
        // Cari eigenvalues dengan menghitung elemen diagonal matriks product
        $eigenvalues = [];
        for ($i = 0; $i < $n; $i++) {
            $eigenvalues[] = $matrixProduct[$i][$i];
        }
        // Ambil indeks eigenvalue maksimum
        $maxEigenvalueIndex = array_search(max($eigenvalues), $eigenvalues);
        // Dapatkan eigenvector dari kolom dengan eigenvalue maksimum
        $eigenvector = array_column($eigenvectors, $maxEigenvalueIndex);
        // Normalisasi eigenvector
        $norm = sqrt(array_sum(array_map(function ($val) {
            return $val ** 2;
        }, $eigenvector)));
        $eigenvector = array_map(function ($val) use ($norm) {
            return $val / $norm;
        }, $eigenvector);

        // Perbarui matriks eigenvectors
        foreach ($eigenvectors as $i => &$row) {
            $row[$maxEigenvalueIndex] = $eigenvector[$i];
        }
        // Perbarui matriks sementara dengan matriks product
        $tempMatrix = $matrixProduct;
    }
    return [
        "eigenvalues" => $eigenvalues,
        "eigenvectors" => $eigenvectors,
    ];
}
// Matriks sebagai contoh
$matrixA = array(
    array(1, 6),
    array(0, -1)
);
echo "Matriks Awal:<br>";
displayMatrix($matrixA);
// Lakukan diagonalisasi matriks
$result = diagonalizeMatrix($matrixA);
echo "<br>Eigenvalues λ: ";
print_r($result["eigenvalues"]);
echo "<br>Eigenvectors X: ";
displayMatrix($result["eigenvectors"]);
