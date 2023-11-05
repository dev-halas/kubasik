<?php get_header(); ?>

    <main>
        <?php 
            get_template_part('/components/home/hero');
            get_template_part('/components/home/about');
            get_template_part('/components/home/offer');
            get_template_part('/components/contactForm');
        ?>
    </main>

<?php get_footer(); ?>