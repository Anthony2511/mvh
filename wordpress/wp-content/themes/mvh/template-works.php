<?php
/*
Template Name: Page Chantiers
*/


include('head.php'); ?>

    <body>
<h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
<?php get_header(); ?>
<?php include('navigation.php'); ?>

<div class="builder__background">
    <div class="wrap padding-page">
        <h2 class="title title--40 title__bottom-center title__center" aria-level="2" role="heading">
            <?= __('Tous nos chantiers', 'wp'); ?>
        </h2>

        <?php $posts = new WP_Query([
            'posts_per_page' => -1,
            'post_type' => 'works',
            'meta_key'			=> 'date-start',
            'orderby'			=> 'meta_value',
            'order'				=> 'DESC'
        ]); ?>
        <div class="wrap works-page__container">
            <?php if ($posts->have_posts()) : while ($posts->have_posts()):
            $posts->the_post(); ?>
            <div class="works-page__wrap" id="post-<?php the_ID(); ?>">
                <?php $homeWorks = get_field('img-presentation'); ?>
                <figure class="works-page__figure">
                    <?php if (!empty($homeWorks)): ?>
                        <?php $size = 'works-card';
                        $thumb = $homeWorks['sizes'][$size]; ?>
                        <img src="<?= $thumb; ?>" alt="<?= $homeNews['alt']; ?>" width="527" height="342">
                    <?php endif; ?>
                    <?php $worksID = $post->ID; ?>
                    <?php if ( wp_get_taxonomies( $worksID, 'category' ) ): ?>
                        <span class="home-chantiers__category"><?= wp_get_taxonomies( $worksID, 'category' ); ?></span>
                    <?php endif; ?>
                </figure>
                <section class="works-page__bloc">
                    <h3 aria-level="3" role="heading" class="title title--25 title__bottom-left">
                        <?= the_title(); ?>
                    </h3>
                    <div class="works-page__infos">
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
                <a href="<?php the_permalink(); ?>" class="home-chantiers__link">
                    <span class="hidden"><?= __('Voir le chantier', 'wp'); ?></span>
                </a>
            </div>
                <?php wp_reset_postdata(); ?>
            <?php endwhile;
            endif; ?>
        </div>
    </div>

</div>

<?php include('footer.php'); ?>