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
                <div class="swiper-slide"><img src="https://via.placeholder.com/600x400?text=Animal+1" alt="Animal 1"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/600x400?text=Animal+2" alt="Animal 2"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/600x400?text=Animal+3" alt="Animal 3"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <section class="contact-us">
        <h2>Contact Us</h2>
        <form class="contact-form">
            <label for="contact-name">Name</label>
            <input id="contact-name" name="contact-name" type="text" required>
            <label for="contact-email">Email</label>
            <input id="contact-email" name="contact-email" type="email" required>
            <label for="contact-message">Message</label>
            <textarea id="contact-message" name="contact-message" rows="4" required></textarea>
            <button type="submit">Send Message</button>
        </form>
        <div class="contact-info">
            <p>123 Shelter Lane, Petville</p>
            <p>Phone: (555) 123-4567</p>
            <p>Email: info@example.com</p>
        </div>
    </section>
</main>
<?php get_footer(); ?>
