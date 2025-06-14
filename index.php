<?php get_header(); ?>

<main id="main" class="site-main">
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            the_content();
        }
    } else {
        echo '<p>No content found.</p>';
    }
    ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
