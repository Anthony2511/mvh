<?php

if ( !post_type_exists( 'works' ) ) {
    function register_works_type() {
        register_post_type('works', [
            'label'         => 'Chantiers',
            'labels'        => [
                'all_items' => 'Toutes les chantiers en base de données',
                'singular_name' => 'work',
                'add_new_item'  => 'Ajouter un nouveau chantier',
                'add_new'  => 'Ajouter un nouveau chantier',
            ],
            'hierarchical'    => true,
            'description'   => 'Permet d’ajouter des chantiers',
            'public'        => true,
            'menu_icon'     => 'dashicons-hammer',
            'rewrite' => [
                'with_front' => false,
            ],
            'supports' => ['title', 'thumbnail', 'custom-fields']
        ]);
    }

    function works_categories_init() {
        register_taxonomy(
            'category',
            'works',
            [
                'label' => __( 'Type de chantiers' ),
                'hierarchical'    => true,
            ]
        );
    }

    add_action('init', 'register_works_type');
    add_action( 'init', 'works_categories_init' );

}