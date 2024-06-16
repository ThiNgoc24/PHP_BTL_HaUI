<?php
    include "../../conn_db.php";
    if(isset($_GET['orderID'])){
        $orderID = $_GET['orderID'];
        $sqlOrder = "select a.fullname, a.phonenumber as 'member_phone', a.address as 'member_address', a.email  as 'member_email',
                    b.*, c.name as 'order_method_name' from member a join orders b on a.id = b.member_id
                    join order_methods c on b.order_method_id = c.id
                    where b.id = $orderID";

        $sqlOrderProduct = "select products.name, order_detail.quantity, order_detail.price
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
<style>
    .tbl_sp td, th{
        padding: 20px;
    }

    .detail_order{
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .detail_order .infor{
        display: flex;
    }

    /* .detail_order .orderType{
        display: flex;
        justify-content: left;
    } */

    .detail_order .infor table{
        margin-left: 50px;
        margin-right: 50px;
    }

    #statusOrder{
        margin: 20px;
    }

    #btnUpdate{
        padding: 8px;
    }

    .btnQuayLai{
        padding: 8px;
    }
</style>
<button class="btnQuayLai"><a href="list_orders.php?orderType=<?php echo $order['status'];?>">Quay lại</a></button>
<div class="detail_order">
    <h2>Chi tiết đơn hàng</h2>
    <div class="infor">
        <table>
            <tr><th colspan="2">Thông tin người đặt hàng: </th></tr>    
            <tbody>
                <tr>
                    <td>Họ tên: </td>
                    <td><?= $order['fullname'] ?></td>
                </tr>
                <tr>
                    <td>Điện thoại: </td>
                    <td><?= $order['member_phone'] ?></td>
                </tr>
                <tr>
                    <td>Địa chỉ: </td>
                    <td><?= $order['member_address'] ?></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><?= $order['member_email'] ?></td>
                </tr>
                <tr>
                    <td>Note: </td>
                    <td><?= $order['note'] ?></td>
                </tr>
            </tbody>
        </table>
        
        <table class="table table-bordered">
            <tr><th colspan="2">Thông tin người nhận hàng: </th></tr>    
            <tbody>
                <tr>
                    <td>Họ tên: </td>
                    <td><?= $order['receiver'] ?></td>
                </tr>
                <tr>
                    <td>Điện thoại: </td>
                    <td><?= $order['phone'] ?></td>
                </tr>
                <tr>
                    <td>Địa chỉ: </td>
                    <td><?= $order['address'] ?></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><?= $order['email'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="orderType">
        <p><b>Phương thức thanh toán:</b><span><?= $order['order_method_name']?></span></p>
    </div>
    <div class="product_list">
        <h4>Danh sách sản phẩm:</h4>
        <table class="tbl_sp" border="1">
            <tr>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá bán</th>
            </tr>
            <?php
                foreach($dataOrderProduct as $row){
                    echo "<tr>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td>{$row['quantity']}</td>";
                    echo "<td>{$row['price']}</td>";
                    echo "</tr>";
                }
            ?>
            <tr>
                <td colspan="3">Tổng tiền: <?php echo $tong;?></td>
            </tr>
        </table>
        <form action="handleOrderDetail.php" method="post">
            <input type="hidden" name="orderID" id="orderID" value="<?php echo $orderID;?>">
            <input type="hidden" name="statusOrderOld" id="statusOrderOld" value="<?php echo $statusOrderOld;?>">
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
</div>