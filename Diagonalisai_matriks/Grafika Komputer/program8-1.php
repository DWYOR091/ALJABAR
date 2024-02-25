<?php
// Fungsi untuk melakukan translasi terhadap titik-titik objek
function translasi($points, $tx, $ty)
{
    $translatedPoints = [];
    foreach ($points as $point) {
        $translatedPoints[] = [
            $point[0] + $tx,
            $point[1] + $ty
        ];
    }
    return $translatedPoints;
}
// Fungsi untuk melakukan rotasi terhadap titik-titik objek
function rotasi($points, $angle)
{
    $rotatedPoints = [];
    $cosAngle = cos(deg2rad($angle));
    $sinAngle = sin(deg2rad($angle));
    foreach ($points as $point) {
        $x = $point[0];
        $y = $point[1];
        $rotatedX = $x * $cosAngle - $y * $sinAngle;
        $rotatedY = $x * $sinAngle + $y * $cosAngle;
        $rotatedPoints[] = [$rotatedX, $rotatedY];
    }
    return $rotatedPoints;
}
// Fungsi untuk melakukan penskalaan terhadap titik-titik objek
function penskalaan($points, $sx, $sy)
{
    $scaledPoints = [];
    foreach ($points as $point) {
        $scaledPoints[] = [
            $point[0] * $sx,
            $point[1] * $sy
        ];
    }
    return $scaledPoints;
}
// Titik-titik objek dalam sistem koordinat dunia
$objek = [
    [1, 1],
    [2, 1],
    [2, 2],
    [1, 2]
];
// Transformasi translasi
$translatedObjek = translasi($objek, 2, 3);
// Transformasi rotasi
$rotatedObjek = rotasi($objek, 45);
// Transformasi penskalaan
$scaledObjek = penskalaan($objek, 2, 2);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Transformasi Linier dalam Grafika Komputer</title>
    <style>
    table {
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid black;
        padding: 5px;
    }
    </style>
</head>
<body>
    <h2>Transformasi Linier dalam Grafika Komputer</h2>
    <h3>Titik-titik Objek Awal</h3>
    <table>
        <tr>
            <th>X</th>
            <th>Y</th>
        </tr>
        <?php foreach ($objek as $point) : ?>
        <tr>
            <td><?php echo $point[0]; ?></td>
            <td><?php echo $point[1]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <h3>Hasil Transformasi Translasi (dx=2, dy=3)</h3>
    <table>
        <tr>
            <th>X</th>
            <th>Y</th>
        </tr>
        <?php foreach ($translatedObjek as $point) : ?>
        <tr>
            <td><?php echo $point[0]; ?></td>
            <td><?php echo $point[1]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <h3>Hasil Transformasi Rotasi (45 derajat)</h3>
    <table>
        <tr>
            <th>X</th>
            <th>Y</th>
        </tr>
        <?php foreach ($rotatedObjek as $point) : ?>
        <tr>
            <td><?php echo $point[0]; ?></td>
            <td><?php echo $point[1]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <h3>Hasil Transformasi Penskalaan (sx=2, sy=2)</h3>
    <table>
        <tr>
            <th>X</th>
            <th>Y</th>
        </tr>
        <?php foreach ($scaledObjek as $point) : ?>
        <tr>
            <td><?php echo $point[0]; ?></td>
            <td><?php echo $point[1]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>