<?php
include '../../conn_db.php';

function getArticlesByCategory($category_id) {
    $sql = "SELECT id, name FROM articles WHERE article_cat_id = $category_id AND status = 1";
    return queryDatabase($sql);
}

function getArticleById($article_id) {
    $sql = "SELECT * FROM articles WHERE id = $article_id AND status = 1";
    $result = queryDatabase($sql);
    return !empty($result) ? $result[0] : null;
}
?>
