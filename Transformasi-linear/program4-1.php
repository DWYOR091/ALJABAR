<?php
    function transofrmasiLinear($matriks,$vektor){
        $hasilTransformasi = [];
        $hasilTransformasi[0] = $matriks[0][0] * $vektor[0] + $matriks[0][1] * $vektor[1]; 
        $hasilTransformasi[1]= $matriks[0][1] * $vektor[0] + $matriks[1][1] * $vektor[1];
        return $hasilTransformasi;
    }
    $matriksA = [
      [2,1],
      [1,-1]  
    ];
    $vektorV = [3,4];
    $hasilTransformasi = transofrmasiLinear($matriksA,$vektorV);

    echo "Matriks A: <br>";
    for ($i=0; $i < 2; $i++) { 
        for ($j=0; $j < 2; $j++) { 
            echo $matriksA[$i][$j];
        }
        echo "<br>";
    }

    echo "Vektor (3,4):<br>";
    for ($i=0; $i < 2; $i++) { 
        echo "|".$vektorV[$i]."|";
        echo "<br>";
    }

    echo "Hasil Transformasi A * (3,4):<br>";
    echo "|".$hasilTransformasi[0]."| <br>";
    echo "|".$hasilTransformasi[1]."|";
?>