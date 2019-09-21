<footer class="footer padding-page">
    <div class="footer__container wrap">
        <section class="footer__bloc">
            <h2 aria-level="2" role="heading" class="title title--25"><?= __('Nous contacter', 'wp'); ?></h2>
            <ul class="footer__place">
                <li class="footer__street">Rue des charrons n°116</li>
                <li class="footer__li">4800 Verviers</li>
                <li class="footer__li">Belgique</li>
            </ul>
            <ul>
                <li class="footer__tel">0478 48 86 34</li>
                <li class="footer__email"><a href="mailto:mvhrejointoyage@yahoo.fr">mvhrejointoyage@yahoo.fr</a></li>
            </ul>
        </section>
        <section class="footer__bloc">
            <h2 aria-level="2" role="heading" class="title title--25"><?= __('Navigation', 'wp'); ?></h2>
            <ul class="footer__nav-list">
                <?php global $post;
                $thePostID = $post->ID; ?>
                <?php foreach (b_get_menu_items('main-nav') as $navItem): ?>
                    <li class="footer__nav-item">
                        <a class="span-home" href="<?= $navItem->url; ?>"
                           title="Vers la page <?php echo $navItem->label; ?>"><span
                                    class="nav__span"><?php echo $navItem->label; ?></span></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section class="footer__bloc">
            <h2 aria-level="2" role="heading" class="title title--25"><?= __('Nous suivre', 'wp'); ?></h2>
            <a href="" class="footer__fcb"><span class="hidden"><?= __('Facebook','wp'); ?></span></a>
        </section>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
<script src="<?= $scripts . 'lghtGallery.js'; ?>"></script>
<script src="<?= $scripts . 'nav.js'; ?>"></script>


</body>
</html>
