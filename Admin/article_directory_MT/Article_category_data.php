<?php
function addCategory($name, $status) {
    $sql = "INSERT INTO article_categories (name, status) VALUES ('$name', '$status')";
    return executeQuery($sql);
}

function editCategory($id, $name, $status) {
    $sql = "UPDATE article_categories SET name='$name', status='$status' WHERE id='$id'";
    return executeQuery($sql);
}

function deleteCategory($id) {
    $sql = "DELETE FROM article_categories WHERE id='$id'";
    return executeQuery($sql);
}

function getCategoryById($id) {
    $sql = "SELECT * FROM article_categories WHERE id='$id'";
    return queryDatabase($sql);
}

function getAllCategories() {
    $sql = "SELECT id, name, status FROM article_categories";
    return queryDatabase($sql);
}
?>
