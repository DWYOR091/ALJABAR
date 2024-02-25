<!DOCTYPE html>
<html>
<head>
    <title>Form Input Matriks</title>
</head>
<body>
    <h2>Form Input Matriks</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <?php
        $size = 3; // Ukuran matriks 3x3
        // Menginisialisasi matriks dengan nilai kosong
        $matriks = array();
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                $matriks[$i][$j] = '';
            }
        }
        // Mengisi matriks dengan data dari form input
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            for ($i = 0; $i < $size; $i++) {
                for ($j = 0; $j < $size; $j++) {
                    $matriks[$i][$j] = $_POST['elemen'][$i][$j];
                };
            };
        };
        // Menampilkan form input matriks
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                echo '<input type="text" name="elemen[' . $i . '][' . $j
                .']" value="' . $matriks[$i][$j] . '"> ';
            }
            echo '<br>';
        }
        ?>
        <br>
        <input type="submit" value="Submit">
    </form>
    <br>
    <?php
    // Menampilkan output matriks 3x3
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<h2>Output Matriks</h2>';
        echo '<table>';
        for ($i = 0; $i < $size; $i++) {
            echo '<tr>';
            for ($j = 0; $j < $size; $j++) {
                echo '<td>' . $matriks[$i][$j] . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
    ?>
</body>
</html>