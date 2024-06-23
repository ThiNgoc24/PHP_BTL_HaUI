<?php
require_once '../../conn_db.php'; // Đảm bảo đã kết nối đến database
$error_message = '';
$error_message1 ='';
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
function getAllArticles() {
    $sql = "SELECT * FROM articles";
    return queryDatabase($sql);
}

function getArticleById($id) {
    $sql = "SELECT * FROM articles WHERE id=$id";
    $result = queryDatabase($sql);
    return isset($result[0]) ? $result[0] : null;
}

function addArticle($name, $summary, $content, $article_cat_id, $image, $status, $youtube, $audio) {
    $sql = "INSERT INTO articles (name, summary, content, article_cat_id, image, status, youtube, audio) 
            VALUES ('$name', '$summary', '$content', '$article_cat_id', '$image', '$status', '$youtube', '$audio')";
    return executeQuery($sql);
}

function updateArticle($id,$name, $summary, $content, $article_cat_id,$image, $status, $youtube, $audio) {
    $sql = "UPDATE articles 
            SET name='$name', summary='$summary', content='$content', article_cat_id='$article_cat_id', image='$image', status='$status', youtube='$youtube', audio='$audio' 
            WHERE id=$id";
    return executeQuery($sql);
}
function deleteArticle($id) {
    $sql = "DELETE FROM `articles` WHERE id=$id";
    return executeQuery($sql);
}
// Xử lý khi submit form từ file manage_articles.php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn_thembaiviet'])) {
    $name = $_POST['name'];
    $summary = $_POST['summary'];
    $content = $_POST['content'];
    $article_cat_id = $_POST['article_cat_id'];
    $status = $_POST['status'];
    $youtube = $_POST['youtube'];
    $audio = $_POST['audio'];
    $image = ''; // Biến lưu đường dẫn ảnh
    // $sqlcheck = "SELECT * FROM `articles` WHERE `name` = $name";
    // $list = executeQuery($sqlcheck);
    if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
        $uploadDir = '../../images/'; // Thư mục lưu trữ file upload
        $uploadFile = $uploadDir . basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            $image = $uploadFile; // Lưu đường dẫn ảnh vào biến $image
        } else {
            echo "Có lỗi xảy ra khi upload ảnh. Vui lòng thử lại.";
            exit();
        }
    }

    $sqlCheck = "SELECT * FROM articles WHERE name = '$name'";
    $existingArticle = queryDatabase($sqlCheck);
    
    if (!empty($existingArticle)) {
        $error_message = "Tên tiêu đề đã tồn tại.";
        include "Manage_articles_insert2_page.php";
    } elseif (preg_match('/[0-9]/', $name) ) {
        // Nếu có số, hiển thị thông báo lỗi hoặc xử lý phù hợp
        $error_message = "Tên không được chứa số.";
        include "Manage_articles_insert2_page.php";
    } else {
        $result = addArticle($name, $summary, $content, $article_cat_id, $image, $status, $youtube, $audio);

    if ($result) {
        echo '<script>alert("Thêm mới bài viết thành công."); window.location.href = "Manage_articles_page.php";</script>';
    } else {
        // Xử lý khi thêm không thành công (ví dụ: ghi log lỗi, hiển thị thông báo cho người dùng)
        // Ví dụ:
        echo '<script>alert("Thêm mới không thành công."); window.location.href = "Manage_articles_page.php";</script>';
    }
    }

    // Thêm mới bài viết
    
}

    // Xử lý khi người dùng submit form cập nhật
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn_capnhat'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $summary = $_POST['summary'];
        $content = $_POST['content'];
        $article_cat_id = $_POST['article_cat_id'];
        $status = $_POST['status'];
        $youtube = $_POST['youtube'];
        $audio = $_POST['audio'];
        $image = '';
        if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
            $uploadDir = '../../images/'; // Thư mục lưu trữ file upload
            $imageFileName = generateUniqueImageName($_FILES['image']['name']);
            $uploadFile = $uploadDir . $imageFileName;
    
            // Kiểm tra lỗi khi upload
            if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
                echo "Có lỗi khi upload ảnh. Mã lỗi: " . $_FILES['image']['error'];
                exit();
            }
    
            // Di chuyển file vào thư mục lưu trữ
            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                $image = $uploadFile; // Lưu đường dẫn ảnh vào biến $image
    
                // Kiểm tra và validate tên bài viết
                    // Update bài viết vào CSDL
        if (preg_match('/[0-9]/', $name)) {
            $error_message1 = "Tên không được chứa số.";
            echo '<script>alert("Tên không được chứa số."); window.location.href = "Manage_articles_update_page.php?id=' . $id . '";</script>';
           
        }else{
    
            $result = updateArticle( $id,$name, $summary, $content, $article_cat_id,$image, $status, $youtube, $audio);

            if ($result) {
                echo '<script>alert("Cập nhật bài viết thành công."); window.location.href = "Manage_articles_page.php";</script>';
                // Chuyển hướng về trang quản lý bài viết sau khi cập nhật thành công
                exit();
            } else {
                echo "Cập nhật bài viết không thành công. Vui lòng thử lại sau.";
            }
        }
        }
        

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            
            $deleted = deleteArticle($id);
            
            if ($deleted) {
                echo "<script>
                        alert('Xóa bài viết thành công');
                        window.location.href = 'Manage_articles_page.php';
                      </script>";
                exit;
            } else {
                echo "<script>
                        alert('Xóa bài viết thất bại');
                        window.location.href = 'Manage_articles_page.php';
                      </script>";
                exit;
            }
    
            } else {
                echo "Có lỗi xảy ra khi lưu file ảnh. Vui lòng thử lại.";
                exit();
            }
        } else {
            // Nếu không có file ảnh được upload, thông báo lỗi hoặc xử lý phù hợp
            echo "Vui lòng chọn một file ảnh để upload.";
        }
    
        }
        function generateUniqueImageName($originalName) {
            $extension = pathinfo($originalName, PATHINFO_EXTENSION);
            $uniqueName = uniqid('img_') . '.' . $extension;
            return $uniqueName;
        } 
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            
            $deleted = deleteArticle($id);
            
            if ($deleted) {
                echo "<script>
                        alert('Xóa bài viết thành công');
                        window.location.href = 'Manage_articles_page.php';
                      </script>";
                exit;
            } else {
                echo "<script>
                        alert('Xóa bài viết thất bại');
                        window.location.href = 'Manage_articles_page.php';
                      </script>";
                exit;
            }
        }
?>

