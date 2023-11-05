<?php

    add_action('init','theme_init_posttypes');
    
    function theme_init_posttypes() {

        add_theme_support('post-thumbnails');
        
        $product_args = array( 'labels' => array(
            'name' => 'Produkty',
            'singular_name' => 'Produkt',
            'all_items' => 'Wszystkie Produkty',
            'add_new' => 'Dodaj nowy produkt',
            'add_new_item' => 'Dodaj nowy produkt',
            'edit_item' => 'Edytuj Produkt',
            'new_item' => 'Nowy produkt',
            'view_item' => 'Zobacz produkt',
            'search_items' => 'Szukaj produktów',
            'not_found' => 'Nie znaleziono żadnych produktów', 
            'not_found_in_trash' => 'Nie znaleziono żadnych produktów w koszu', 
            'parent_item_colon' => ''
        ),
        'public' => true, 
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'query_var' => true,
        'rewrite' => true, 
        'capability_type' => 'post', 
        'hierarchical' => false, 
        'menu_position' => 5, 
        'supports' => array(
            'title','editor','author','thumbnail','excerpt','comments','custom-fields', 'post-formats' ),
            'has_archive' => true );
        
        register_post_type('products', $product_args);

    }
?>