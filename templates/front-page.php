<?php
/*
Template Name: Front Page
*/
get_header();
?>
<main class="front-page">
    <section class="hero">
        <h2>Welcome to Our Animal Shelter</h2>
        <p>We provide loving care and find forever homes for animals in need.</p>
    </section>

    <section class="offers">
        <h2>What We Offer</h2>
        <div class="offer-cards">
            <div class="offer-card">
                <h3>Adoption</h3>
                <p>Find your new best friend.</p>
            </div>
            <div class="offer-card">
                <h3>Volunteer</h3>
                <p>Help us care for our animals.</p>
            </div>
            <div class="offer-card">
                <h3>Donate</h3>
                <p>Support our mission.</p>
            </div>
            <div class="offer-card">
                <h3>Foster</h3>
                <p>Provide a temporary home.</p>
            </div>
        </div>
    </section>

    <section class="animal-gallery">
        <h2>Meet Our Animals</h2>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-slider-1.png" alt="Animal 1"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-slider-2.png" alt="Animal 2"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-slider-3.png" alt="Animal 3"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <section class="contact-us">
        <h2>Contact Us</h2>
        <?php echo do_shortcode( '[contact-form-7 id="1" title="Contact form"]' ); ?>
        <div class="contact-info">
            <p>123 Shelter Lane, Petville</p>
            <p>Phone: (555) 123-4567</p>
            <p>Email: info@example.com</p>
        </div>
    </section>
</main>
<?php get_footer(); ?>
