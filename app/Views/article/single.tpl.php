<h1> <?= $article->getTitle() ?> </h1>
<p> <i class="fas fa-calendar-day"></i> <em> le <?= $article->getDate() ?> </em></p>
<p> <i class="fas fa-thumbtack"></i> <em> <?= $article->getCategory() ?> </em></p>
<div class="text">
    <p><?= $article->getExcerpt() ?></p>
</div>
<?= $article->getContent() ?>