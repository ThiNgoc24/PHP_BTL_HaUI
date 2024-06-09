<?php
    include "../../conn_db.php";
    if(isset($_GET['orderID'])){
        $orderID = $_GET['orderID'];
        $sqlOrder = "select orders.status, member.fullname, member.address, member.phonenumber, member.email
                    from orders left join member on orders.member_id = member.id
                    where orders.id = $orderID";

        $sqlOrderProduct = "select products.name, order_detail.quantity, order_detail.price
                            from order_detail join products on order_detail.productId =  products.id
                            where order_detail.orderId = $orderID";

        $dataOrder = queryDatabase($sqlOrder)[0];
        $dataOrderProduct = queryDatabase($sqlOrderProduct);
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
</style>
<div class="detail_order">
    <h2>Chi tiết đơn hàng</h2>
    <table border="0">
        <tr>
            <td><b>Họ tên: </b></td>
            <td><?php echo $dataOrder['fullname'];?></td>
        </tr>
        <tr>
            <td><b>Địa chỉ: </b></td>
            <td><?php echo $dataOrder['address']; ?></td>
        </tr>
        <tr>
            <td><b>Số điện thoại: </b></td>
            <td><?php echo $dataOrder['phonenumber']; ?></td>
        </tr>
        <tr>
            <td><b>Email: </b></td>
            <td><?php echo $dataOrder['email'];?></td>
        </tr>
    </table>
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
        <div class="status">
            <label for="statusOrder">Tình trạng: </label>
            <select name="statusOrder" id="statusOrder">
                <?php
                    $statusOrder = $dataOrder['status'];
                    if($statusOrder == 1){
                        echo '<option value="1" selected>Chưa xử lý</option>';
                        echo '<option value="2">Đang xử lý</option>';
                        echo '<option value="3">Đã xử lý</option>';
                        echo '<option value="4">Huỷ</option>';
                    }else if($statusOrder == 2){
                        echo '<option value="1" >Chưa xử lý</option>';
                        echo '<option value="2" selected>Đang xử lý</option>';
                        echo '<option value="3">Đã xử lý</option>';
                        echo '<option value="4">Huỷ</option>';
                    }else if($statusOrder == 3){
                        echo '<option value="1" >Chưa xử lý</option>';
                        echo '<option value="2">Đang xử lý</option>';
                        echo '<option value="3" selected>Đã xử lý</option>';
                        echo '<option value="4">Huỷ</option>';
                    }else{
                        echo '<option value="1" >Chưa xử lý</option>';
                        echo '<option value="2">Đang xử lý</option>';
                        echo '<option value="3">Đã xử lý</option>';
                        echo '<option value="4" selected>Huỷ</option>';
                    }
                ?>
            </select>
        </div>
        <input type="submit" name="btnUpdate" id="btnUpdate" value="Cập nhật trạng thái đơn hàng">
    </form>
    <button><a href="list_orders.php">Quay lại</a></button>
</div>