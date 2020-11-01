<?php
require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/header.php';
?>

<main>
    <?php usort($newsArticles, "sortByDate"); ?>
    <?php foreach ($newsArticles as $newsArticle) : ?>
        <div class="news">
            <h1 class="newsTitle"><?= $newsArticle['title']; ?></h2>
                <p class="authorText">by: <?php $author = connectNewsToAuthor($newsArticle['author'], $authors);
                                            echo $author; ?> - <?php echo approxTimeSince(timeSinceNow($newsArticle['date'])); ?></p>
                <img class="newsImage" src="<?= $newsArticle['image']; ?>" alt="">
                <p class="newsItem"><?= $newsArticle['article']; ?></p>
                <div class="newsBottom">
                    <p class="date"> <?= date('Y-m-d - H:i - ', strtotime($newsArticle['date'])); ?></p>
                    <img class="likeButton" src="/img/likebutton.png" alt="Like">
                    <p class="likeNumber"> <?= $newsArticle['likes']; ?></p>
                </div>
        </div>
    <?php endforeach; ?>
</main>

<?php
require __DIR__ . '/footer.php';
?>