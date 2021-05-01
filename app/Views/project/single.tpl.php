<h1> <?= $project->getTitle() ?> </h1>
<div class="text">
    <p><?= $project->getExcerpt() ?></p>
</div>
<?= $project->getContent() ?>

<section class="projet">
    <p><a href="<?= $project->getUrl() ?>">
        <img class="project__image" src="<?= $assetsBaseUri?>/images/<?= $project->getImage() ?>" alt=" banner <?= $project->getTitle() ?>">
    </a></p>
</section>

