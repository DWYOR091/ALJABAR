<!DOCTYPE html>
<html>
<head>
    <title>Penjumlahan Matriks</title>
</head>
<body>
    <h2>Penjumlahan Matriks</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h3>Matriks Pertama</h3>
        <?php
        $matriks1 = array();
        // Mengisi matriks pertama dari form input
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            for ($i = 0; $i < 2; $i++) {
                for ($j = 0; $j < 3; $j++) {
                    $matriks1[$i][$j] = $_POST['matriks1'][$i][$j];
                }
            }
        }
        // Menampilkan form input untuk matriks pertama
        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < 3; $j++) {
                echo '<input type="text" name="matriks1[' . $i . '][' . $j . ']" value="' .
                    ($matriks1[$i][$j] ?? '') . '"> ';
            }
            echo '<br>';
        }
        ?>
        <h3>Matriks Kedua</h3>
        <?php
        $matriks2 = array();
        // Mengisi matriks kedua dari form input
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            for ($i = 0; $i < 2; $i++) {
                for ($j = 0; $j < 3; $j++) {
                    $matriks2[$i][$j] = $_POST['matriks2'][$i][$j];
                }
            }
        }
        // Menampilkan form input untuk matriks kedua
        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < 3; $j++) {
                echo '<input type="text" name="matriks2[' . $i . '][' . $j . ']" value="' .
                    ($matriks2[$i][$j] ?? '') . '"> ';
            }
            echo '<br>';
        }
        ?>
        <br>
        <input type="submit" value="Hitung">
    </form>
    <?php
    // Fungsi untuk menjumlahkan dua matriks
    function tambahMatriks($matriks1, $matriks2)
    {
        $jumlahMatriks = array();
        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $jumlahMatriks[$i][$j] = $matriks1[$i][$j] + $matriks2[$i][$j];
            }
        }
        return $jumlahMatriks;
    }
    // Menampilkan hasil penjumlahan matriks jika formulir dikirim
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Memanggil fungsi untuk menjumlahkan dua matriks
        $hasilJumlah = tambahMatriks($matriks1, $matriks2);
        6;
        echo "<h3>Hasil Penjumlahan Matriks</h3>";
        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < 3; $j++) {
                echo $hasilJumlah[$i][$j] . " ";
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>