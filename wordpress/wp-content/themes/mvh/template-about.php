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
    <div class="builder wrap padding-page">
        <h2 class="title title--40 title__bottom-center title__center" aria-level="2" role="heading">
            <?= __('A Propos de nous', 'wp'); ?>
        </h2>

    </div>
</div>

<?php include('footer.php'); ?>