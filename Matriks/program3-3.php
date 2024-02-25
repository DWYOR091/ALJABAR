<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriks Perkalian</title>
</head>
<body>
    <h1>Perkalian Matriks</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="matriks">Matriks Pertama: <br>
            <input type="text" name="a1">
            <input type="text" name="a2"><br>
            <input type="text" name="a3">
            <input type="text" name="a4">
        </label><br><br>
        <label for="matriks">Matriks Kedua: <br>
            <input type="text" name="b1">
            <input type="text" name="b2"><br>
            <input type="text" name="b3">
            <input type="text" name="b4">
        </label><br><br>
        <button type="submit">Hitung</button>
    </form>

    <?php

    function kali($matriks1, $matriks2)
    {
        $hasilPerkalian = [];
        $hasilPerkalian[0][0] = $matriks1[0][0] * $matriks2[0][0] + $matriks1[0][1] * $matriks2[1][0];
        $hasilPerkalian[0][1] = $matriks1[0][0] * $matriks2[0][1] + $matriks1[0][1] * $matriks2[1][1];
        $hasilPerkalian[1][0] = $matriks1[1][0] * $matriks2[0][0] + $matriks1[1][1] * $matriks2[1][0];
        $hasilPerkalian[1][1] = $matriks1[1][0] * $matriks2[0][1] + $matriks1[1][1] * $matriks2[1][1];

        return $hasilPerkalian;
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $matriks1 = [
            [
                $_POST['a1'],$_POST['a2'],
            ],
            [
                $_POST['a3'],$_POST['a4'],
            ]
        ];
        $matriks2 = [
            [
                $_POST['b1'],$_POST['b2']
            ],
            [
                $_POST['b3'],$_POST['b4']
            ]
        ];

        echo "<br>Matriks Pertama:<br>";
        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < 2; $j++) {
                echo $matriks1[$i][$j];
            }
            echo '<br>';
        }
        
        echo "<br>Matriks Kedua: <br>";
        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < 2; $j++) {
                echo $matriks2[$i][$j];
            }
            echo "<br>";
        }

        $hasil = kali($matriks1, $matriks2);
        echo "<br>Hasil:<br>";
        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < 2; $j++) {
                echo $hasil[$i][$j] . " ";
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>