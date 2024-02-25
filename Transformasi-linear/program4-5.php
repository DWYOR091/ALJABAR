<?php
// Fungsi untuk melakukan shear horizontal pada vektor (x, y) dengan parameter s
function shearHorizontal($x, $y, $s)
{
    $shearHorizontalX = $x + $s * $y;
    $shearHorizontalY = $y;

    return array($shearHorizontalX, $shearHorizontalY);
}
// Fungsi untuk melakukan shear vertikal pada vektor (x, y) dengan parameter s
function shearVertical($x, $y, $s)
{
    $shearVerticalX = $x;
    $shearVerticalY = $y + $s * $x;

    return array($shearVerticalX, $shearVerticalY);
}
// Koordinat vektor awal
$vektorAwalX = 3;
$vektorAwalY = 4;
// Parameter shear
$parameterShear = 2;
// Memanggil fungsi untuk melakukan shear horizontal pada vektor awal dengan
$hasilShearHorizontal = shearHorizontal($vektorAwalX, $vektorAwalY, $parameterShear);
// Memanggil fungsi untuk melakukan shear vertikal pada vektor awal dengan parameter
$hasilShearVertical = shearVertical($vektorAwalX, $vektorAwalY, $parameterShear);
// Menampilkan hasil shear horizontal dan shear vertikal
echo "Koordinat vektor awal: ($vektorAwalX, $vektorAwalY)<br>";
echo "Parameter shear: $parameterShear<br>";
echo "Hasil shear horizontal: (" . $hasilShearHorizontal[0] . ", " . $hasilShearHorizontal[1] .
    ")<br>";
echo "Hasil shear vertikal: (" . $hasilShearVertical[0] . ", " . $hasilShearVertical[1] . ")<br>";
