<?php
// Fungsi untuk menghitung FFT dari array input
function fft($input)
{
    $N = count($input);
    if ($N <= 1) {
        return $input;
    }
    $even = [];
    $odd = [];
    for ($i = 0; $i < $N; $i += 2) {
        $even[] = $input[$i];
        $odd[] = $input[$i + 1];
    }
    $evenResult = fft($even);
    $oddResult = fft($odd);
    $output = array_fill(0, $N, 0);
    for ($k = 0; $k < $N / 2; $k++) {
        $t = exp(-2 * pi() * $k / $N) * $oddResult[$k];
        $output[$k] = $evenResult[$k] + $t;
        $output[$k + $N / 2] = $evenResult[$k] - $t;
    }
    return $output;
}
// Data input (contoh sinyal)
$dataInput = [];
for ($i = 0; $i < 8; $i++) {
    $dataInput[] = rand(1, 10); // Menghasilkan nilai acak antara 1 dan 10
}

// Hitung FFT dari data input
$fftResult = fft($dataInput);
// Tampilkan hasil FFT
echo "Data Input: " . implode(', ', $dataInput) . "<br>";
echo "Hasil FFT: " . implode(', ', $fftResult) . "<br>";
