<?php
    include "../../conn_db.php";
    if(isset($_GET['orderID'])){
        $orderID = $_GET['orderID'];
        $sqlOrder = "select a.fullname, a.phonenumber as 'member_phone', a.address as 'member_address', a.email  as 'member_email',
                    b.*, c.name as 'order_method_name' from member a join orders b on a.id = b.member_id
                    join order_methods c on b.order_method_id = c.id
                    where b.id = $orderID";

        $sqlOrderProduct = "select products.name, products.image, order_detail.quantity, order_detail.price
                            from order_detail join products on order_detail.productId =  products.id
                            where order_detail.orderId = $orderID";

        $order = queryDatabase($sqlOrder)[0];
        $dataOrderProduct = queryDatabase($sqlOrderProduct);
        $statusOrderOld = $order['status'];
        $tong = 0;
        foreach($dataOrderProduct as $product){
            $tong += $product['price'];
        }
    }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết đơn hàng</title>
    <style>
         body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .infor, .product_list {
            margin-bottom: 20px;
        }
        .infor table, .product_list table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .infor th, .infor td, .product_list th, .product_list td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .infor th, .product_list th {
            background-color: #007bff;
            color: white;
        }
        .orderType {
            margin-bottom: 20px;
        }
        .status {
            margin-bottom: 20px;
        }
        .btnQuayLai {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-bottom: 20px;
            margin-left: auto;
        }
        .btnQuayLai:hover {
            background-color: #0056b3;
        }
        #btnUpdate {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        #btnUpdate:hover {
            background-color: #218838;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .list_products_detail td img{
            width: 100px; 
            height: auto;
            display: block;
            margin: 0 auto; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Chi tiết đơn hàng</h2>
            <a href="list_orders.php?orderType=<?php echo $order['status'];?>" class="btnQuayLai">Quay lại</a>
        </div>
        <div class="infor">
            <table>
                <thead>
                    <tr><th colspan="2">Thông tin người đặt hàng:</th></tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Họ tên:</td>
                        <td><?= $order['fullname'] ?></td>
                    </tr>
                    <tr>
                        <td>Điện thoại:</td>
                        <td><?= $order['member_phone'] ?></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ:</td>
                        <td><?= $order['member_address'] ?></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><?= $order['member_email'] ?></td>
                    </tr>
                    <tr>
                        <td>Note:</td>
                        <td><?= $order['note'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="infor">
            <table>
                <thead>
                    <tr><th colspan="2">Thông tin người nhận hàng:</th></tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Họ tên:</td>
                        <td><?= $order['receiver'] ?></td>
                    </tr>
                    <tr>
                        <td>Điện thoại:</td>
                        <td><?= $order['phone'] ?></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ:</td>
                        <td><?= $order['address'] ?></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><?= $order['email'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="orderType">
            <p><b>Phương thức thanh toán:</b> <span><?= $order['order_method_name'] ?></span></p>
        </div>
        <div class="product_list">
            <h4>Danh sách sản phẩm:</h4>
            <table class="tbl_sp">
                <thead>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Giá bán</th>
                    </tr>
                </thead>
                <tbody class="list_products_detail">
                    <?php
                    foreach ($dataOrderProduct as $row) {
                        echo "<tr>";
                        echo "<td>{$row['name']}</td>";
                        echo "<td><img src='../../images/{$row['image']}' alt='{$row['image']}'></td>";
                        echo "<td>{$row['quantity']}</td>";
                        echo "<td>{$row['price']}</td>";
                        echo "</tr>";
                    }
                    ?>
                    <tr>
                        <td colspan="4" style="text-align: right;">Tổng tiền: <?php echo $tong; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <form action="handleOrderDetail.php" method="post">
            <input type="hidden" name="orderID" id="orderID" value="<?php echo $orderID; ?>">
            <input type="hidden" name="statusOrderOld" id="statusOrderOld" value="<?php echo $statusOrderOld; ?>">
            <div class="status">
                <label for="statusOrder">Trạng thái đơn hàng: </label>
                <select name="statusOrder" id="statusOrder">
                    <option value="1" <?= $statusOrderOld == 1 ? 'selected' : '' ?>>Chưa xử lý</option>
                    <option value="2" <?= $statusOrderOld == 2 ? 'selected' : '' ?>>Đang xử lý</option>
                    <option value="3" <?= $statusOrderOld == 3 ? 'selected' : '' ?>>Đã xử lý</option>
                    <option value="4" <?= $statusOrderOld == 4 ? 'selected' : '' ?>>Huỷ</option>
                </select>
            </div>
            <input type="submit" name="btnUpdate" id="btnUpdate" value="Cập nhật trạng thái đơn hàng">
        </form>
    </div>
</body>
</html>
