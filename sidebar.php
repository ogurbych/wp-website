<aside id="sidebar" class="sidebar">
    <?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'primary-sidebar' ); ?>
    <?php else : ?>
        <p>Add widgets to the sidebar.</p>
    <?php endif; ?>
</aside>
