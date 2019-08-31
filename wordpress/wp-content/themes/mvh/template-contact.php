<?php
/*
Template Name: Page Contact
*/


include('head.php'); ?>
    <body>
<h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
<?php get_header(); ?>
<?php include('navigation.php'); ?>


<div class="builder__background">
    <div class="wrap padding-page">
        <h2 class="title title--40 title__bottom-center title__center" aria-level="2" role="heading">
            <?= __('Contactez-nous', 'wp'); ?>
        </h2>
        <div class="contact-page__container">
            <div class="contact-page__bloc contact-page__bloc--left">
                <div class="contact-page__bloc-flex">
                    <div class="contact-page__flex" itemscope itemtype="http://schema.org/Organization">
                        <figure class="contact-page__logo">
                            <img src="<?= $images . '/../../images/logo-mvh.png'; ?>" class="nav__logo"
                                 srcset="<?= $images . '/../../images/logo-mvh@2x.png 2x'; ?>"  itemprop="logo" alt="Logo du site">
                        </figure>
                        <ul class="footer__place">
                            <li class="footer__street">Rue des charrons n°116</li>
                            <li class="footer__li">4800 Verviers</li>
                            <li class="footer__li">Belgique</li>
                        </ul>
                        <ul>
                            <li class="footer__tel">0478 48 86 34</li>
                            <li class="footer__email"><a href="mailto:mvhrejointoyage@yahoo.fr">mvhrejointoyage@yahoo.fr</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="contact-page__bloc contact-page__bloc--right">
                <?= do_shortcode( '[contact-form-7 id="53" title="Formulaire de contact"]' ); ?>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>