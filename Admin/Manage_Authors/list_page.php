<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tác giả</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .add-link {
            float: right;
            margin-bottom: 10px;
        }
        .add-link a {
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
        }
        .add-link a:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            table-layout: auto;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        table th {
            background-color: #f2f2f2;
            color: #333;
        }
        table td {
            background-color: #fff;
            color: #666;
        }
        table td a {
            text-decoration: none;
            margin-right: 5px;
            display: inline-block;
        }
        table td img {
            max-width: 100px;
            max-height: 100px;
            border-radius: 4px;
        }
        .edit-button {
            background-color: #28a745;
            color: #fff;
            padding: 5px 10px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
        }
        .edit-button:hover {
            background-color: #218838;
        }
        .delete-button {
            background-color: #d9534f;
            color: #fff;
            padding: 5px 10px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
        }
        .delete-button:hover {
            background-color: #c9302c;
        }
        .actions {
            width: 120px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php 
    require '../../conn_db.php';
    $getdt = "SELECT * FROM authors";
    $result = queryDatabase($getdt);
    ?>
    <div class="container">
        <h2>Danh sách tác giả</h2>
        <div class="add-link">
            <a href="add_page.php">Thêm thông tin mới</a>
        </div>
        <table>
            <tr>
                <th>Mã</th>
                <th>Tên tác giả</th>
                <th>Hình ảnh</th>
                <th>Trạng thái</th>
                <th class="actions">Xử lý</th>
            </tr>
            <?php foreach($result as $row) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><img src="../../images/authors/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" class="thumbnail"></td>
                    <td><?php echo $row['status']; ?></td>
                    <td class="actions">
                        <a href="edit_page.php?id=<?php echo $row['id']; ?>" class="edit-button">Sửa</a>
                        <a href="delete_page.php?id=<?php echo $row['id']; ?>" class="delete-button">Xóa</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tác giả</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .add-link {
            float: right;
            margin-bottom: 10px;
        }
        .add-link a {
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
        }
        .add-link a:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        table th {
            background-color: #f2f2f2;
            color: #333;
        }
        table td {
            background-color: #fff;
            color: #666;
        }
        table td a {
            text-decoration: none;
            color: #007bff;
            margin-right: 10px;
        }
        table td a:hover {
            text-decoration: underline;
        }
        table td img {
            max-width: 100px;
            max-height: 100px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <?php 
    // require '../../conn_db.php';
    // $getdt = "SELECT * FROM authors";
    // $result = queryDatabase($getdt);
    // ?>
    <div class="container">
        <h2>Danh sách tác giả</h2>
        <div class="add-link">
            <a href="add_page.php">Thêm thông tin mới</a>
        </div>
        <table>
            <tr>
                <th>Mã</th>
                <th>Tên tác giả</th>
                <th>Hình ảnh</th>
                <th>Trạng thái</th>
                <th>Xử lý</th>
            </tr>
            <?php foreach($result as $row) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><img src="../../images/authors/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" class="thumbnail"></td>
                    <td><?php echo $row['status']; ?></td>
                    <td>
                        <a href="edit_page.php?id=<?php echo $row['id']; ?>">Sửa</a> ||
                        <a href="delete_page.php?id=<?php echo $row['id']; ?>">Xóa</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html> -->
