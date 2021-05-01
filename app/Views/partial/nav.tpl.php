<nav class="nav">
    <a class="nav__home" href="<?= $router->generate ('home');?>" class="active"><i class="fas fa-home"></i></a>
    <div class="nav__links">
        <a class="nav__links--item" href="<?= $router->generate ('article-list');?>">Articles</a>
        <a class="nav__links--item" href="<?= $router->generate ('project-list');?>">Projets</a>
        <a class="nav__links--item" href="<?= $router->generate ('about');?>">À propos</a>
        <a class="nav__links--item" href="<?= $router->generate ('contact');?>">Contact</a>
    </div>
    <div>
        <a href="javascript:void(0);" class="nav__icon"><i id="icon" class="fa fa-bars"></i></a>
        <div class="close-button"><i class="fas fa-times"></i></div>
    </div>
</nav>