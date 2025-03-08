
<footer class="footer">
    <div class="footer__container">
        <div class="footer__logo">
        <img class="quote__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/header_nomads.png" alt="emag logo">
        </div>
        <ul class="footer__menu">
            <li><a href="#about">Despre noi</a></li>
            <li><a href="#partners">Colaborare</a></li>
        </ul>
        <div class="footer__contacts">
            <h3>Contacte:</h3>
            <p><strong>Mail:</strong> egorbico27@gmail.com</p>
            <p><strong>Mobile:</strong> +373 60 957 805</p>
            <p><strong>Address:</strong> București Sectorul 6, Splaiul INDEPENDENȚEI, Nr. 202B, Camera 42</p>
        </div>
    </div>

    <p>&copy; <?php echo date('Y'); ?> Nomad's. <?php esc_html_e('All rights reserved.', 'nomads'); ?></p>
    <!-- Подключение скрипта Glide.js -->
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/glide.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Первая карусель
        new Glide(".glide-carousel", {
            type: "carousel",
            startAt: 0,
            perView: 3,
            gap: 20,
            breakpoints: {
                1024: { perView: 2 },
                768: { perView: 1 }
            }
        }).mount();

        // Вторая карусель
        new Glide(".review-carousel", {
            type: 'carousel',
            startAt: 0,
            perView: 1,
            gap: 20,
            animationDuration: 800,
            breakpoints: {
                1024: { perView: 1 },
                768: { perView: 1 },
                480: { perView: 1 }
            }
        }).mount();
    });
</script>
    
</footer>
<?php wp_footer(); ?>
</div>
</body>
</html>