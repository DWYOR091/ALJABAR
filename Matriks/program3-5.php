<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transpose Matriks</title>
</head>
<body>
    <?php
    $matriks = [[1, 2, 3],[4, 5, 6]];
    echo "Matriks Awal<br>";
    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo $matriks[$i][$j];
        }
        echo "<br>";
    }
    echo "Matrik Transpose<br>";
    $matriksTranspose = [];
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 2; $j++) {
            echo $matriksTranspose[$i][$j] = $matriks[$j][$i];
        }
        echo "<br>";
    }
    ?>
</body>
</html>