<?php
require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake News!</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <header>

    </header>
    <?php foreach($newsArticles as $newsArticle) : ?>
        <div class="news">
            <p><?= $newsArticle['title'] ?></p>
        </div>
        <br>
    <?php endforeach; ?>
    <footer>

    </footer>
</body>
</html>