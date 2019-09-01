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
    <div class="wrap padding-page">
        <h2 class="title title--40 title__bottom-center title__center" aria-level="2" role="heading">
            <?= the_title(); ?>
        </h2>
    </div>
</div>
<?php include('footer.php'); ?>