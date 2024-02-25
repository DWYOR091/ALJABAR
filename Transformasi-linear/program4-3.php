<?php
// Fungsi untuk menghitung matriks refleksi 2D terhadap sumbu x
function matriksRefleksiX($theta)
{
    $thetaRad = deg2rad($theta);
    $cosTheta = cos($thetaRad);
    $sinTheta = sin($thetaRad);
    // Matriks refleksi 2D terhadap sumbu x
    $matriksRefleksiX = array(
        array(-$cosTheta, -$sinTheta),
        array($sinTheta, $cosTheta)
    );
    return $matriksRefleksiX;
}
// Fungsi untuk menghitung matriks refleksi 2D terhadap sumbu y
function matriksRefleksiY($theta)
{
    $thetaRad = deg2rad($theta);
    $cosTheta = cos($thetaRad);
    $sinTheta = sin($thetaRad);
    // Matriks refleksi 2D terhadap sumbu y
    $matriksRefleksiY = array(
        array($cosTheta, $sinTheta),
        array(-$sinTheta, $cosTheta)
    );
    return $matriksRefleksiY;
}
// Sudut refleksi dalam derajat
$sudutRefleksi = 45;
// Memanggil fungsi untuk menghitung matriks refleksi terhadap sumbu x
$matriksRefleksiX = matriksRefleksiX($sudutRefleksi);
// Memanggil fungsi untuk menghitung matriks refleksi terhadap sumbu y
$matriksRefleksiY = matriksRefleksiY($sudutRefleksi);
// Menampilkan matriks refleksi terhadap sumbu x
echo "Matriks Refleksi terhadap sumbu x untuk sudut $sudutRefleksi derajat:<br>";
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 2; $j++) {
        echo $matriksRefleksiX[$i][$j] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
}
echo "<br>";
// Menampilkan matriks refleksi terhadap sumbu y
echo "Matriks Refleksi terhadap sumbu y untuk sudut $sudutRefleksi derajat:<br>";
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 2; $j++) {
        echo $matriksRefleksiY[$i][$j] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
}