<?php 

    $query_args =  array( 
        'post_type' => 'products', 
        'posts_per_page' => 5, 
        'meta_query' => array(
            array('key' => 'is_home', 'value' => '1',)
        ),
    );

?>



<section id="offer">
    <div class="offer-container container-big">
        <div class="offer-header-container">
            <h2 class="offer-header h1">Nasze </br> produkty</h2>
            <div></div>
            <a class="button">Pokaż wszystkie</a>
        </div>

        <?php  $products = new WP_Query($query_args); ?>

        <?php if ( $products -> have_posts() ) : ?>

        <div class="offer-items-container">
            <?php while ( $products->have_posts() ) : 
                $products->the_post(); 
                $title = get_the_title();
                $image = get_the_post_thumbnail_url();
                $category = get_field('product_category');
                $img_bg = get_field('image_bg');
                $title_bg = get_field('title_bg');
                $title_color = get_field('title_color');
            ?>
                <div class="offer-item grey">
                    <div class="offer-image" style="background-color: <?php echo $img_bg; ?>">
                        <img src="<?php echo esc_url($image); ?>" alt="<?php echo $title; ?>" />
                    </div>
                    <div class="offer-text" style="background-color: <?php echo $title_bg; ?>">
                        <p class="offer-category" style="color: <?php echo $title_color; ?>">
                            <?php echo $category; ?>
                        </p>
                        <h3 class="offer-title" style="color: <?php echo $title_color; ?>">
                            <?php echo $title; ?>
                        </h3>
                    </div>
                    <a href="#contact" class="button"><span class="right-arrow">&#8594;</span>Zapytaj o produkt</a>
                </div>
            <?php endwhile; ?>
            <a href="<?php echo esc_url(home_url('/')) ?>produkty/#offer" class="offer-link-all h3">
                <span class="right-arrow">&#8594;</span>
                Pokaż <br/>
                wszystkie <br/>
                dostępne <br/>
                produkty <br/>
            </a>
        </div>

        <?php wp_reset_postdata(); ?>
                
        <?php else : ?>
            <h1 class="newsEmpty"><?php __('Brak artykułów do wyświetlenia'); ?></h1>
        <?php endif; ?>
    </div>
</section>