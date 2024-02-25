<?php
// Fungsi untuk mengalikan dua matriks
function multiplyMatrix($matrixA, $matrixB)
{
    $result = array();
    $rowsA = count($matrixA);
    $colsA = count($matrixA[0]);
    $rowsB = count($matrixB);
    $colsB = count($matrixB[0]);
    if ($colsA != $rowsB) {
        return false; // Tidak dapat mengalikan matriks
    }
    for ($i = 0; $i < $rowsA; $i++) {
        $result[$i] = array();
        for ($j = 0; $j < $colsB; $j++) {
            $result[$i][$j] = 0;
            for ($k = 0; $k < $colsA; $k++) {
                $result[$i][$j] += $matrixA[$i][$k] * $matrixB[$k][$j];
            }
        }
    }
    return $result;
}

// Fungsi untuk mengisi matriks dengan nilai acak
function generateRandomMatrix($rows, $cols)
{
    $matrix = array();
    for ($i = 0; $i < $rows; $i++) {
        $matrix[$i] = array();
        for ($j = 0; $j < $cols; $j++) {
            $matrix[$i][$j] = rand(1, 10);
        }
    }
    return $matrix;
}

// Matriks ukuran NxM dan MxP
$N = rand(2, 4); // Nilai acak antara 2 dan 5
$M = rand(2, 4);
$P = rand(2, 4);

// Matriks A dan B diisi dengan nilai acak
$matrixA = generateRandomMatrix($N, $M);
$matrixB = generateRandomMatrix($M, $P);

// Tampilkan matriks A
echo "Matriks A:<br>";
for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j < $M; $j++) {
        echo $matrixA[$i][$j] . " ";
    }
    echo "<br>";
}

// Tampilkan matriks B
echo "Matriks B:<br>";
for ($i = 0; $i < $M; $i++) {
    for ($j = 0; $j < $P; $j++) {
        echo $matrixB[$i][$j] . " ";
    }
    echo "<br>";
}

// Hitung hasil perkalian matriks A dan B secara paralel
$resultMatrix = multiplyMatrix($matrixA, $matrixB);

// Tampilkan hasil perkalian matriks
echo "Hasil perkalian matriks A dan B:<br>";
for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j < $P; $j++) {
        echo $resultMatrix[$i][$j] . " ";
    }
    echo "<br>";
}
