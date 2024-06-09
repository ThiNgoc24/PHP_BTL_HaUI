<style>
    .main{
        display: flex;
        flex-direction: column;
        align-items:center;
    }
    a{
        display: block;
        padding: 10px;
        margin: 20px;
        text-decoration: none;
        color: white;
        background-color: blue;
        width: 200px;
        text-align:center;
    }
    a:hover{
        background-color: red;
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
