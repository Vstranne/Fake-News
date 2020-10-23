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
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <header>

    </header>
    <main>
        <?php foreach($newsArticles as $newsArticle) : ?>
            <div class="news">
                <h2 class="newsTitle"><?= $newsArticle['title']; ?></h2>
                <p class="newsItem"><?= $newsArticle['article']; ?></p>
                <div class="newsBottom">
                    <p> <?= newsArticle['author']; ?></p>
                    <p> <?= newsArticle['date']; ?></p>
                    <p> <?= newsArticle['likes']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </main>
    <footer>

    </footer>
</body>
</html>