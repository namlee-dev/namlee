</main>
</div>
<div class="container">
    <footer class="footer bg-main">
        <div class="footer-links d-flex justify-content-center">
            <a class="nav-link" href="<?= $router->generate ('privacy');?>">Mentions légales</a>
            <a class="nav-link" href="<?= $router->generate ('sitemap');?>">Plan du site</a>
        </div>
        <div class="footer-rights text-center pb-2">
            <p>Tous droits réservés 2020 - <?= date('Y')?> Nam Lee / Développé par <a target="_blank" href="https://namlee-dev.com">Nam Lee</a></p>
        </div>
    </footer>
</div>
<!-- Menu in JS -->
<script src="<?= $assetsBaseUri ?>js/nav.js" defer></script>
<!-- Bootstrap scripts -->
<script src="<?= $assetsBaseUri ?>js/jquery.min.js" defer></script>
<script src="<?= $assetsBaseUri ?>js/popper.min.js" defer></script>
<script src="<?= $assetsBaseUri ?>js/bootstrap.min.js" defer></script>
</body>

</html>