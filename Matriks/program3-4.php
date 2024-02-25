<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skalar Matriks</title>
</head>
<body>
    <h2>Perkalian Skalar</h2>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="">
            <input type="text" name="a1" value="<?php echo $_POST['a1'] ?? ''; ?>">
            <input type="text" name="a2" value="<?php echo $_POST['a2'] ?? ''; ?>"><br>
            <input type="text" name="a3" value="<?php echo $_POST['a3'] ?? ''; ?>">
            <input type="text" name="a4" value="<?php echo $_POST['a4'] ?? ''; ?>"><br><br>
            <label for="">Masukkan Skalar K</label><br>
            <input type="text" name="K" value="<?php echo $_POST['K'] ?? ''; ?>"><br><br>
            <button type="submit">Hitung</button>
        </label>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $matriks = [
            [
                $a1 = $_POST['a1'],
                $a2 = $_POST['a2']
            ],
            [
                $a3 = $_POST['a3'],
                $a4 = $_POST['a4']
            ]
        ];
        $k = $_POST['K'];
        echo "<br>Hasil perkalian skalar: <br>";
        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < 2; $j++) {
                echo $matriks[$i][$j] * $k . " ";
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>
