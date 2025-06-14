<?php
/**
 * Template Name: Blog Catalog
 * Description: Displays blog posts in a modern grid layout.
 */
get_header();
?>

<section class="hero-banner blog-hero">
    <div class="container">
        <h1>Our Blog</h1>
        <p>Read the latest news and stories from our shelter.</p>
    </div>
</section>

<section class="blog-catalog">
    <div class="post-grid">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </a>
                    <?php endif; ?>
                    <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="post-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary read-more">Read More</a>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
?>
