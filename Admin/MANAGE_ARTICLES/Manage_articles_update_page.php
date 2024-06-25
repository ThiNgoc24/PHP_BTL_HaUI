<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cập nhật bài viết</title>
    <style>
        /* CSS cho phần nội dung */
        .container {
            width: 70%;
            margin-left: 300px; /* Điều chỉnh khoảng cách của nội dung so với sidebar */
            margin-top: 30px; /* Khoảng cách phía trên nội dung */
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
            height: 36px; /* Để đảm bảo chiều cao của select là 36px */
        }

        .form-group textarea {
            height: 100px; /* Để đảm bảo chiều cao của textarea là 100px */
        }

        #btn_capnhat {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        #btn_capnhat:hover {
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
            margin-left: 260px; /* Điều chỉnh vị trí của nút Thêm bài viết */
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
            background-color: #3498db; /* Màu nền khi hover */
            color: #fff; /* Màu chữ khi hover */
            border-radius: 5px; 
        }
        .button{
            margin-left:330px;
        }
    </style>
</head>
<?php
require_once '../../conn_db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Lấy thông tin bài viết hiện tại từ CSDL
    $sql = "SELECT * FROM articles WHERE id = $id";
    $current_article = queryDatabase($sql);

    if (empty($current_article)) {
        die('Bài viết không tồn tại.');
    }

    $current_article = $current_article[0];
}
?>
<body>
    <?php include "../Admin_dashboard/Header_Sidebar.php"?>
    <div class="container">
    <a href="../MANAGE_INDEX/Manage_index_page.php" class="trangchu">Trang chủ</a>
        <h1 style='margin-left:350px; font-size:30px; color:#007bff'>Cập nhật bài viết</h1>
        <form action="Manage_articles_functions.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo isset($current_article['id']) ? htmlspecialchars($current_article['id']) : ''; ?>">
            <div class="form-group">
                <label for="name">Tiêu đề:</label>
                <input type="text" id="name" name="name" value ="<?php echo $current_article['name'];?>" required>
                <?php if (!empty($error_message1)) { ?>
            <span style="color: red;" class="error-message1"><?php echo "Có lỗi"; ?></span>
        <?php } ?>
            </div>
            <div class="form-group">
                <label for="summary">Tóm tắt:</label>
                <textarea id="summary" name="summary" required><?php echo htmlspecialchars($current_article['summary']); ?></textarea>
            </div>
            <div class="form-group">
                <label for="content">Nội dung:</label>
                <textarea id="content" name="content" required><?php echo htmlspecialchars($current_article['content']); ?></textarea>
            </div>
            <div class="form-group">
                <label for="article_cat_id">Danh mục:</label>
                <select id="article_cat_id" name="article_cat_id"  required>
                    <option value="1" <?php if ($current_article['article_cat_id'] === '1') echo 'selected'; ?>>Danh mục 1</option>
                    <option value="2" <?php if ($current_article['article_cat_id'] === '2') echo 'selected'; ?>>Danh mục 2</option>
                    <option value="3" <?php if ($current_article['article_cat_id'] === '3') echo 'selected'; ?>>Danh mục 3</option>
                    <option value="4" <?php if ($current_article['article_cat_id'] === '4') echo 'selected'; ?>>Danh mục 4</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Ảnh đại diện:</label>
                <input type="file" id="image" name="image" accept="image/*" >
                <?php if (!empty($current_article['image'])): ?>
                     <img src="../../images/<?php echo $current_article['image']; ?>" alt="Current Image" style="max-width: 200px; margin-top: 10px;">
                     <?php endif; ?>
            </div>
            <div class="form-group">
         
                <label for="status">Trạng thái:</label>
                <select id="status" name="status" value ="<?php echo $current_article['status'];?>" required>
                    <option value="0" <?php if ($current_article['status'] === '0') echo 'selected'; ?>>Ẩn</option>
                    <option value="1" <?php if ($current_article['status'] === '2') echo 'selected'; ?>>Hiển Thị</option>
                </select>
            </div>
            <div class="form-group">
                <label for="youtube">Link video YouTube:</label>
                <input type="text" id="youtube" name="youtube" value ="<?php echo $current_article['youtube'];?>">
            </div>
            <div class="form-group">
                <label for="audio">Link audio:</label>
                <input type="text" id="audio" name="audio" value ="<?php echo $current_article['audio'];?>">
            </div>
            <div class="button">
            <button type="submit" name="btn_capnhat" id="btn_capnhat">Cập nhật</button>
            <button type="button" id="btn_huythemmoi" name ="btn_huythemmoi" >Hủy cập nhật</button>
            </div>
           
        </form>
    </div>
    <script>
        document.getElementById('btn_huythemmoi').addEventListener('click', function() {
            // Hiển thị hộp thoại xác nhận
            var result = confirm("Bạn có chắc chắn muốn hủy cập nhật?");
            // Nếu người dùng đồng ý (OK) thì chuyển hướng về trang index.php
            if (result) {
                window.location.href = 'Manage_articles_page.php';
            }
            // Ngược lại, không làm gì cả
        });
        <?php if (!empty($error_message)): ?>
        document.addEventListener('DOMContentLoaded', function() {
            var errorBox = document.getElementById('errorBox');
            var errorMessage = document.getElementById('errorMessage');
            var btnCloseErrorBox = document.getElementById('btnCloseErrorBox');

            errorBox.style.display = 'block';
            errorMessage.textContent = '<?php echo addslashes($error_message); ?>';

            btnCloseErrorBox.addEventListener('click', function() {
                errorBox.style.display = 'none';
            });
        });
        <?php endif; ?>
    </script>
    <?php include "../Admin_dashboard/Footer.php"?>

</body>
</html>
