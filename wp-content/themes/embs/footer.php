<?php
/**
 * The template for displaying the footer
 *
 * @package embs
 */
?>

<!-- footer section  -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-container">
            <div class="footer-left">
                <div class="footer-mail">
                    <strong>Email Us</strong>
                    <span class="email">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer-mail.png" alt="email icon" />
                        embsclub@ku.ac.ae
                    </span>
                </div>
                <div class="social-icons">
                    <a href="https://linkedin.com" target="_blank" class="icon-link">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/linkedin.png" alt="linkedin" />
                    </a>
                    <a href="https://instagram.com" target="_blank" class="icon-link">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/instagram.png" alt="Instagram" />
                    </a>
                </div>
            </div>

            <div class="footer-right">
                Copyright <?php echo date('Y'); ?> - Khalifa University | All Rights Reserved
            </div>
        </div>
    </div>
</footer>

<script>
    jQuery(document).ready(function ($) {
        $('.owl-carousel-1').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000, // time in ms (3000 = 3 seconds)
            autoplayHoverPause: true,
            responsive: {
                0: {items: 1},
                600: {items: 2},
                900: {items: 3}, 
            }
        });
        $('.owl-carousel-2').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            navText: [
                '<span class="owl-prev-icon"> </span>',
                '<span class="owl-next-icon"> </span>'
            ],
            responsive: {
                0: {items: 1},
                600: {items: 2},
                900: {items: 3}, 
            }
        });
        $('.owl-carousel-3').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            navText: [
                '<span class="owl-prev-icon"> </span>',
                '<span class="owl-next-icon"> </span>'
            ],
            responsive: {
                0: {items: 1},
                600: {items: 1},
                1000: {items: 1}
            }
        });
        $('.owl-carousel-4').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            navText: [
                '<span class="owl-prev-icon"> </span>',
                '<span class="owl-next-icon"> </span>'
            ],
            responsive: {
                0: {items: 1},
                600: {items: 2},
                1000: {items: 2}
            }
        });

        $('#toggle-menu').click(function () {
            $(this).toggleClass('active');
            $('#slide-menu').toggleClass('active');
        });
    });
</script>

<?php wp_footer(); ?>
</body>
</html>
