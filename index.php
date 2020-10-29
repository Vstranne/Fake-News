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
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="stylesdesktop.css">

</head>
<body>
    <header>
        <h1>(logo placeholder)</h1>
    </header>
    <main>
        <?php usort($newsArticles, "sortByDate"); ?>
        <?php foreach($newsArticles as $newsArticle) : ?>
            <div class="news">
                <h1 class="newsTitle"><?= $newsArticle['title']; ?></h2>
                <p class="authorText">by: <?php $author = connectNewsToAuthor($newsArticle['author'], $authors); echo $author; ?> - <?php echo approxTimeSince(timeSinceNow($newsArticle['date'])); ?></p>
                <img class="newsImage" src="<?= $newsArticle['image']; ?>">
                <p class="newsItem"><?= $newsArticle['article']; ?></p>
                <div class="newsBottom">
                   
                    <p class="date"> <?= date('Y-m-d - H:i - ', strtotime($newsArticle['date'])); ?></p>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Bot%C3%B3n_Me_gusta.svg/1200px-Bot%C3%B3n_Me_gusta.svg.png" alt="Like">
                    <p>  <?= $newsArticle['likes']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </main>
    <footer>

    </footer>
</body>
</html>