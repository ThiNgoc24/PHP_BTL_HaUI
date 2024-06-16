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
<style>
    th, td{
        padding: 20px;
    }
</style>

<table border="1">
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
            echo "<td><a href='order_detail.php?orderID={$row['id']}'>Chi tiết</a></td>";
            echo "</tr>";
        }
    ?>
</table>
<button><a href="order_categories.php">Quay lại</a></button>