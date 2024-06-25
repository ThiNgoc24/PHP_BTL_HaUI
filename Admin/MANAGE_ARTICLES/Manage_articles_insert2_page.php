<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Thêm bài viết mới</title>
    <style>
        /* CSS cho phần nội dung */
        .container {
            width: 70%;
            margin-left: 300px; 
            margin-top: 30px; 
        }

        .container h1 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type=text], 
        .form-group textarea, 
        .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 13px;
        }

        .form-group select {
            height: 36px; 
        }

        .form-group textarea {
            height: 100px; 
        }

        #btn_thembaiviet {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        #btn_thembaiviet:hover {
            background-color: #45a049;
        }
        #btn_huythemmoi {
            background-color: #d9534f;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        .add-button {
            margin-left: 260px; 
            margin-top: 20px;
        }

        .add-button a {
            text-decoration: none;
            display: inline-block;
            padding: 8px 12px;
            font-size: 18px;
            font-weight: bold;
            color: #fff;
            background-color: #3498db;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .add-button a:hover {
            background-color: #297fb8;
        }

        .container .trangchu {
            width: 100px;
            text-decoration: none;
            display: block;
            padding: 8px 12px;
            font-size: 20px;
            font-weight: bold;
            margin-left: -10px;
            margin-top: 20px;
            transition: background-color 0.3s, color 0.3s;
        }
        .container .trangchu:hover{
            background-color: #3498db; 
            color: #fff; 
            border-radius: 5px; 
        }

    </style>
</head>
<body>
    <?php include "../Admin_dashboard/Header_Sidebar.php"?>
    <div class="container">
    <a href="../MANAGE_INDEX/Manage_index_page.php"  class="trangchu">Trang chủ</a>
        <h1 style='margin-left:350px; font-size:30px; color:#007bff'>Thêm bài viết mới</h1>
        <form action="Manage_articles_functions.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Tiêu đề:</label>
                <input type="text" id="name" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" required>
                <?php if (!empty($error_message)) { ?>
                    <span style="color: red;"><?php echo $error_message; ?></span><br>
                <?php } ?><br>
                <?php if (!empty($error_message1)) { ?>
                    <span style="color: red;"><?php echo $error_message1; ?></span><br>
                <?php } ?><br>
            </div>

            <div class="form-group">
                <label for="summary">Tóm tắt:</label>
                <textarea id="summary" name="summary"  required><?php echo htmlspecialchars($summary); ?></textarea>
            </div>
            <div class="form-group">
                <label for="content">Nội dung:</label>
                <textarea id="content" name="content"  required><?php echo htmlspecialchars($content); ?></textarea>
            </div>
            <div class="form-group">
                <label for="article_cat_id">Danh mục:</label>
                <select id="article_cat_id" name="article_cat_id" required>
                    <option value="1" <?php if ($article_cat_id == '1') echo 'selected'; ?>>Danh mục 1</option>
                    <option value="2" <?php if ($article_cat_id == '2') echo 'selected'; ?>>Danh mục 2</option>
                    <option value="3" <?php if ($article_cat_id == '3') echo 'selected'; ?>>Danh mục 3</option>
                    <option value="4" <?php if ($article_cat_id == '4') echo 'selected'; ?>>Danh mục 4</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Ảnh đại diện:</label>
                <input type="file" id="image" name="image" accept="image/*">
            </div>
            <div class="form-group">
                <label for="status">Trạng thái:</label>
                <select id="status" name="status" required>
                    <option value="0" <?php if ($status == '0') echo 'selected'; ?>>Ẩn</option>
                    <option value="1" <?php if ($status == '1') echo 'selected'; ?>>Hiển thị</option>
                </select>
            </div>
            <div class="form-group">
                <label for="youtube">Link video YouTube:</label>
                <input type="text" id="youtube" name="youtube" value="<?php echo htmlspecialchars($youtube); ?>">
            </div>
            <div class="form-group">
                <label for="audio">Link audio:</label>
                <input type="text" id="audio" name="audio" value="<?php echo htmlspecialchars($audio); ?>">
            </div>
            <button type="submit" name="btn_thembaiviet" id="btn_thembaiviet">Thêm bài viết</button>
            <button type="button" id="btn_huythemmoi" name ="btn_huythemmoi" >Hủy thêm mới</button>
        </form>
    </div>
    <script>
        document.getElementById('btn_huythemmoi').addEventListener('click', function() {
            // Hiển thị hộp thoại xác nhận
            var result = confirm("Bạn có chắc chắn muốn hủy thêm mới?");
            // Nếu người dùng đồng ý (OK) thì chuyển hướng về trang index.php
            if (result) {
                window.location.href = 'Manage_articles_page.php';
            }
            // Ngược lại, không làm gì cả
        });
    </script>
    <?php include "../Admin_dashboard/Footer.php"?>

</body>
</html>
