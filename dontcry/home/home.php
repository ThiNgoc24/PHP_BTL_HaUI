<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang Chủ</title>
    <!-- <link rel="stylesheet" href="../css/styles.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #f8f8f8;
        border-bottom: 1px solid #ddd;
    }

    .top-header {
        display: flex;
        justify-content: space-between;
        padding: 0 10px;
        background-color: #5ba3eb;
        color: #ffffff;
        height: 35px;
    }

    .contact-info {
        display: flex;
        align-items: center;
    }

    .auth-links {
        display: flex;
        align-items: center;
    }

    .auth-links a {
        color: #fff;
        text-decoration: none;
        margin-left: 10px;
    }

    .main-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 90px;
        padding: 0 20px;
        background-color: #f9f9f9;
    }

    .logo img {
        max-width: 170px;
    }

    header nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    header nav ul li {
        margin-right: 35px;
    }

    header nav ul li a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
        font-size: large;
    }

    header nav ul li a:hover {
        text-decoration: none;
        color: #0e4894;
        font-weight: bold;
    }

    .extra-links {
        display: flex;
        align-items: center;
        
    }

    .extra-links a {
        text-decoration: none;
        color: #333;
        margin-left: 20px;
        font-weight: bold;
    }

    .extra-links a:hover{
        text-decoration: none;
        color: #0e4894;
        margin-left: 20px;
        font-weight: bold;
    }

    /*css cho main*/
    .container1 {
        display: flex;
    }
    .left-sidebar {
        width: 20%;
        padding: 10px;
        background-color: #f9f9f9;
        
    }
    .left-sidebar h2 {
        margin-left: 20px;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }
    .main-content {
        width: 80%;
        padding: 10px;
    }
    .top {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .search {
        width: 60%;
    }

    .search {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 20px;
    }

    .search form {
        display: flex;
        align-items: center;
    }

    .search input[type="text"] {
        width: 300px;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ddd;
        border-radius: 4px;
        margin-right: 10px;
        outline: none;
        transition: border-color 0.3s ease;
    }

    .search input[type="text"]:focus {
        border-color: #007bff;
    }

    .search button {
        padding: 10px 20px;
        font-size: 16px;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .search button:hover {
        background-color: #0056b3;
    }


    .contact {
        width: 35%;
        text-align: right;
        margin-top: 10px;
    }



    .bottom {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .bottom img {
        width: 80%;
        height: auto;
        padding: 10px;
    }

    .category-list {
        list-style-type: none;
        padding: 0;
        margin: 0;

    }

    .category-list a {
        display: block;
        padding: 10px;
        margin: 5px 0;
        background-color: #f8f8f8;
        color: #333;
        text-decoration: none;
        border: 0px solid #ddd;
        border-radius: 4px;
        transition: background-color 0.3s, color 0.3s;
        width: 210px;
        padding-left: 30px;
    }

    .category-list a:hover {
        background-color: #ddd;
        color: #000;
    }

    .category-list a:active {
        background-color: #ccc;
        color: #000;
    }

    .sidebar h2 {
        margin-top: 0;
        font-size: 1.2em;
        color: #444;
    }
    /*author container*/
    body {
        font-family: Arial, sans-serif;
    }


    .author-container {
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
        padding: 20px;
        border: 1px solid #ccc;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
        max-width: 90%;
    }

    .author {
        text-align: center;
        margin: 10px;
    }

    .author img {
        width: 70px;
        height: 70px;
        display: block;
        margin: 0 auto 10px;
        border-radius: 50%;
    }

    .author p {
        margin: 0;
        font-size: 14px;
        color: #333;
    }

    /*footer*/

    footer {
        background-color: #f8f8f8;
        padding: 20px 0;
        border-top: 1px solid #ddd;
    }

    .footer-top {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        padding: 20px;
        max-width: 1200px;
        margin: 0 auto;
        border-bottom: 1px solid #ddd;
    }

    .footer-logo img {
        max-width: 150px;
    }

    .footer-contact,
    .footer-posts,
    .footer-store {
        flex: 1;
        padding: 0 20px;
    }

    .footer-contact h3,
    .footer-posts h3,
    .footer-store h3 {
        margin-bottom: 10px;
        font-size: 18px;
        color: #333;
    }

    .footer-contact p,
    .footer-store p {
        margin: 5px 0;
        color: #666;
    }

    .footer-posts ul {
        list-style: none;
        padding: 0;
    }

    .footer-posts li {
        margin-bottom: 5px;
    }

    .footer-posts a {
        text-decoration: none;
        color: #0073e6;
    }

    .footer-posts a:hover {
        text-decoration: underline;
    }

    .footer-bottom {
        text-align: center;
        padding: 10px;
        background-color: #5ba3eb;
        color: #fff;
        font-size: 14px;
    }

    .footer-bottom p {
        margin: 0;
    }

    .bottom2 {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .carousel {
            text-align: center;
        }

        .carousel img {
            width: 50%;
            height: auto;
            display: inline-block;
            margin: 0 auto;
            padding: 10px;
        }

    </style>
</head>
<body>
    <header>
        <div class="top-header">
            <div class="contact-info">
                <p>nhom1StarBook@gmail.com</p>
            </div>
            <div class="auth-links">
                <a href="#">Đăng ký </a>
                <a href="#">Đăng nhập</a>
            </div>
        </div>
        <div class="main-header">
            <div class="logo">
                <img src="../images/logo_new.png" alt="Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="../detail/list_pd.php">SÁCH</a></li>
                    <li><a href="#">GIỎ HÀNG</a></li>
                    <li><a href="#">BÀI VIẾT</a></li>
                    <li><a href="#">LIÊN HỆ</a></li>
                </ul>
            </nav>
            <div class="extra-links">
                <a href="#">Sản phẩm yêu thích</a>
                <a href="#">Giỏ hàng</a>
            </div>
        </div>
    </header>

    <?php include '../conn_db2.php'; ?>
    <main>
        <div class="container1">
            <div class="left-sidebar">
                <h2>Danh mục sách</h2>
                <div class="category-list">
                    <a href="../xemtheodm/products.php?category_id=1">Sách Văn Học</a>
                    <a href="../xemtheodm/products.php?category_id=2">Sách Kỹ Năng</a>
                    <a href="../xemtheodm/products.php?category_id=3">Sách Thiếu Nhi</a>
                    <a href="../xemtheodm/products.php?category_id=4">Sách Nước Ngoài</a>
                    <a href="../xemtheodm/products.php?category_id=5">Truyện Tranh</a>
                    <a href="../xemtheodm/products.php?category_id=6">Sách Trinh Thám</a>
                    <a href="../xemtheodm/products.php?category_id=7">Sách Tôn Giáo</a>
                    <a href="../xemtheodm/products.php?category_id=8">Sách Tâm Lý - Giới tính</a>
                    <a href="../xemtheodm/products.php?category_id=9">Sách Lịch Sử</a>
                    <a href="../xemtheodm/products.php?category_id=10">Sách Văn Hóa - Du Lịch</a>
                </div>
            </div>
            <div class="main-content">
                <div class="top">
                    <div class="search">
                
                        <form action="../xemtheodm/search_results.php" method="get">
                            <input type="text" name="search_query" placeholder="Nhập tên sản phẩm">
                            <button type="submit">Tìm kiếm</button>
                        </form>
                    </div>
                    <div class="contact">
                        <p><strong>Liên hệ:</strong> 123-456-789</p>
                    </div>
                </div>
                <div class="bottom">
                    <img src="../images/banner.jpg" alt="Sample Image">
                </div>
            </div>
        </div>
        <?php
            include '../conn_db2.php';

            // Fetch authors from the database
            $author_sql = "SELECT id, name, image FROM authors WHERE status = 1";
            $author_result = $conn->query($author_sql);
        ?>
        <!-- <div class="bottom2">
            <div class="carousel">
                <div><img src="../images/authors/npv.jpg" alt="Image 1"></div>
                <div><img src="../images/authors/npv.jpg" alt="Image 2"></div>
                <div><img src="../images/authors/npv.jpg" alt="Image 3"></div>
              
            </div>
        </div> -->
        <h2 style="text-align: center;">Các tác giả nổi bật</h2>
        <div class="author-container">
            
            <div class="author">
                <img src='../images/authors/nguyennhatanh.jpg' alt='Nguyễn Nhật Ánh' />
                <p>Nguyễn Nhật Ánh</p>
            </div>
            <div class="author">
                <img src='../images/authors/tranquangduc.jpg' alt='Trần Quang Đức' />
                <p>Trần Quang Đức</p>
            </div>
            <div class="author">
                <img src='../images/authors/giacminhluat.png' alt='Giác Minh Luật' />
                <p>Giác Minh Luật</p>
            </div>
            <div class="author">
                <img src='../images/authors/batnguyettruongan.webp' alt='Bát Nguyệt Trường An' />
                <p>Bát Nguyệt Trường An</p>
            </div>
        </div>  

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('.carousel').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                adaptiveHeight: true
            });
        });
        </script>
    </main>
    <footer>
        <div class="footer-top">
            <div class="footer-logo">
                <img src="../images/logo_new.jpg" alt="Logo">
            </div>
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p>123 Bac Tu Liem, Hanoi, Vietnam</p>
                <p>Email: nhom3StarBook@gmail.com</p>
                <p>Phone: 0123-456-789</p>
            </div>
            <div class="footer-posts">
                <h3>Danh mục bài viết</h3>
                <ul>
                    <li><a href="#">Bài viết 1</a></li>
                    <li><a href="#">Bài viết 2</a></li>
                    <li><a href="#">Bài viết 3</a></li>
                    <li><a href="#">Bài viết 4</a></li>
                </ul>
            </div>
            <div class="footer-store">
                <h3>STAR BOOK</h3>
                <p>Your favorite book store!!</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright © 2024 All rights reserved | Nhóm 1 - 20232IT6022003</p>
        </div>
    </footer>
</body>
</html>
