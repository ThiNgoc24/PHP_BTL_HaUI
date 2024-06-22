<?php
include '../../conn_db.php';

function getCategories() {
    $sql = "SELECT id, name FROM article_categories WHERE status = 1";
    return queryDatabase($sql);
}
?>
