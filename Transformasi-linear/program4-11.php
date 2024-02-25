<?php
// Fungsi untuk melakukan proyeksi perspektif 3D terhadap vektor (x, y, z) dengan parameter proyeksi (d)
function proyeksiPerspektif3D($x, $y, $z, $d)
{
 $proyeksiX = ($d / ($d - $z)) * $x;
 $proyeksiY = ($d / ($d - $z)) * $y;
 return array($proyeksiX, $proyeksiY);
}
// Vektor awal sebelum proyeksi perspektif
$vektorAwalX = 1;
$vektorAwalY = 2;
$vektorAwalZ = 3;
// Parameter proyeksi (jarak dari bidang proyeksi ke titik pandang)
$d = 5;
// Memanggil fungsi untuk melakukan proyeksi perspektif 3D
$hasilProyeksi = proyeksiPerspektif3D($vektorAwalX, $vektorAwalY, $vektorAwalZ, $d);
// Menampilkan hasil proyeksi perspektif 3D
echo "Vektor awal sebelum proyeksi: ($vektorAwalX, $vektorAwalY, $vektorAwalZ)<br>";
echo "Parameter proyeksi (d): $d<br>";
echo "Hasil proyeksi perspektif: (" . $hasilProyeksi[0] . ", " . $hasilProyeksi[1] . ")<br>";
