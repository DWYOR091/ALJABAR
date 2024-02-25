<!DOCTYPE html>
<html>

<head>
    <title>Regresi Linear dengan Chart.js</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div style="width: 300px; height: 500px;">
        <canvas id="regressionChart"></canvas>
    </div>
    <script>
    var ctx = document.getElementById('regressionChart').getContext('2d');
    ctx.canvas.width = 100;
    ctx.canvas.height = 100;

    var hours_studied = [2, 3, 4, 5, 6, 7, 8];
    var exam_scores = [65, 68, 73, 80, 85, 88, 92];

    var data = {
        labels: hours_studied,
        datasets: [{
            label: 'Data',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            data: exam_scores,
            pointRadius: 2,
            pointHoverRadius: 3,
            showLine: false
        }, {
            label: 'Regresi Linear',
            borderColor: 'rgba(255, 99, 132, 1)',
            data: [],
            fill: false,
            type: 'line'
        }]
    };

    var config = {
        type: 'scatter',
        data: data,
        options: {
            scales: {
                x: {
                    type: 'linear',
                    position: 'bottom'
                },
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    var myChart = new Chart(ctx, config);

    var coefficients = regression.linear(hours_studied.map((x) => [x]), exam_scores);
    var slope = coefficients.equation[0];
    var intercept = coefficients.equation[1];

    for (var i = 0; i < hours_studied.length; i++) {
        var predicted_score = slope * hours_studied[i] + intercept;
        myChart.data.datasets[1].data.push({
            x: hours_studied[i],
            y: predicted_score
        });
    }

    myChart.update();
    </script>
</body>

</html>