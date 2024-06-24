<?php
include '../../conn_db.php';
include 'Article_category_data.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = getCategoryById($id);

    if (!empty($result)) {
        $category = $result[0]; // Lấy thông tin danh mục cần xóa
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Xác nhận Xóa Danh mục Bài viết</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f0f0f0;
                    margin: 0;
                    padding: 20px;
                }
                .container {
                    max-width: 600px;
                    margin: 20px auto;
                    background-color: #fff;
                    padding: 20px;
                    border: 1px solid #ddd;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }
                h2 {
                    color: #333;
                    text-align: center;
                }
                p {
                    text-align: center;
                }
                .btn-group {
                    text-align: center;
                    margin-top: 20px;
                }
                .btn-group button, .btn-group a {
                    background-color: #007bff;
                    color: #fff;
                    border: none;
                    padding: 12px 20px;
                    font-size: 16px;
                    cursor: pointer;
                    border-radius: 4px;
                    margin-right: 10px;
                    text-decoration: none;
                    display: inline-block;
                }
                .btn-group button:hover, .btn-group a:hover {
                    background-color: #0056b3;
                }
                .message {
                    text-align: center;
                    color: green;
                    font-weight: bold;
                    margin-bottom: 10px;
                }
                .back-link {
                    text-decoration: none;
                    color: #007bff;
                    transition: border-bottom-color 0.3s ease; /* Thêm hiệu ứng chuyển đổi */
                    border-bottom: 1px solid transparent; /* Đảm bảo có đường gạch chân mặc định */
                }

                .back-link:hover {
                    border-bottom-color: #007bff; /* Đổi màu của đường gạch chân khi hover */
                }

            </style>
            <script>
                function confirmDelete() {
                    var confirmDelete = confirm("Bạn chắc chắn muốn xóa danh mục bài viết này?\nThông tin danh mục bài viết:\nTên: <?php echo $category['name']; ?>\nTrạng thái: <?php echo $category['status']; ?>");
                    if (confirmDelete) {
                        window.location.href = 'Article_category_business.php?action=delete&id=<?php echo $id; ?>';
                    }
                }
            </script>
        </head>
        <body>
            <div class="container">
                <h2>Xác nhận Xóa Danh mục Bài viết</h2>
                <p>Bạn chắc chắn muốn xóa danh mục bài viết này?</p>
                <p><strong>Thông tin danh mục:</strong></p>
                <p><strong>Tên:</strong> <?php echo $category['name']; ?></p>
                <p><strong>Trạng thái:</strong> <?php echo $category['status']; ?></p>
                <div class="btn-group">
                    <button onclick="confirmDelete()">Xóa Danh mục</button>
                </div>
                <div style="display: flex; justify-content: center; margin-top: 15px;">
                    <a href='Article_category_page.php' class="back-link" style="text-decoration: none; color: #007bff;">Quay lại</a>
                </div>


            </div>
        </body>
        </html>
        <?php
    } else {
        echo "Xóa thành công. <a href='Article_category_page.php'>Quay lại </a>";
    }
} elseif (isset($_GET['success']) && $_GET['success'] == 1) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Xóa Danh mục Bài viết</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
                margin: 0;
                padding: 20px;
            }
            .container {
                max-width: 600px;
                margin: 20px auto;
                background-color: #fff;
                padding: 20px;
                border: 1px solid #ddd;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h2 {
                color: #333;
                text-align: center;
            }
            p {
                text-align: center;
            }
            .btn-group {
                text-align: center;
                margin-top: 20px;
            }
            .btn-group a {
                background-color: #007bff;
                color: white;
                padding: 12px 20px;
                text-align: center;
                text-decoration: none;
                border-radius: 4px;
                display: inline-block;
                font-size: 16px;
            }
            .btn-group a:hover {
                background-color: #0056b3;
            }
            .message {
                text-align: center;
                color: green;
                font-weight: bold;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Xóa Danh mục Bài viết</h2>
            <div class="message">Xóa thành công</div>
            <div class="btn-group">
                <a href="Article_category_page.php">Quay lại</a>
            </div>
        </div>
    </body>
    </html>
    <?php
} else {
    echo "ID danh mục không hợp lệ. <a href='Article_category_page.php'>Quay lại</a>";
}
?>
