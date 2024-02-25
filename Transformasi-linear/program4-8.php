<?php
// Fungsi untuk melakukan translasi 3D terhadap vektor (x, y, z) menggunakan vektor translasi (a, b, c);
function translasi($x, $y, $z, $a, $b, $c)
{
    $translasiX = $x + $a;
    $translasiY = $y + $b;
    $translasiZ = $z + $c;
    return array($translasiX, $translasiY, $translasiZ);
}
// Vektor awal sebelum translasi
$vektorAwalX = 1;
$vektorAwalY = 2;
$vektorAwalZ = 3;
// Vektor translasi yang menunjukkan seberapa jauh dan ke arah mana vektor awal akan dipindahkan
$vektorTranslasiX = 2;
$vektorTranslasiY = 1;
$vektorTranslasiZ = -1;
// Memanggil fungsi untuk melakukan translasi 3D
$hasilTranslasi = translasi(
    $vektorAwalX,
    $vektorAwalY,
    $vektorAwalZ,
    $vektorTranslasiX,
    $vektorTranslasiY,
    $vektorTranslasiZ
);
// Menampilkan hasil translasi 3D
echo "Vektor awal sebelum translasi: ($vektorAwalX, $vektorAwalY, $vektorAwalZ)<br>";
echo "Vektor translasi: ($vektorTranslasiX, $vektorTranslasiY, $vektorTranslasiZ)<br>";
echo "Hasil translasi: (" . $hasilTranslasi[0] . ", " . $hasilTranslasi[1] . ", " . $hasilTranslasi[2]
    . ")<br>";
