<style>
    .main {
    display: flex;
    flex-direction: column;
    align-items: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    width: 100%; /* Sử dụng toàn bộ chiều rộng có sẵn */
    margin: 20px auto;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    background-color: #f9f9f9;
    min-height: 100vh
}

h2 {
    color: #333;
    margin-bottom: 20px;
}

.list_cate {
    display: flex;
    flex-direction: column; /* Thay đổi thành column để hiển thị theo chiều dọc */
    align-items: center;
    width: 100%;
    gap: 15px;
}

.list_cate a {
    display: block;
    padding: 15px 25px;
    text-decoration: none;
    color: white;
    background-color: #007bff;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    width: 200px; /* Điều chỉnh chiều rộng của nút */
    text-align: center;
}

.list_cate a:hover {
    background-color: #dc3545;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Media queries cho màn hình nhỏ hơn */
@media (max-width: 768px) {
    .list_cate a {
        width: 90%; /* Điều chỉnh chiều rộng nút cho màn hình nhỏ */
    }
}
</style>
<div class="main">
    <h2>Kiểu đơn hàng</h2>
    <div class="list_cate">
        <a href="list_orders.php?orderType=1">Chưa xử lý</a><br>
        <a href="list_orders.php?orderType=2">Đang xử lý</a><br>
        <a href="list_orders.php?orderType=3">Đã xử lý</a><br>
        <a href="list_orders.php?orderType=4">Huỷ</a>
    </div>
</div>
