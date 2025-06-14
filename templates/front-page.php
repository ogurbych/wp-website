<?php
/**
 * Template Name: Front Page
 * Description: Custom landing page template for the animal shelter theme.
 */

get_header();
?>

<section class="hero-banner">
    <div class="container">
        <h1>Welcome to Our Animal Shelter</h1>
        <p>We provide safe havens for animals and help them find loving homes.</p>
    </div>
</section>

<section id="offerings" class="offerings">
    <h2>What We Offer</h2>
    <div class="cards">
        <article class="card">
            <h3>Adoption</h3>
            <p>Find your new best friend today.</p>
            <button class="btn btn-primary"><span class="dashicons dashicons-pets"></span>Adopt Now</button>
        </article>
        <article class="card">
            <h3>Volunteer</h3>
            <p>Join us and make a difference.</p>
            <button class="btn btn-secondary"><span class="dashicons dashicons-groups"></span>Join Us</button>
        </article>
        <article class="card">
            <h3>Donate</h3>
            <p>Your support saves lives.</p>
            <button class="btn btn-primary"><span class="dashicons dashicons-heart"></span>Donate</button>
        </article>
        <article class="card">
            <h3>Foster</h3>
            <p>Provide a temporary home for animals in need.</p>
            <button class="btn btn-secondary"><span class="dashicons dashicons-admin-home"></span>Become Foster</button>
        </article>
    </div>
</section>

<section class="animal-gallery">
    <h2>Meet Our Animals</h2>
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assests/image-slider-1.png' ); ?>" alt="Animal 1"></div>
            <div class="swiper-slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assests/image-slider-2.png' ); ?>" alt="Animal 2"></div>
            <div class="swiper-slide"><img src="<?php echo esc_url( get_template_directory_uri() . '/assests/image-slider-3.png' ); ?>" alt="Animal 3"></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>

<section id="contact" class="contact-section">
    <h2>Contact Us</h2>
    <div class="contact-card">
        <div class="contact-inner">
            <form class="contact-form">
                <label for="contact-name">Name</label>
                <input type="text" id="contact-name" name="name" required>

                <label for="contact-email">Email</label>
                <input type="email" id="contact-email" name="email" required>

                <label for="contact-message">Message</label>
                <textarea id="contact-message" name="message" rows="5" required></textarea>

                <button type="submit" class="btn btn-primary"><span class="dashicons dashicons-email-alt2"></span>Send Message</button>
            </form>
            <div class="contact-info">
                <p><span class="dashicons dashicons-location"></span>123 Shelter Ave, Cityville</p>
                <p><span class="dashicons dashicons-email"></span>info@example.com</p>
                <p><span class="dashicons dashicons-phone"></span>(555) 555-5555</p>
            </div>
        </div>
        <iframe class="contact-map" src="https://maps.google.com/maps?q=New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" loading="lazy"></iframe>
    </div>
</section>

<?php
get_footer();
