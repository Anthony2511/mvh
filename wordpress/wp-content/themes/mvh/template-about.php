<?php
/*
Template Name: Page About
*/


include('head.php'); ?>

    <body>
<h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
<?php get_header(); ?>
<?php include('navigation.php'); ?>
<div class="builder__background">
    <div class="builder">
        <h2 class="title title--40 title__bottom-center title__center" aria-level="2" role="heading">
            <?= __('A Propos de nous', 'wp'); ?>
        </h2>
        <div class="builder__container">
            <?php if (have_rows('page-builder')): while (have_rows('page-builder')) : the_row(); ?>

                <!-- BLOC IMG -->
                <?php if (get_row_layout() == 'img'): ?>
                    <div class="builder__bloc builder__img wrap">
                        <?php $image = get_sub_field('img-bloc')['sizes']['large']; ?>
                        <figure>
                            <img src="<?= $image; ?>" alt="">
                        </figure>
                    </div>

                <!-- BLOC LEFT IMG + RIGHT TEXT -->
                <?php elseif (get_row_layout() == 'img-text'): ?>
                    <div class="builder__bloc builder__img-text wrap">
                        <?php $imageLeft = get_sub_field('img_left')['sizes']['works-card']; ?>
                        <figure>
                            <img src="<?= $imageLeft; ?>" alt="">
                        </figure>
                        <div class="wysiwyg">
                            <?= the_sub_field('text_right'); ?>
                        </div>
                    </div>

                <!-- BLOC LEFT TEXT + RIGHT IMG -->
                <?php elseif (get_row_layout() == 'text-img'): ?>
                    <div class="builder__bloc builder__img-text wrap">
                        <div class="wysiwyg">
                            <?= the_sub_field('text_left'); ?>
                        </div>
                        <?php $imageRight = get_sub_field('img_right')['sizes']['works-card']; ?>
                        <figure>
                            <img src="<?= $imageRight; ?>" alt="">
                        </figure>
                    </div>

                <!-- BLOC 2 COLONNES + TITRE -->
                <?php elseif (get_row_layout() == 'col-2'): ?>
                    <div class="builder__bloc builder__col wrap">
                        <div class="builder__col-2">
                            <h3 class="title title--25 title__bottom-left" aria-level="3" role="heading">
                                <?= the_sub_field('title-1'); ?>
                            </h3>
                            <div class="wysiwyg">
                                <?= the_sub_field('text-1'); ?>
                            </div>
                        </div>
                        <div class="builder__col-2">
                            <h3 class="title title--25 title__bottom-left" aria-level="3" role="heading">
                                <?= the_sub_field('title-2'); ?>
                            </h3>
                            <div class="wysiwyg">
                                <?= the_sub_field('text-2'); ?>
                            </div>
                        </div>
                    </div>

                <!-- BLOC 3 COLONNES + TITRE -->
                <?php elseif (get_row_layout() == 'col-3'): ?>
                    <div class="builder__bloc builder__col wrap">
                        <div class="builder__col-3">
                            <h3 class="title title--25 title__bottom-left" aria-level="3" role="heading">
                                <?= the_sub_field('title-1'); ?>
                            </h3>
                            <div class="wysiwyg">
                                <?= the_sub_field('text-1'); ?>
                            </div>
                        </div>
                        <div class="builder__col-3">
                            <h3 class="title title--25 title__bottom-left" aria-level="3" role="heading">
                                <?= the_sub_field('title-2'); ?>
                            </h3>
                            <div class="wysiwyg">
                                <?= the_sub_field('text-2'); ?>
                            </div>
                        </div>
                        <div class="builder__col-3">
                            <h3 class="title title--25 title__bottom-left" aria-level="3" role="heading">
                                <?= the_sub_field('title-3'); ?>
                            </h3>
                            <div class="wysiwyg">
                                <?= the_sub_field('text-3'); ?>
                            </div>
                        </div>
                    </div>

                <!-- BLOC 4 COLONNES + TITRE -->
                <?php elseif (get_row_layout() == 'col-4'): ?>
                    <div class="builder__bloc builder__col wrap">
                        <div class="builder__col-4">
                            <h3 class="title title--25 title__bottom-left" aria-level="3" role="heading">
                                <?= the_sub_field('title-1'); ?>
                            </h3>
                            <div class="wysiwyg">
                                <?= the_sub_field('text-1'); ?>
                            </div>
                        </div>
                        <div class="builder__col-4">
                            <h3 class="title title--25 title__bottom-left" aria-level="3" role="heading">
                                <?= the_sub_field('title-2'); ?>
                            </h3>
                            <div class="wysiwyg">
                                <?= the_sub_field('text-2'); ?>
                            </div>
                        </div>
                        <div class="builder__col-4">
                            <h3 class="title title--25 title__bottom-left" aria-level="3" role="heading">
                                <?= the_sub_field('title-3'); ?>
                            </h3>
                            <div class="wysiwyg">
                                <?= the_sub_field('text-3'); ?>
                            </div>
                        </div>
                        <div class="builder__col-4">
                            <h3 class="title title--25 title__bottom-left" aria-level="3" role="heading">
                                <?= the_sub_field('title-4'); ?>
                            </h3>
                            <div class="wysiwyg">
                                <?= the_sub_field('text-4'); ?>
                            </div>
                        </div>
                    </div>

                <!-- BLOC BACKGROUND + TITLE + COL -->
                <?php elseif (get_row_layout() == 'background-title-col'): ?>
                    <div class="builder__bloc builder__background-content">
                        <div class="wrap">
                            <h3 class="title title--40 title__bottom-left" aria-level="3" role="heading">
                                <?= the_sub_field('title'); ?>
                            </h3>
                            <div class="wysiwyg builder__col-2-count">
                                <?= the_sub_field('text'); ?>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                <?php endif;
            endwhile; ?>
            <?php endif; ?>
        </div>


    </div>
</div>

<?php include('footer.php'); ?>