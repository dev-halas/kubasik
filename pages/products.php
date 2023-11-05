<?php  

    /* Template Name: Products Page */

    get_header();

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $query_args =  array( 
        'post_type' => 'products', 
        'posts_per_page' => 12, 
        'paged' => $paged
    );
?>

    <main>

        <section class="productHeader" 
            style="
                background-image: url(<?php echo THEME_URL; ?>_dev/img/hero-bg.jpg);
                background-repeat: no-repeat;">
            <div class="productHeader__wrapper container">
                <h2 class="h1">
                    Zapoznaj się z ofertą <br/>
                    produktów.
                </h2>
                <div>
                    <span>Poniżej możesz zapoznać się z częściową ofertą produkowanych przez nas mebli oraz urządzeń.</span>
                </div>
            </div>
            <div class="productHeader__dots">
                <img src="<?php echo THEME_URL; ?>_dev/img/dots.svg" role="presentation">
            </div>
        </section>

        <section id="offer">
            <div class="offer-container container-big">
                <div class="offer-header-container">
                    <h2 class="offer-header h1">Gama </br> produktów</h2>
                    <div></div>
                    <div></div>
                </div>

                <?php  $products = new WP_Query($query_args); ?>

                <?php if ( $products -> have_posts() ) : ?>

                <div class="offer-items-container">
                    <?php while ( $products->have_posts() ) : 
                        $products->the_post(); 
                        $title = get_the_title();
                        $image = get_the_post_thumbnail_url();
                        $category = get_field('product_category');
                    ?>
                        <div class="offer-item grey">
                            <div class="offer-image">
                                <img src="<?php echo esc_url($image); ?>" alt="<?php echo $title; ?>" />
                            </div>
                            <div class="offer-text">
                                <p class="offer-category"><?php echo $category; ?></p>
                                <h3 class="offer-title"><?php echo $title; ?></h3>
                            </div>
                            <a class="button" href="#contact"><span class="right-arrow">&#8594;</span>Zapytaj o produkt</a>
                        </div>
                    <?php endwhile; ?>
                </div>

                <div class="pagination">
                    <?php 
                        echo paginate_links( array( 'total' => $products->max_num_pages) ); 
                    ?>
                </div>

                <?php wp_reset_postdata(); ?>
                        
                <?php else : ?>
                    <h1 class="newsEmpty"><?php __('Brak artykułów do wyświetlenia'); ?></h1>
                <?php endif; ?>
            </div>
        </section>

        <?php get_template_part('/components/contactForm'); ?>
    </main>

<?php get_footer(); ?>