<?php
// Fungsi untuk melakukan dilatasi 2D pada vektor (x, y) dengan faktor skala k
function dilatasi2D($x, $y, $k)
{
    $dilatasiX = $k * $x;
    $dilatasiY = $k * $y;

    return array($dilatasiX, $dilatasiY);
}
// Koordinat vektor awal
$vektorAwalX = 3;
$vektorAwalY = 4;
// Faktor skala
$faktorSkala = 2;
// Memanggil fungsi untuk melakukan dilatasi 2D pada vektor awal dengan faktor skala
$hasilDilatasi = dilatasi2D($vektorAwalX, $vektorAwalY, $faktorSkala);
// Menampilkan hasil dilatasi 2D
echo "Koordinat vektor awal: ($vektorAwalX, $vektorAwalY)<br>";
echo "Faktor skala: $faktorSkala<br>";
echo "Hasil dilatasi 2D: (" . $hasilDilatasi[0] . ", " . $hasilDilatasi[1] . ")<br>";
