<!DOCTYPE html>
<html>

<head>
    <title>Transformasi Linier dalam Grafika Komputer</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <h2>Transformasi Linier dalam Grafika Komputer</h2>

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
        [2, 2],
        [3, 3],
        [4, 4]
    ];
    // Transformasi translasi
    $translatedObjek = translasi($objek, 2, 3);
    // Transformasi rotasi
    $rotatedObjek = rotasi($objek, 45);
    // Transformasi penskalaan
    $scaledObjek = penskalaan($objek, 2, 2);
    ?>
    <h2>Titik-titik Awal</h2>
    <canvas id="myChart" width="300" height="300"></canvas>
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'scatter',
        data: {
            datasets: [{
                label: 'Titik-titik',
                data: <?php echo json_encode($objek); ?>,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: false,
            scales: {
                x: {
                    beginAtZero: true
                },
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>
    <h2>Hasil Transformasi Translasi (dx=2, dy=3)</h2>
    <canvas id="myChart2" width="300" height="300"></canvas>
    <script>
    var ctx = document.getElementById('myChart2').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'scatter',
        data: {
            datasets: [{
                label: 'Titik-titik',
                data: <?php echo json_encode($translatedObjek); ?>,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: false,
            scales: {
                x: {
                    beginAtZero: true
                },
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>
    <h2>Titik-titik hasil rotasi 45 derajat</h2>
    <canvas id="myChart3" width="300" height="300"></canvas>
    <script>
    var ctx = document.getElementById('myChart3').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'scatter',
        data: {
            datasets: [{
                label: 'Titik-titik',
                data: <?php echo json_encode($rotatedObjek); ?>,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: false,
            scales: {
                x: {
                    beginAtZero: true
                },
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>
    <h2>Hasil Transformasi Penskalaan (sx=2, sy=2)</h2>
    <canvas id="myChart4" width="300" height="300"></canvas>
    <script>
    var ctx = document.getElementById('myChart4').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'scatter',
        data: {
            datasets: [{
                label: 'Titik-titik',
                data: <?php echo json_encode($scaledObjek); ?>,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: false,
            scales: {
                x: {
                    beginAtZero: true
                },
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>
</body>

</html>