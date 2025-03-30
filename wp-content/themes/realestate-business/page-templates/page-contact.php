<?php
/*
Template Name: Contact
*/
get_header(); ?>

<main class="container">
    <h1>Contact Us</h1>
    <div class="row">
        <div class="col-md-6">
            <form action="" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required class="form-control">
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required class="form-control">
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required class="form-control"></textarea>
                
                <button type="submit" class="btn btn-primary mt-2">Send Message</button>
            </form>
        </div>
        
        <div class="col-md-6">
            <h3>Our Location</h3>
            <p>123 Real Estate Street, City, Country</p>
            <iframe src="https://www.google.com/maps/embed" width="100%" height="250"></iframe>
        </div>
    </div>
</main>

<?php get_footer(); ?>
