<?php
/*
Template Name: Page d’accueil
*/


include('head.php'); ?>

<body>
<h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
<?php get_header('home'); ?>
<?php include('navigation.php'); ?>

<div class="home-who padding-page">
    <section class="home-who__left wrap">
        <div class="home-who__wrapper">
            <h2 class="title title--40 title__bottom-left" aria-level="2"
                role="heading"><?= __('MVH c\'est &hellip;', 'wp'); ?></h2>
            <div class="wysiwyg">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nunc sed mi non ante tincidunt accumsan. Sed varius malesuada imperdiet.
                Phasellus rhoncus vitae ex ac elementum. Vivamus leo augue, eleifend et rutrum non, pretium at velit.
                Suspendisse ac viverra leo. Praesent sed consequat ipsum.
                Suspendisse aliquet ante nec nibh malesuada, a dignissim ipsum blandit.
            </div>
            <a href="<?php the_permalink(14); ?>" class="button button--red" title="Vers la page : &Aacute; Propos">
                <span><?= __('En savoir plus', 'wp'); ?></span>
                <i class="button--more"></i>
            </a>
        </div>
    </section>
    <div class="home-who__right">
        <?php $homeAbout = get_field('image-about'); ?>
        <figure class="home-who__figure">
            <?php if (!empty($homeAbout)): ?>
                <?php $size = 'home-who';
                $thumb = $homeAbout['sizes'][$size]; ?>
                <img class="home-who__img" src="<?= $thumb; ?>"
                     alt="<?= $homeAbout['alt']; ?>">
            <?php endif; ?>
        </figure>
    </div>
</div>
<section class="home-chantiers">
    <div class="home-chantiers__wrapper wrap">
        <h2 class="title title--40 title__bottom-center title__center"aria-level="2"
            role="heading"><?= __('Notre dernier chantier', 'wp'); ?></h2>
        <section class="home-chantiers__bloc wrap">
            <div class="home-chantiers__wrap">
                <figure class="home-chantiers__figure">
                    <img src="<?= $images . 'bloc-img.jpg'; ?>" alt="">
                </figure>
            </div>
            <div class="home-chantiers__container">
                <div class="home-chantiers__infos">
                    <h3 aria-level="3" role="heading" class="title title--25 title__bottom-left">Rénovation de façades</h3>
                    <div class="home-chantiers__bloc-date">
                        <span class="home-chantiers__strong-date">Réalisation :&nbsp;</span>
                        <time datetime="" class="home-chantiers__date">Avril 2016 - Juin 2017</time>
                    </div>
                    <div class="wysiwyg">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nunc sed mi non ante tincidunt accumsan. Sed varius malesuada imperdiet.
                        Phasellus rhoncus vitae ex ac elementum. Vivamus leo augue, eleifend et rutrum non, pretium at velit.
                    </div>
                    <a href="<?php the_permalink(14); ?>" class="button button--white" title="Vers la page du chantier : Rénovation de façades">
                        <span><?= __('Voir le chantier', 'wp'); ?></span>
                        <i class="button--chantier"></i>
                    </a>
                </div>
            </div>
        </section>
    </div>
</section>

<?php include('footer.php'); ?>
