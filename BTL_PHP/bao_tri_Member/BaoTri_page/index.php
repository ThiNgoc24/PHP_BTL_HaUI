<?php
require_once 'C:\xampp\htdocs\BTL_PHP\bao_tri_Member\BaoTriMember_functions.php';

$memberFunctions = new BaoTriMemberFunctions();
$members = $memberFunctions->getAllMembers();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quản lý tài khoản</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            overflow: hidden;
        }
        a.add-btn {
            display: inline-block;
            margin: 20px 0;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        a.add-btn:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .action-links {
            white-space: nowrap;
        }
        .action-links a {
            display: inline-block;
            margin-right: 10px;
            color: #0066cc;
            text-decoration: none;
        }
        .action-links a:hover {
            text-decoration: underline;
        }
        .action-links .delete {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Danh sách tài khoản</h1>
        <a href="add.php" class="add-btn">Thêm tài khoản</a>
        <table>
            <tr>
                <th>Mã</th>
                <th>Tên đăng nhập</th>
                <th>Họ tên</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th>Trạng thái</th>
                <th>Xử lý</th>
            </tr>
            <?php foreach ($members as $member): ?>
            <tr>
                <td><?php echo $member['id']; ?></td>
                <td><?php echo $member['username']; ?></td>
                <td><?php echo $member['fullname']; ?></td>
                <td><?php echo $member['phonenumber']; ?></td>
                <td><?php echo $member['address']; ?></td>
                <td><?php echo $member['email']; ?></td>
                <td><?php echo $member['status'] ? 'Hoạt động' : 'Không hoạt động'; ?></td>
                <td class="action-links">
                    <a href="edit.php?id=<?php echo $member['id']; ?>">Sửa</a> ||
                    <a href="delete.php?id=<?php echo $member['id']; ?>" class="delete" onclick="return confirm('Bạn có chắc chắn muốn xoá tài khoản này không?')">Xoá</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
