<?php
// Fungsi untuk melakukan dilatasi 3D terhadap vektor (x, y, z) menggunakan faktor skala (kx, ky, kz)
function dilatasi($x, $y, $z, $kx, $ky, $kz)
{
    $dilatasiX = $kx * $x;
    $dilatasiY = $ky * $y;
    $dilatasiZ = $kz * $z;
    return array($dilatasiX, $dilatasiY, $dilatasiZ);
}
// Vektor awal sebelum dilatasi
$vektorAwalX = 1;
$vektorAwalY = 2;
$vektorAwalZ = 3;
// Faktor skala untuk masing-masing sumbu x, y, dan z
$faktorSkalaX = 2;
$faktorSkalaY = 3;
$faktorSkalaZ = 1.5;
// Memanggil fungsi untuk melakukan dilatasi 3D
$hasilDilatasi = dilatasi(
    $vektorAwalX,
    $vektorAwalY,
    $vektorAwalZ,
    $faktorSkalaX,
    $faktorSkalaY,
    $faktorSkalaZ
);
// Menampilkan hasil dilatasi 3D
echo "Vektor awal sebelum dilatasi: ($vektorAwalX, $vektorAwalY, $vektorAwalZ)<br>";
echo "Faktor skala: ($faktorSkalaX, $faktorSkalaY, $faktorSkalaZ))<br>";
echo "Hasil dilatasi: (" . $hasilDilatasi[0] . ", " . $hasilDilatasi[1] . ", " . $hasilDilatasi[2] .
    "))<br>";
