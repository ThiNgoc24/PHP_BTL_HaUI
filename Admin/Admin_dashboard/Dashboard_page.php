<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Trang quản trị</title>
    <!-- Thư viện ApexCharts để vẽ biểu đồ -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <style>
        /* CSS để style biểu đồ */
        #chart {
            max-width: 800px;
            margin-left: 400px;
            
        }
        .abovechart {
            max-width: 800px;
            margin-left: 400px;
        }
        .abovechart a {
            width: 100px;
            text-decoration: none;
            display: block;
            padding: 8px 12px;
            font-size: 20px;
            font-weight: bold;
            margin-left: -10px;
            margin-top: 20px;
            transition: background-color 0.3s, color 0.3s;
        }
        .abovechart a:hover {
            background-color: #3498db; /* Màu nền khi hover */
            color: #fff; /* Màu chữ khi hover */
            border-radius: 5px; 
        }
        .apexcharts-xaxis-text,
        .apexcharts-yaxis-text,
        .apexcharts-datalabel,
        .apexcharts-legend-text {
            fill: #000 !important; /* Thiết lập màu chữ cho nhãn và các số liệu */
            font-size: 10px;
        }

    </style>
</head>
<body>
    <?php include "Header_Sidebar.php"?>
    <div class="abovechart">
        <a href="Dashboard_page.php">Trang chủ</a>
        <h1 style='margin-left:250px; font-size:30px; color:#007bff'>Doanh thu các sản phẩm</h1>
    </div>
    <div id="chart"></div>
    <?php include "Footer.php"?>

    <?php
    include 'Dashboard_functions.php';
    // Lấy dữ liệu về sản phẩm bán chạy nhất và doanh thu
    $productsData = getBestSellingProducts();

    // Chuyển đổi dữ liệu sang JSON để sử dụng trong biểu đồ
    $labels = [];
    $totalQuantities = [];
    $totalRevenues = [];

    foreach ($productsData as $product) {
        $labels[] = $product['productName'];
        $totalQuantities[] = (int) $product['totalQuantity'];
        $totalRevenues[] = (float) $product['totalRevenue'];
    }

    $chartData = [
        'labels' => $labels,
        'totalQuantities' => $totalQuantities,
        'totalRevenues' => $totalRevenues
    ];

    ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        // Lưu trữ vị trí ban đầu của #chart khi tải trang
        var chartElement = document.querySelector("#chart");
        var chartDefaultPosition = chartElement.getBoundingClientRect().top + window.pageYOffset;

        // Lưu trữ chiều cao của #chart để restore sau khi render lại
        var chartHeight = chartElement.clientHeight;

            // Tạo biểu đồ ApexCharts
            var options = {
                chart: {
                    type: 'bar',
                    height: 420,
                    stacked: true
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                    },
                },
                series: [{
                    name: 'Tổng số lượng',
                    data: <?php echo json_encode($chartData['totalQuantities']); ?>
                }, {
                    name: 'Tổng doanh thu',
                    data: <?php echo json_encode($chartData['totalRevenues']); ?>
                }],
                xaxis: {
                    categories: <?php echo json_encode($chartData['labels']); ?>
                },
                fill: {
                    opacity: 1
                },
                legend: {
                    position: 'top'
                }
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();

       
        });
    </script>
    
</body>
</html>
