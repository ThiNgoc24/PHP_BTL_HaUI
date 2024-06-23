<?php
include 'C:\xampp\htdocs\BTL_PHP\conn_db.php';

// Lấy dữ liệu từ POST
if(isset($_POST['add'])){
    $ten = ucwords(strtolower($_POST['name']));
    // $ten = $_POST['name'];
    // $anh = $_POST['image'];
    $anh = $_FILES['image']['name'];
    $anh_tmp = $_FILES['image']['tmp_name'];
    $status = $_POST['status'];

    $add = "INSERT INTO authors(name, image, status) VALUES('$ten', '$anh', $status)";
    move_uploaded_file($anh_tmp, '../images/authors'.$anh);
    $result = executeQuery($add);
    if ($result === true) {
        header('Location: list_page.php');
    } else {
        echo "Thêm mới không thành công: " . $result;
    }
}

if(isset($_POST['edit'])){
    $id = $_POST['id']; // Đảm bảo lấy id từ POST khi cập nhật
    $ten = ucwords(strtolower($_POST['name']));
    // $ten = $_POST['name'];
    // $anh = $_POST['image'];
    $anh = $_FILES['image']['name'];
    $anh_tmp = $_FILES['image']['tmp_name'];
    $status = $_POST['status'];
    
    if(!empty($_FILES['image']['name'])){
        move_uploaded_file($anh_tmp, '../images/authors'.$anh);
        $update = "UPDATE authors SET name='$ten', image='$anh', status='$status' WHERE id='$id'";
    }
    else{
        $update = "UPDATE authors SET name='$ten', status='$status' WHERE id='$id'";
    }
    $result = executeQuery($update);
    if ($result === true) {
        header('Location: list_page.php');
    } else {
        echo "Cập nhật không thành công: " . $result;
    }
}


if(isset($_POST['delete'])){
    $ma = $_POST['idTG'];
    $xoa = "DELETE FROM authors WHERE id = '$ma'";
    $result = executeQuery($xoa);
    if ($result === true) {
        echo "<script>
                alert('Xoá thành công!');
                window.location.href = 'list_page.php';
              </script>";
    } else {
        echo "<script>
                alert('Xoá không thành công: " . $result . "');
              </script>";
    }
}
?>
<!-- 
<?php
// include 'C:\xampp\htdocs\BTL_PHP\conn_db.php';

// // Lấy dữ liệu từ POST
// if(isset($_POST['add'])){
//     $ten = ucwords(strtolower($_POST['name']));
//     $anh = $_FILES['image']['name'];
//     $anh_tmp = $_FILES['image']['tmp_name'];
//     $status = $_POST['status'];

//     $target_dir = '../images/authors/';
//     $target_file = $target_dir . basename($anh);

//     if (move_uploaded_file($anh_tmp, $target_file)) {
//         $add = "INSERT INTO authors(name, image, status) VALUES('$ten', '$anh', $status)";
//         $result = executeQuery($add);
//         if ($result === true) {
//             header('Location: list_page.php');
//         } else {
//             echo "Thêm mới không thành công: " . $result;
//         }
//     } else {
//         echo "Có lỗi xảy ra khi tải file lên.";
//     }
// }

// if(isset($_POST['edit'])){
//     $id = $_POST['id']; // Đảm bảo lấy id từ POST khi cập nhật
//     $ten = ucwords(strtolower($_POST['name']));
//     $anh = $_FILES['image']['name'];
//     $anh_tmp = $_FILES['image']['tmp_name'];
//     $status = $_POST['status'];

//     $target_dir = '../images/authors/';
//     $target_file = $target_dir . basename($anh);

//     if(!empty($anh)){
//         if (move_uploaded_file($anh_tmp, $target_file)) {
//             $update = "UPDATE authors SET name='$ten', image='$anh', status='$status' WHERE id='$id'";
//         } else {
//             echo "Có lỗi xảy ra khi tải file lên.";
//         }
//     } else {
//         $update = "UPDATE authors SET name='$ten', status='$status' WHERE id='$id'";
//     }

//     $result = executeQuery($update);
//     if ($result === true) {
//         header('Location: list_page.php');
//     } else {
//         echo "Cập nhật không thành công: " . $result;
//     }
// }

// if(isset($_POST['delete'])){
//     $ma = $_POST['idTG'];
//     $xoa = "DELETE FROM authors WHERE id = '$ma'";
//     $result = executeQuery($xoa);
//     if ($result === true) {
//         echo "<script>
//                 alert('Xoá thành công!');
//                 window.location.href = 'list_page.php';
//               </script>";
//     } else {
//         echo "<script>
//                 alert('Xoá không thành công: " . $result . "');
//               </script>";
//     }
// }
?> -->
