<?php
$data = array(
    array(3, 5),
    array(4, 6),
    array(5, 7),
    array(6, 8),
    array(7, 9)
);

$n = count($data);
$cols = count($data[0]);

$sumX = 0;
$sumY = 0;
foreach ($data as $point) {
    $sumX += $point[0];
    $sumY += $point[1];
}

$avgX = $sumX / $n;
$avgY = $sumY / $n;

$sumXSquare = 0;
$sumYSquare = 0;
$sumXY = 0;
foreach ($data as $point) {
    $sumXSquare += pow($point[0], 2);
    $sumYSquare += pow($point[1], 2);
    $sumXY += $point[0] * $point[1];
}

$b = ($n * $sumXY - $sumX * $sumY) / ($n * $sumXSquare - pow($sumX, 2));
$a = $avgY - $b * $avgX;

function predict($x, $a, $b)
{
    return $a + $b * $x;
}

echo "Data yang akan dimodelkan:<br>";
foreach ($data as $point) {
    echo "($point[0], $point[1])<br>";
}
echo "<br>Hasil Model Regresi:<br>";
echo "Persamaan Regresi: y = $a + $b * x<br>";
echo "Prediksi untuk x = 8: " . predict(8, $a, $b) . "<br>";
