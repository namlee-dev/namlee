<?php foreach ($projectsList as $projects) : ?>
    <h1> <?= $projects->getTitle() ?> </h1>
    <div class="text">
        <p><?= $projects->getExcerpt() ?> </p>
        <a href="<?= $router->generate ('project', ['project_id' => $projects->getID()]);?>">Lire la suite ...</a>
    </div>
<?php endforeach; ?>