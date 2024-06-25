<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <style>
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

    <?php include '../conn_db.php'; ?>
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
            include '../conn_db.php';

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
