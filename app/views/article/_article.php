<div class="article mb-4 p-3">
    <a href="/article/<?= $article->getSlug() ?>">
        <h4><?= $article->getTitle() ?></h4>
    </a>

    <div class="content">
        <?= $article->getContent() ?>
    </div>
</div>