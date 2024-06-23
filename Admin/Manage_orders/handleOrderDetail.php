<?php
    include "../../conn_db.php";
    if(isset($_POST['btnUpdate'])){
        $orderID = $_POST['orderID'];
        $statusOrderOld = $_POST['statusOrderOld'];
        $statusOrder = $_POST['statusOrder'];
        $sql = "update orders set status = $statusOrder where id = $orderID";
        if(executeQuery($sql)){
            echo "Cập nhật đơn hàng thành công";
            header("location:list_orders.php?orderType={$statusOrderOld}"); 
        }else{
            echo "Có lỗi xảy ra. Không thể cập nhật";
        }
    }
?>