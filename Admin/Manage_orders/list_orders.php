<?php
    include "../../conn_db.php";
    if(isset($_GET['orderType'])){
        $orderType = $_GET['orderType'];
        $sql = "select orders.id, member.fullname, member.address, member.phonenumber, member.email, orders.status
                from orders join member on orders.member_id = member.id
                where orders.status = " . $orderType;
        $data = queryDatabase($sql);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách đơn hàng</title>
    <style>
        /* body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            align-items: center;
        } */
        .container {
            width: 80%;
            /* margin-left: 220px; */
            max-width: 1200px;
            padding: 20px;
            margin-top: 10px; 
            display: flex;
            flex-direction: column;
            align-items: center;
            /* flex: 1; */
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .table-container {
            overflow-x: auto;
            max-height: 80vh;
        }
        .order-table {
            width: 100%;
            border-collapse: collapse;
        }
        .order-table th,
        .order-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .order-table th {
            background-color: #007bff;
            color: white;
        }
        .order-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .btn_detail{
            display: inline-block;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            padding: 5px;
            border-radius: 5px;
        }
        .btn_detail:hover{
           background-color: #218838;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        .back-button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .back-button a {
            color: white;
            text-decoration: none;
        }
        .back-button:hover {
            background-color: #0056b3;
        }

        
</style>
</head>
<body>
<?php include "../Admin_dashboard/Header_Sidebar.php"?>
<div class="container">
    <h1>Danh sách đơn hàng</h1> 
    <div class="table-container">
        <table border="1" class="order-table">
            <tr>
                <th>Họ tên</th> 
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
                <th>Email</th>
                <th>Tình trạng</th>
                <th></th>
            </tr>
            <?php
                foreach($data as $row){
                    echo "<tr>";
                    echo "<td>{$row['fullname']}</td>";
                    echo "<td>{$row['address']}</td>";
                    echo "<td>{$row['phonenumber']}</td>";
                    echo "<td>{$row['email']}</td>";
                    if($row['status'] == 1) echo "<td>Chưa xử lý</td>";
                    else if($row['status'] == 2) echo "<td>Đang xử lý</td>";
                    else if($row['status'] == 2) echo "<td>Đã xử lý</td>";
                    else echo "<td>Huỷ</td>";
                    echo "<td><a class='btn_detail' href='order_detail.php?orderID={$row['id']}'>Chi tiết</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
    <div class="button-container">
        <button class="back-button"><a href="order_categories.php">Quay lại</a></button>
    </div>
</div>
<?php include "../Admin_dashboard/Footer.php"?>
</body>
</html>



