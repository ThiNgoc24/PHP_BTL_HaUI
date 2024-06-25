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
            table-layout: auto;
        }

        .table-content{
            max-height: 80vh;
            overflow-y: auto;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #fff;
        }

        .action-links {
            white-space: nowrap;
            text-align: center;
            width: 140px;
        }

        .action-links a {
            display: inline-block;
            margin-right: 5px;
            padding: 5px 10px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
        }

        .action-links .edit {
            background-color: #28a745;
            color: #fff;
        }

        .action-links .edit:hover {
            background-color: #218838;
        }

        .action-links .delete {
            background-color: #d9534f;
            color: #fff;
        }

        .action-links .delete:hover {
            background-color: #c9302c;
        }
    </style>
</head>

<body>
    <?php
    require_once 'BaoTriMember_functions.php';
    $memberFunctions = new BaoTriMemberFunctions();
    $members = $memberFunctions->getAllMembers();
    ?>
    <?php include "../Admin_dashboard/Header_Sidebar.php"?>
    <div class="container">
        <h1>Danh sách tài khoản</h1>
        <a href="add.php" class="add-btn">Thêm tài khoản</a>
        <div class="table-content">
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
                <?php foreach ($members as $member) : ?>
                    <tr>
                        <td><?php echo $member['id']; ?></td>
                        <td><?php echo $member['username']; ?></td>
                        <td><?php echo $member['fullname']; ?></td>
                        <td><?php echo $member['phonenumber']; ?></td>
                        <td><?php echo $member['address']; ?></td>
                        <td><?php echo $member['email']; ?></td>
                        <td><?php echo $member['status'] ? 'Hoạt động' : 'Không hoạt động'; ?></td>
                        <td class="action-links">
                            <a href="edit.php?id=<?php echo $member['id']; ?>" class="edit">Sửa</a>
                            <a href="delete.php?id=<?php echo $member['id']; ?>" class="delete" onclick="return confirm('Bạn có chắc chắn muốn xoá tài khoản này không?')">Xoá</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <?php include "../Admin_dashboard/Footer.php"?>
</body>
</html>