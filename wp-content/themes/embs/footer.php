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
                    <?php
                    $email = embs_get_footer_email();
                    ?>
                    <strong><?php echo esc_html($email['label']); ?></strong>
                    <span class="email">
                        <img src="<?php echo esc_url($email['icon']); ?>" alt="<?php echo esc_attr($email['icon_alt']); ?>" />
                        <?php echo esc_html($email['address']); ?>
                    </span>
                </div>
                <?php
                $address = embs_get_footer_address();
                if (! empty($address)) {
                ?>
                    <div class="footer-address">
                        <span class="address">
                            <?php echo esc_html($address); ?>
                        </span>
                    </div>
                <?php
                }
                ?>
                <div class="social-icons">
                    <?php
                    $social_links = embs_get_social_links();
                    foreach ($social_links as $link) {
                    ?>
                        <a href="<?php echo esc_url($link['url']); ?>" target="_blank" class="icon-link">
                            <img src="<?php echo esc_url($link['icon']); ?>" alt="<?php echo esc_attr($link['icon_alt']); ?>" />
                        </a>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <div class="footer-right">
                <?php
                $copyright = embs_get_footer_copyright();
                ?>
                Copyright <?php echo date('Y'); ?> - <?php echo esc_html($copyright['organization']); ?> | <?php echo esc_html($copyright['text']); ?>
            </div>
        </div>
    </div>
</footer>

<script>
    jQuery(document).ready(function($) {
        $('.owl-carousel-1').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000, // time in ms (3000 = 3 seconds)
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                900: {
                    items: 3
                },
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
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                900: {
                    items: 3
                },
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
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
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
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        });

        $('#toggle-menu').click(function() {
            $(this).toggleClass('active');
            $('#slide-menu').toggleClass('active');
        });
    });
</script>

<?php wp_footer(); ?>
</body>

</html>