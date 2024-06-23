<?php
require_once 'C:\xampp\htdocs\BTL_PHP\conn_db.php';

class BaoTriMemberFunctions {

    public function getAllMembers() {
        $query = "SELECT * FROM member";
        return queryDatabase($query);
    }

    public function getMemberById($id) {
        $query = "SELECT * FROM member WHERE id = '$id'";
        $result = queryDatabase($query);
        return $result ? $result[0] : null;
    }

    public function addMember($data) {
        $username = $data['username'];
        $passwordHash = md5($data['password']);
        $fullname = $data['fullname'];
        $phonenumber = $data['phonenumber'];
        $address = $data['address'];
        $email = $data['email'];
        $status = $data['status'];
        
        $query = "INSERT INTO member (username, password, fullname, phonenumber, address, email, status) 
                  VALUES ('$username', '$passwordHash', '$fullname', '$phonenumber', '$address', '$email', $status)";
        
        return executeQuery($query);
    }

    public function updateMember($data) {
        $id = $data['id'];
        $username = $data['username'];
        $pass = $data['password'];
        $fullname = $data['fullname'];
        $phonenumber = $data['phonenumber'];
        $address = $data['address'];
        $status = $data['status'];

        $query = "UPDATE member SET 
                  username = '$username', 
                  fullname = '$fullname', 
                  phonenumber = '$phonenumber', 
                  address = '$address', 
                  status = $status 
                  WHERE id = '$id'";

        return executeQuery($query);
    }

    public function deleteMember($id) {
        $query = "DELETE FROM member WHERE id = '$id'";
        return executeQuery($query);
    }

    public function usernameExists($username) {
        $query = "SELECT * FROM member WHERE username = '$username'";
        $result = queryDatabase($query);
        return count($result) > 0;
    }

    public function validateMemberData($data, $isUpdate = false) {
        $errors = [];

        // Kiểm tra tên đăng nhập đã tồn tại (trừ khi đang cập nhật và tên đăng nhập không thay đổi)
        if ($isUpdate) {
            $member = $this->getMemberById($data['id']);
            if ($data['username'] !== $member['username'] && $this->usernameExists($data['username'])) {
                $errors['username'] = "Tên đăng nhập đã tồn tại.";
            }
        } else {
            if ($this->usernameExists($data['username'])) {
                $errors['username'] = "Tên đăng nhập đã tồn tại.";
            }
        }

        // Kiểm tra mật khẩu và xác nhận mật khẩu có khớp nhau không
        if (isset($data['password']) && isset($data['confirm_password']) && $data['password'] !== $data['confirm_password']) {
            $errors['confirm_password'] = "Mật khẩu và xác nhận mật khẩu không khớp.";
        }

        // Kiểm tra định dạng email
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Email không đúng định dạng.";
        }

        return $errors;
    }

    public function handleAddMemberRequest() {
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'username' => $_POST['username'],
                'password' => $_POST['password'],
                'confirm_password' => $_POST['confirm_password'],
                'fullname' => ucwords(strtolower($_POST['fullname'])),
                'phonenumber' => $_POST['phonenumber'],
                'address' => $_POST['address'],
                'email' => $_POST['email'],
                'status' => $_POST['status']
            ];

            $errors = $this->validateMemberData($data);

            if (empty($errors)) {
                if ($this->addMember($data)) {
                    header("Location: index.php");
                    exit();
                } else {
                    $errors['general'] = "Có lỗi xảy ra khi thêm tài khoản.";
                }
            }
        }

        return $errors;
    }

    public function handleEditMemberRequest($id) {
        $member = $this->getMemberById($id);
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'id' => $id,
                'username' => $_POST['username'],
                'fullname' => ucwords(strtolower($_POST['fullname'])),
                'phonenumber' => $_POST['phonenumber'],
                'address' => $_POST['address'],
                'email' => $member['email'], // Không cho phép chỉnh sửa email
                'status' => $_POST['status']
            ];

            $errors = $this->validateMemberData($data, true);

            if (empty($errors)) {
                if ($this->updateMember($data)) {
                    header("Location: index.php");
                    exit();
                } else {
                    $errors['general'] = "Có lỗi xảy ra khi sửa tài khoản.";
                }
            }
        }

        return ['errors' => $errors, 'member' => $member];
    }
}
?>

<!-- <?php
// require_once 'C:\xampp\htdocs\BTL_PHP\conn_db.php';

// class BaoTriMemberFunctions {

//     public function getAllMembers() {
//         $query = "SELECT * FROM member";
//         return queryDatabase($query);
//     }

//     public function getMemberById($id) {
//         $query = "SELECT * FROM member WHERE id = '$id'";
//         $result = queryDatabase($query);
//         return $result ? $result[0] : null;
//     }

//     public function addMember($data) {
//         $username = $data['username'];
//         $passwordHash = md5($data['password']);
//         $fullname = $data['fullname'];
//         $phonenumber = $data['phonenumber'];
//         $address = $data['address'];
//         $email = $data['email'];
//         $status = $data['status'];
        
//         $query = "INSERT INTO member (username, password, fullname, phonenumber, address, email, status) 
//                   VALUES ('$username', '$passwordHash', '$fullname', '$phonenumber', '$address', '$email', $status)";
        
//         return executeQuery($query);
//     }

//     public function updateMember($data) {
//         $id = $data['id'];
//         $username = $data['username'];
//         $passwordHash = md5($data['password']);
//         $fullname = $data['fullname'];
//         $phonenumber = $data['phonenumber'];
//         $address = $data['address'];
//         $email = $data['email'];
//         $status = $data['status'];

//         $query = "UPDATE member SET username = '$username', password = '$passwordHash', fullname = '$fullname', phonenumber = '$phonenumber', address = '$address', email = '$email', status = $status WHERE id = '$id'";

//         return executeQuery($query);
//     }

//     public function deleteMember($id) {
//         $query = "DELETE FROM member WHERE id = '$id'";
//         return executeQuery($query);
//     }

//     public function usernameExists($username) {
//         $query = "SELECT * FROM member WHERE username = '$username'";
//         $result = queryDatabase($query);
//         return count($result) > 0;
//     }
// }
?> -->
