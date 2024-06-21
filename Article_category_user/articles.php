<?php
include '../conn_db.php'; // Kết nối cơ sở dữ liệu

$category_id = isset($_GET['category_id']) ? intval($_GET['category_id']) : null;
$article_id = isset($_GET['article_id']) ? intval($_GET['article_id']) : null;

if ($category_id) {
    $sql = "SELECT id, name FROM articles WHERE article_cat_id = $category_id AND status = 1";
    $articles = queryDatabase($sql); // Sử dụng hàm queryDatabase để lấy dữ liệu
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Articles</title>
    </head>
    <body>
        <h1>Articles in Selected Category</h1>
        <ul>
            <?php
            if (!empty($articles)) {
                foreach ($articles as $row) {
                    echo "<li><a href='articles.php?article_id=" . $row['id'] . "'>" . $row['name'] . "</a></li>";
                }
            } else {
                echo "No articles found in this category.";
            }
            ?>
        </ul>
        <a href="categories.php">Back to Categories</a>
    </body>
    </html>
    <?php
}

if ($article_id) {
    $sql = "SELECT * FROM articles WHERE id = $article_id AND status = 1";
    $article = queryDatabase($sql); // Sử dụng hàm queryDatabase để lấy dữ liệu

    if (!empty($article)) {
        $article = $article[0];
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title><?php echo $article['name']; ?></title>
        </head>
        <body>
            <h2><?php echo $article['name']; ?></h2>
            <p><?php echo $article['content']; ?></p>
            <p><img src="<?php echo $article['image']; ?>" alt="<?php echo $article['name']; ?>"></p>
            <p>Created on: <?php echo $article['create_date']; ?></p>
            <?php if ($article['youtube']) { ?>
                <p><iframe src="https://www.youtube.com/embed/<?php echo $article['youtube']; ?>"></iframe></p>
            <?php } ?>
            <?php if ($article['audio']) { ?>
                <p><audio controls src="<?php echo $article['audio']; ?>"></audio></p>
            <?php } ?>
            <a href="articles.php?category_id=<?php echo $article['article_cat_id']; ?>">Back to Articles</a>
        </body>
        </html>
        <?php
    } else {
        echo "Article not found.";
    }
}
?>
