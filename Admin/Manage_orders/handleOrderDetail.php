<?php
    include "../../conn_db.php";
    if(isset($_POST['btnUpdate'])){
        $orderID = $_POST['orderID'];
        $status = $_POST['statusOrder'];
        $sql = "update orders set status = $status where id = $orderID";
        if(executeQuery($sql)){
            echo "Cập nhật đơn hàng thành công";
            header("location:list_orders.php"); //CHƯA OK
        }else{
            echo "Có lỗi xảy ra. Không thể cập nhật";
        }
    }
?>