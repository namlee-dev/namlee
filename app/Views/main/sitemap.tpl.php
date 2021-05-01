<?php

use NamLee\Models\Article;
use NamLee\Models\Category;
use NamLee\Models\Project;

$articlesList = Article::findForSitemap();
$categoriesList = Category::findForSitmap();
$projectsList = Project::findForSitemap();

?>

<h1>Plan du site</h1>

<!-- STEP PAGES -->
<h2>Pages</h2>
<div class="text">
    <ul>
        <li><a href="<?= $router->generate('about') ?>">À propos</a></li>
        <li><a href="<?= $router->generate('contact') ?>">Contact</a></li>
        <li><a href="<?= $router->generate('privacy') ?>">Mentions Légales</a></li>
        <li><a href="<?= $router->generate('sitemap') ?>">Plan du site</a></li>
        <li><a href="<?= $router->generate('article-list') ?>">Articles</a></li>
        <li><a href="<?= $router->generate('project-list') ?>">Projets</a></li>
    </ul>
</div>

<!-- STEP ARTICLES -->
<h2>Articles par catégorie</h2>
<div class="text">
    <?php
        foreach ($categoriesList as $category) : ?>
    <h3> <?= $category->getName() ?></h3>
    <ul>
        <?php
        foreach ($articlesList as $articles) :
        if ($articles->getCategory_id() === $category->getId()) : ?>
        <li>
            <a
                href="<?= $router->generate ('article', ['article_id' => $articles->getID()]);?>"><?= $articles->getTitle() ?></a>
        </li>
        <?php endif ?>
        <?php endforeach; ?>
    </ul>
    <?php endforeach; ?>
</div>

    <!-- STEP PROJECTS -->
<h2>Projets</h2>
<div class="text">
    <ul>
    <?php
    foreach ($projectsList as $projects) : ?>
    <li>
        <a
            href="<?= $router->generate ('project', ['project_id' => $projects->getID()]);?>"><?= $projects->getTitle() ?></a>
    </li>
    <?php endforeach; ?>
    </ul>
</div>