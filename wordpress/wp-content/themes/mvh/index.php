<?php
/*
Template Name: Page d’accueil
*/


include( 'head.php' ); ?>

<body>
<h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
<?php get_header( 'home' ); ?>
<?php include( 'navigation.php' ); ?>

<section class="home-who">
    <h2 class="" aria-level="2"
        role="heading"><?= __( 'MVH c\'est &hellip;', 'wp' ); ?></h2>
</section>
<section class="home-chantiers">
    <h2 class="" aria-level="2"
        role="heading"><?= __( 'Notre dernier chantier', 'wp' ); ?></h2>
</section>

<?php include('footer.php'); ?>
