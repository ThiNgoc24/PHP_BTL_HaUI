
<?php
// Include file kết nối đến cơ sở dữ liệu
include "../../conn_db.php";



function getBestSellingProducts(){
    $sql = "SELECT p.name AS productName, SUM(od.quantity) AS totalQuantity, SUM(od.quantity * od.price) AS totalRevenue
            FROM order_detail od
            INNER JOIN products p ON od.productId = p.id
            GROUP BY od.productId
            ORDER BY totalQuantity DESC";

    return queryDatabase($sql);
}


?>
