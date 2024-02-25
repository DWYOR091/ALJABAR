<?php
// Fungsi untuk melakukan rotasi 3D terhadap sumbu x
function rotasiX($x, $y, $z, $theta)
{
    $thetaRad = deg2rad($theta);
    $rotasiX = $x;
    $rotasiY = $y * cos($thetaRad) - $z * sin($thetaRad);
    $rotasiZ = $y * sin($thetaRad) + $z * cos($thetaRad);

    return array($rotasiX, $rotasiY, $rotasiZ);
}
// Fungsi untuk melakukan rotasi 3D terhadap sumbu y
function rotasiY($x, $y, $z, $theta)
{
    $thetaRad = deg2rad($theta);
    $rotasiX = $x * cos($thetaRad) + $z * sin($thetaRad);
    $rotasiY = $y;
    $rotasiZ = -$x * sin($thetaRad) + $z * cos($thetaRad);

    return array($rotasiX, $rotasiY, $rotasiZ);
}
// Fungsi untuk melakukan rotasi 3D terhadap sumbu z
function rotasiZ($x, $y, $z, $theta)
{
    $thetaRad = deg2rad($theta);
    $rotasiX = $x * cos($thetaRad) - $y * sin($thetaRad);
    $rotasiY = $x * sin($thetaRad) + $y * cos($thetaRad);
    $rotasiZ = $z;

    return array($rotasiX, $rotasiY, $rotasiZ);
}
// Koordinat vektor awal
$vektorAwalX = 1;
$vektorAwalY = 0;
$vektorAwalZ = 0;
// Sudut rotasi
$sudutRotasi = 45;
// Memanggil fungsi untuk melakukan rotasi 3D terhadap sumbu x
$hasilRotasiX = rotasiX($vektorAwalX, $vektorAwalY, $vektorAwalZ, $sudutRotasi);
// Memanggil fungsi untuk melakukan rotasi 3D terhadap sumbu y
$hasilRotasiY = rotasiY($vektorAwalX, $vektorAwalY, $vektorAwalZ, $sudutRotasi);
// Memanggil fungsi untuk melakukan rotasi 3D terhadap sumbu z
$hasilRotasiZ = rotasiZ($vektorAwalX, $vektorAwalY, $vektorAwalZ, $sudutRotasi);
// Menampilkan hasil rotasi 3D
echo "Koordinat vektor awal: ($vektorAwalX, $vektorAwalY, $vektorAwalZ)<br>";
echo "Sudut rotasi: $sudutRotasi derajat<br>";
echo "Hasil rotasi terhadap sumbu x: (" . $hasilRotasiX[0] . ", " . $hasilRotasiX[1] . ", " .
    $hasilRotasiX[2] . ")<br>";
echo "Hasil rotasi terhadap sumbu y: (" . $hasilRotasiY[0] . ", " . $hasilRotasiY[1] . ", " .
    $hasilRotasiY[2] . ")<br>";
echo "Hasil rotasi terhadap sumbu z: (" . $hasilRotasiZ[0] . ", " . $hasilRotasiZ[1] . ", " .
    $hasilRotasiZ[2] . ")<br>";
