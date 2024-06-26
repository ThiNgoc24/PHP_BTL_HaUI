<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'articles_bll.php';

$category_id = isset($_GET['category_id']) ? intval($_GET['category_id']) : null;
$article_id = isset($_GET['article_id']) ? intval($_GET['article_id']) : null;

if ($category_id) {
    $articles = getArticlesByCategory($category_id);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Articles</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }
            .container {
                max-width: 60%;
                margin: 20px auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
            h1, h2 {
                font-size: 24px;
                color: #333;
                margin-bottom: 20px;
            }
            ul {
                list-style-type: none;
                padding: 0;
                margin: 0;
            }
            .container li {
                margin-bottom: 10px;
            }
            .container li a {
                display: block;
                padding: 10px;
                text-decoration: none;
                background-color: #f0f0f0;
                color: #333;
                border-radius: 4px;
                transition: background-color 0.3s ease;
            }
            .container li a:hover {
                background-color: #e0e0e0;
            }
            .back-link {
                display: inline-block;
                margin-top: 10px;
                color: #007bff;
                text-decoration: none;
            }
            .back-link:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <?php include "../Home/Header.php";?>
        <div class="container">
            <h1>Danh sách bài viết</h1>
            <ul>
                <?php
                if (!empty($articles)) {
                    foreach ($articles as $row) {
                        echo "<li><a href='articles.php?article_id=" . $row['id'] . "'>" . $row['name'] . "</a></li>";
                    }
                } else {
                    echo "<li>Không có bài viết nào trong danh mục</li>";
                }
                ?>
            </ul>
            <a class="back-link" href="categories.php">Quay lại</a>
        </div>
    </body>
    </html>
    <?php
}

if ($article_id) {
    $article = getArticleById($article_id);

    if ($article) {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title><?php echo $article['name']; ?></title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f4;
                    margin: 0;
                    padding: 0;
                }
                .container {
                    max-width: 60%;
                    margin: 20px auto;
                    background-color: #fff;
                    padding: 20px;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0,0,0,0.1);
                }
                h1, h2 {
                    font-size: 24px;
                    color: #333;
                    margin-bottom: 20px;
                }
                .article {
                    width: 100%;
                    background-color: #fff;
                    padding: 20px;
                    margin-top: 20px;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0,0,0,0.1);
                }
                .article img {
                    max-width: 100%;
                    height: auto;
                    margin-bottom: 10px;
                }
                .article iframe {
                    width: 100%;
                    height: 315px; /* Chỉnh chiều cao phù hợp cho iframe của YouTube */
                    margin-bottom: 10px;
                }
                .article audio {
                    width: 100%;
                    margin-bottom: 10px;
                }
                .back-link {
                    display: inline-block;
                    margin-top: 10px;
                    color: #007bff;
                    text-decoration: none;
                }
                .back-link:hover {
                    text-decoration: underline;
                }
            </style>
        </head>
        <body>
            <?php include "../Home/Header.php";?>
            <div class="container">
                <div class="article">
                    <h2><?php echo $article['name']; ?></h2>
                    <p><?php echo $article['content']; ?></p>
                    <p><img src="../../images/<?php echo $article['image']; ?>" alt="<?php echo $article['name']; ?>"></p>
                    <p>Created on: <?php echo $article['create_date']; ?></p>
                    <?php if ($article['youtube']) { ?>
                        <p><iframe src="https://www.youtube.com/embed/<?php echo $article['youtube']; ?>"></iframe></p>
                    <?php } ?>
                    <?php if ($article['audio']) { ?>
                        <p><audio controls src="../../audios/<?php echo $article['audio']; ?>"></audio></p>
                    <?php } ?>
                    <a class="back-link" href="articles.php?category_id=<?php echo $article['article_cat_id']; ?>">Quay lại</a>
                </div>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "Không tồn tại nội dung.";
    }
}
?>
