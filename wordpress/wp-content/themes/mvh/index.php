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
        <h2 class="title title--40 title__bottom-center title__center" aria-level="2"
            role="heading"><?= __('Notre dernier chantier', 'wp'); ?></h2>

        <?php $posts = new WP_Query([
            'posts_per_page' => 1,
            'post_type' => 'works',
            'orderby' => 'post-date',
            'order' => 'ASC'
        ]); ?>

        <?php if ($posts->have_posts()) : while ($posts->have_posts()): $posts->the_post(); ?>
            <div class="home-chantiers__bloc wrap" id="post-<?php the_ID(); ?>">
                <div class="home-chantiers__wrap">
                    <?php $homeWorks = get_field('img-presentation'); ?>
                    <figure class="home-chantiers__figure">
                        <?php if (!empty($homeWorks)): ?>
                            <?php $size = 'works-card';
                            $thumb = $homeWorks['sizes'][$size]; ?>
                            <img src="<?= $thumb; ?>" alt="<?= $homeNews['alt']; ?>" width="527" height="342">
                        <?php endif; ?>
                    </figure>
                </div>
                <div class="home-chantiers__container">
                    <section class="home-chantiers__infos">
                        <h3 aria-level="3" role="heading" class="title title--25 title__bottom-left">
                            <?= the_title(); ?>
                        </h3>
                        <div class="home-chantiers__bloc-date">
                            <span class="home-chantiers__strong-date">Réalisation :&nbsp;</span>
                            <time datetime="" class="home-chantiers__date"><?= ucfirst(get_field('date-start')); ?>
                                - <?= ucfirst(get_field('date-end')); ?></time>
                        </div>
                        <div class="wysiwyg">
                            <?= wp_trim_words(get_field('description-work'), 25, '...'); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="button button--white"
                           title="Vers la page du chantier : <?= the_title(); ?>">
                            <span><?= __('Voir le chantier', 'wp'); ?></span>
                            <i class="button--chantier"></i>
                        </a>
                    </section>
                </div>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php include('footer.php'); ?>
