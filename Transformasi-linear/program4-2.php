<?php
// Fungsi untuk menghitung matriks rotasi 2D
function matriksRotasi2D($theta)
{
    $thetaRad = deg2rad($theta);
    $cosTheta = cos($thetaRad);
    $sinTheta = sin($thetaRad);
    $matriksRotasi = array(
        array($cosTheta, -$sinTheta),
        array($sinTheta, $cosTheta)
    );
    return $matriksRotasi;
}
$sudutRotasi = 45;
$matriksRotasi2D = matriksRotasi2D($sudutRotasi);
echo "Matriks Rotasi 2D untuk sudut $sudutRotasi derajat:<br>";
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 2; $j++) {
        echo $matriksRotasi2D[$i][$j] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
}
