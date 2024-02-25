<?php
// Fungsi untuk melakukan shear 3D terhadap vektor (x, y, z) menggunakan faktor shear (kxy, kxz, kyz)
function shear3D($x, $y, $z, $kxy, $kxz, $kyz)
{
    $shearedX = $x + $kxy * $y + $kxz * $z;
    $shearedY = $y + $kyz * $z;
    $shearedZ = $z;
    return array($shearedX, $shearedY, $shearedZ);
}
// Vektor awal sebelum shear
$vektorAwalX = 1;
$vektorAwalY = 2;
$vektorAwalZ = 3;
// Faktor shear untuk masing-masing sumbu x-y, x-z, dan y-z
$faktorShearXY = 0.5;
$faktorShearXZ = 0.2;
$faktorShearYZ = 0.3;
// Memanggil fungsi untuk melakukan shear 3D
$hasilShear = shear3D(
    $vektorAwalX,
    $vektorAwalY,
    $vektorAwalZ,
    $faktorShearXY,
    $faktorShearXZ,
    $faktorShearYZ
);
// Menampilkan hasil shear 3D
echo "<br>Vektor awal sebelum shear: ($vektorAwalX, $vektorAwalY, $vektorAwalZ)\n";
echo "<br>Faktor shear: ($faktorShearXY, $faktorShearXZ, $faktorShearYZ)\n";
echo "<br>Hasil shear: (" . $hasilShear[0] . ", " . $hasilShear[1] . ", " . $hasilShear[2] . ")\n";
