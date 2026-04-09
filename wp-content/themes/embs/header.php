<?php

/**
 * The template for displaying the header
 *
 * @package embs
 */
$inside = (!is_front_page() && !is_home()) ? true : false;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body <?php body_class($inside ? 'inside-page' : ''); ?> id="<?php echo is_front_page() ? 'index-page' : 'inside-page'; ?>">
    <?php wp_body_open(); ?>

    <!-- ================= HERO SECTION ================= -->
    <header id="home">

        <?php
        $banner_image = get_field('banner_image');

        $banner_heading = get_field('banner_heading');

        if (empty($banner_heading)) {
            $banner_heading = get_the_title();
        }



        $banner_tagline = get_field('banner_tagline');
        $banner_cta = get_field('banner_cta');
        $banner_cta_link = get_field('banner_cta_link');

        if (!$banner_image) {
            $banner_image = get_template_directory_uri() . '/assets/images/hero-bg.png';
        }



        ?>

        <div class="hero" style="background-image: url('<?php echo esc_url($banner_image); ?>');">
            <!-- White navigation strip -->
            <div class="hero__nav-strip">
                <div class="container">
                    <div class="row hero__header-bar">
                        <!-- Left Logos -->
                        <div class="col-6 hero__header-logo-bar">
                            <img
                                src="<?php echo esc_url(embs_get_logo('left_1')); ?>"
                                alt="IEEE EMBS"
                                class="hero__logo" />
                            <img
                                src="<?php echo esc_url(embs_get_logo('left_2')); ?>"
                                alt="Khalifa University"
                                class="hero__logo ku" />
                        </div>

                        <!-- Right Logo + Menu -->
                        <div class="hero__right_logo">
                            <img
                                src="<?php echo esc_url(embs_get_logo('right')); ?>"
                                alt="IEEE"
                                class="hero__logo hero__ieee-logo me-3" />
                            <div class="toggle-menu" id="toggle-menu">
                                <div class="bar bar1"></div>
                                <div class="bar bar2"></div>
                                <div class="bar bar3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hero Background + Content -->
            <div class="hero__overlay">
                <div class="container">
                    <div class="row">
                        <!-- Left aligned hero text -->
                        <div class="col-md-10">
                            <div class="hero__content">
                                <h1 class="hero__title">
                                    <?php echo $banner_heading; ?>
                                </h1>
                                <?php if ($banner_cta && $banner_cta_link): ?>
                                    <a href="<?php echo $banner_cta_link; ?>" class="hero__btn"><?php echo $banner_cta; ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="hero__botom-tagline">
                        <?php if ($banner_tagline): ?>
                            <img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pin-drop-icon.png"
                                alt="Location Icon"
                                class="hero__location-icon" />
                            <?php echo $banner_tagline; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Bottom White angled strip -->
            <div class="hero__bottom-strip"></div>
        </div>

        <!-- Slide Menu -->
        <div class="slide-menu" id="slide-menu">
            <?php
            if (has_nav_menu('slide_menu')) {
                wp_nav_menu(array(
                    'theme_location' => 'slide_menu',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => false,
                ));
            } else {
                // Fallback to exactly what the HTML design had if menu isn't configured in admin yet
            ?>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>#home">Home</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>#about">About Us</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>#upcoming-events">Upcoming Events</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>#team">Team</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>#events-&-achievements">Events & Achievements </a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>#conference">Conferences</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>#awards">Awards and Milestones</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>#speakers">Distinguished Speakers</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>#research"> Research & Projects </a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>#alumni">Alumni & Networking</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>#contact">Contact</a></li>
                </ul>
            <?php
            }
            ?>
        </div>
    </header>