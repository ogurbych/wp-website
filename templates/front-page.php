<?php
/**
 * Template Name: Front Page
 * Description: Custom landing page template for the animal shelter theme.
 */

get_header();
?>

<section class="hero-banner">
    <div class="container">
        <h2>Welcome to Our Animal Shelter</h2>
        <p>We provide safe havens for animals and help them find loving homes.</p>
    </div>
</section>

<section class="offerings">
    <h2>What We Offer</h2>
    <div class="cards">
        <article class="card">
            <h3>Adoption</h3>
            <p>Find your new best friend today.</p>
        </article>
        <article class="card">
            <h3>Volunteer</h3>
            <p>Join us and make a difference.</p>
        </article>
        <article class="card">
            <h3>Donate</h3>
            <p>Your support saves lives.</p>
        </article>
        <article class="card">
            <h3>Foster</h3>
            <p>Provide a temporary home for animals in need.</p>
        </article>
    </div>
</section>

<section class="animal-gallery">
    <h2>Meet Our Animals</h2>
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="https://via.placeholder.com/600x400" alt="Animal 1"></div>
            <div class="swiper-slide"><img src="https://via.placeholder.com/600x400" alt="Animal 2"></div>
            <div class="swiper-slide"><img src="https://via.placeholder.com/600x400" alt="Animal 3"></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>

<section class="contact-section">
    <h2>Contact Us</h2>
    <form class="contact-form">
        <label for="contact-name">Name</label>
        <input type="text" id="contact-name" name="name" required>

        <label for="contact-email">Email</label>
        <input type="email" id="contact-email" name="email" required>

        <label for="contact-message">Message</label>
        <textarea id="contact-message" name="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
    </form>
    <div class="contact-info">
        <p>123 Shelter Ave, Cityville</p>
        <p>Email: info@example.com</p>
        <p>Phone: (555) 555-5555</p>
    </div>
</section>

<?php
get_footer();
