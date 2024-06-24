<?php
require_once '../../conn_db.php';
function searchProductsByName($name) {
    $sql = "SELECT * FROM products WHERE name LIKE '%$name%' AND status = 1";
    return queryDatabase($sql);
}

function getProductsByName($name) {
    if (empty($name)) {
        return [];
    }
    return searchProductsByName($name);
}
?>
