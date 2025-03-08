<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<main>
    <h1><?php esc_html_e('Contact Us', 'nomads'); ?></h1>
    <form action="" method="post">
        <label for="name"><?php esc_html_e('Your Name', 'nomads'); ?></label>
        <input type="text" id="name" name="name" required>
        
        <label for="email"><?php esc_html_e('Your Email', 'nomads'); ?></label>
        <input type="email" id="email" name="email" required>
        
        <label for="message"><?php esc_html_e('Your Message', 'nomads'); ?></label>
        <textarea id="message" name="message" required></textarea>
        
        <button type="submit"><?php esc_html_e('Send', 'nomads'); ?></button>
    </form>
</main>

<?php get_footer(); ?>