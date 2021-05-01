<?php foreach ($articlesList as $articles) : ?>
    <h1> <?= $articles->getTitle() ?> </h1>
    <p> <i class="fas fa-calendar-day"></i> <em> le <?= $articles->getDate() ?> </em></p>
    <p> <i class="fas fa-thumbtack"></i> <em> <?= $articles->getCategory() ?> </em></p>
    <div class="text">
        <p><?= $articles->getExcerpt() ?></p>
        <a href="<?= $router->generate ('article', ['article_id' => $articles->getID()]);?>">Lire la suite ...</a>
    </div>
<?php endforeach; ?>