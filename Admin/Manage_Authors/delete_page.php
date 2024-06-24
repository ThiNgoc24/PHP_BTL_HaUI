<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác nhận xoá</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            font-weight: bold;
        }
        input[type="text"], input[type="hidden"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #ff4d4d;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            display: block;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #e60000;
        }
        .back-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #333;
            text-decoration: none;
        }
        .back-link:hover {
            color: #e60000;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php 
    require '../../conn_db.php';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $getdt = "SELECT * FROM authors WHERE id='$id'";
        $result = queryDatabase($getdt);

        if (count($result) > 0) {
            $row = $result[0];
        } else {
            die("Không tìm thấy tác giả với ID: $id");
        }
    }
    ?>
    <div class="container">
        <h2>Bạn có chắc chắn muốn xoá?</h2>
        <form action="BTriTacGia_functions.php" method="POST">
            <input type="hidden" name="idTG" value="<?php echo $row['id']; ?>">
            <p>Mã tác giả:</p>
            <input type="text" name="idTGDisplay" value="<?php echo $row['id']; ?>" readonly>
            <p>Tên tác giả:</p>
            <input type="text" name="nameTG" value="<?php echo $row['name']; ?>" readonly>
            <input type="submit" name="delete" value="Chắc chắn">
        </form>
        <a class="back-link" href="list_page.php">Huỷ bỏ</a>
    </div>
</body>
</html>
