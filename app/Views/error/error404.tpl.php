<div class="d-flex justify-content-center align-items-center bg-sec">
    <img id="header__title--image" src="<?= $assetsBaseUri ?>images/Nam_404.jpg" alt="avatar de l'auteur Nam Lee">
    <h1>La page demandée n'existe pas</h1>
</div>

<div class="error404">
    <p>Vous pouvez :</p>
        <ul>
            <li><a href="<?= $router->generate ('home');?>">Retourner à l'accueil</a></li>
            <li><a href="<?= $router->generate ('article-list');?>">Consulter la liste des articles</a></li>
            <li><a href="<?= $router->generate ('project-list');?>">Consulter la liste des projets</a></li>
        </ul>
</div>
