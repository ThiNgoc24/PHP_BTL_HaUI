<?php
include '../conn_db.php';

//edit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $author_id = $_POST['author_id'];
    $cat_id = $_POST['cat_id'];
    $description = $_POST['description'];
    $product_quantity = $_POST['product_quantity'];

    // Handle image upload
    if (!empty($_FILES['image']['name'])) {
        /* $image = $_FILES['image']['name'];
        $target = "images/" . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target); */
        $image = $_FILES['image']['name'];
        $target_dir = "../images/";
        $target_file = $target_dir . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
    } else {
        $image_sql = "SELECT image FROM products WHERE id = ?";
        $stmt = $conn->prepare($image_sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $product = $result->fetch_assoc();
        $image = $product['image'];
    }

    $sql = "UPDATE products SET name = ?, price = ?, author_id = ?, cat_id = ?, image = ?, description = ?, product_quantity = ? 
            WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sdiissii", $name, $price, $author_id, $cat_id, $image, $description, $product_quantity, $id);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Error: " . $stmt->error;
    }
}

//add
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $author_id = $_POST['author_id'];
    $cat_id = $_POST['cat_id'];
    $description = $_POST['description'];
    $product_quantity = $_POST['product_quantity'];

    // Handle image upload
    /* $image = $_FILES['image']['name'];
    $target = "images/" . basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target); */
    $image = $_FILES['image']['name'];
    $target_dir = "../images/";
    $target_file = $target_dir . basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

    $sql = "INSERT INTO products (name, price, author_id, cat_id, image, description, product_quantity) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sdiissi", $name, $price, $author_id, $cat_id, $image, $description, $product_quantity);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Error: " . $stmt->error;
    }
}

//delete
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "DELETE FROM products WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Error: " . $stmt->error;
    }
}

$conn->close();
?>
