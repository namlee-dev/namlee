<div class="container-fluid">
    <h1>A propos</h1>
    <section>
            <h2>Hello World !</h2>
            <div class="text">
                <p>C'est par ces mots historiques qu'a commencé ma formation de développeuse (dev) web chez <a href="https://oclock.io/">O'Clock</a>.</p>

                <p>Mon bac en poche, j'étais jeune et n'avais pas encore trouvé ma voie.</p>
                <p>J'ai donc suivi une formation de marketing car nous vivons dans une société de consommation.</p>
                <p>Cela m'intéressait d'en connaître les rouages.</p>
                <p>J'ai commencé à travailler directement à la sortie de l'école.</p>
                <a href="<?= $router->generate ('about');?>">Lire la suite ...</a>
            </div>
    </section>
    <h1>Actualités</h1>
    <!-- Articles -->
    <section>
        <h2>Dernier article :</h2>
        <article>
            <?php for ($i=0; $i < 1; $i++) :
            $article = $articlesList[$i];
            ?>
            <div class="text">
                <h3> <?= $article->getTitle() ?> </h3>
                <p> <i class="fas fa-calendar-day"></i> <em> le <?= $article->getDate() ?> </em></p>
                <p> <i class="fas fa-thumbtack"></i> <em> <?= $article->getCategory() ?> </em></p>
                <div clas="text">
                    <p><?= $article->getExcerpt() ?></p>
                    <a href="<?= $router->generate ('article', ['article_id' => $article->getID()]);?>">Lire la suite
                        ...</a>
                </div>
            </div>
            <?php endfor; ?>
        </article>
    </section>
    <!-- Projects -->
    <section>
        <h2>Dernier projet :</h2>
        <article>
            <?php for ($i=0; $i < 1; $i++) :
            $project = $projectsList[$i];
            ?>
            <div class="text">
                <h3> <?= $project->getTitle() ?> </h3>
                <div clas="text">
                    <p><?= $project->getExcerpt() ?></p>
                    <a href="<?= $router->generate ('project', ['project_id' => $project->getID()]);?>">Lire la suite
                        ...</a>
                </div>
                <?php endfor; ?>
            </div>
        </article>
    </section>
</div>