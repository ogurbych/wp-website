<?php get_header(); ?>

<main id="primary" class="site-main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="hero-banner single-hero">
        <div class="container">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <p class="post-date"><?php echo get_the_date(); ?></p>
        </div>
    </section>

        <article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="featured-image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <div class="post-content">
                <?php the_content(); ?>
            </div>

            <div class="share-links">
                <?php
                $share_url   = urlencode( get_permalink() );
                $share_title = urlencode( get_the_title() );
                ?>
                <a class="btn btn-primary" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url; ?>" target="_blank" rel="noopener">
                    <span class="dashicons dashicons-facebook"></span>
                    <span class="screen-reader-text">Share on Facebook</span>
                </a>
                <a class="btn btn-secondary" href="https://twitter.com/intent/tweet?url=<?php echo $share_url; ?>&text=<?php echo $share_title; ?>" target="_blank" rel="noopener">
                    <span class="dashicons dashicons-twitter"></span>
                    <span class="screen-reader-text">Share on Twitter</span>
                </a>
                <a class="btn btn-primary" href="https://wa.me/?text=<?php echo $share_url; ?>" target="_blank" rel="noopener">
                    <span class="dashicons dashicons-whatsapp"></span>
                    <span class="screen-reader-text">Share on WhatsApp</span>
                </a>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
