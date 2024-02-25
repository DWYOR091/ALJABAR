<?php
// Fungsi untuk melakukan proyeksi vektor 2D terhadap sumbu x
function proyeksiSumbuX($x, $y)
{
    $proyeksiX = $x;
    $proyeksiY = 0;

    return array($proyeksiX, $proyeksiY);
}
// Fungsi untuk melakukan proyeksi vektor 2D terhadap sumbu y
function proyeksiSumbuY($x, $y)
{
    $proyeksiX = 0;
    $proyeksiY = $y;

    return array($proyeksiX, $proyeksiY);
}
// Koordinat vektor awal
$vektorAwalX = 3;
$vektorAwalY = 4;
// Memanggil fungsi untuk melakukan proyeksi vektor awal terhadap sumbu x
$hasilProyeksiX = proyeksiSumbuX($vektorAwalX, $vektorAwalY);
// Memanggil fungsi untuk melakukan proyeksi vektor awal terhadap sumbu y
$hasilProyeksiY = proyeksiSumbuY($vektorAwalX, $vektorAwalY);
// Menampilkan hasil proyeksi vektor terhadap sumbu x dan sumbu y
echo "Koordinat vektor awal: ($vektorAwalX, $vektorAwalY)<br>";
echo "Hasil proyeksi terhadap sumbu x: (" . $hasilProyeksiX[0] . ", " . $hasilProyeksiX[1] .
    "))<br>";
echo "Hasil proyeksi terhadap sumbu y: (" . $hasilProyeksiY[0] . ", " . $hasilProyeksiY[1] .
    "))<br>";