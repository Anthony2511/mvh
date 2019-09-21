<?php
/*
Template Name: Page Single Chantiers
*/


include('head.php'); ?>

    <body>
<h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
<?php get_header(); ?>
<?php include('navigation.php'); ?>

<div class="builder__background">
    <div class="single-work wrap padding-page">
        <a href="<?php the_permalink(20); ?>" class="breadcrumb">
            <span class="breadcrumb__span"><?= __('Retour aux chantiers','wp'); ?></span>
        </a>
        <h2 class="title title--40 title__bottom-center title__center" aria-level="2" role="heading">
            <?= the_title(); ?>
        </h2>
        <div class="single-works">
            <?php $homeWorks = get_field('img-presentation'); ?>
            <figure class="works-page__figure">
                <?php if (!empty($homeWorks)): ?>
                    <?php $size = 'works-card';
                    $thumb = $homeWorks['sizes'][$size]; ?>
                    <img src="<?= $thumb; ?>" alt="<?= $homeNews['alt']; ?>" width="527" height="342">
                <?php endif; ?>
                <?php $worksID = $post->ID; ?>
                <?php if (wp_get_taxonomies($worksID, 'category')): ?>
                    <span class="home-chantiers__category"><?= wp_get_taxonomies($worksID, 'category'); ?></span>
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
            </section>
        </div>
        <div class="single-works__content">
            <h2 class="title title--25 title__bottom-left" aria-level="2" role="heading">
                <?= __('Description détaillée','wp'); ?>
            </h2>
            <div class="wysiwyg single-works__wysiwyg">
                <?= get_field('description-work'); ?>
            </div>
        </div>
        <div class="single-works__gallery">
            <h2 class="title title--25 title__bottom-left" aria-level="2" role="heading">
                <?= __('Quelques photos du chantier','wp'); ?>
            </h2>

            <?php
            $images = get_field('gallery-works');
            $size = 'works-gallery';

            if( $images ): ?>
                <div id="lightgallery" class="single-works__gallery-bloc">
                    <?php foreach( $images as $image ): ?>
                        <a href="<?= $image['url']; ?>" class="single-works__gallery-link">
                            <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <span class="single-works__empty"><?= __('Il n\'y a actuellement pas de photos du chantier','wp'); ?></span>
            <?php endif; ?>
        </div>

    </div>
</div>
<?php include('footer.php'); ?>