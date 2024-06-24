<?php
function addCategory($name, $status) {
    $sql = "INSERT INTO categories (name, status) VALUES ('$name', '$status')";
    return executeQuery($sql);
}

function editCategory($id, $name, $status) {
    $sql = "UPDATE categories SET name='$name', status='$status' WHERE id='$id'";
    return executeQuery($sql);
}

function deleteCategory($id) {
    $sql = "DELETE FROM categories WHERE id='$id'";
    return executeQuery($sql);
}

function getCategoryById($id) {
    $sql = "SELECT * FROM categories WHERE id='$id'";
    return queryDatabase($sql);
}

function getAllCategories() {
    $sql = "SELECT id, name, status FROM categories";
    return queryDatabase($sql);
}
?>
