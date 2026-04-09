<?php get_header(); ?>
<!-- ================= EMBS SECTION ================= -->
<section id="about" class="embs-section">
    <div class="container">
        <div class="col-md-12">
            <?php echo the_content(); ?>
        </div>
    </div>
</section>

<!-- ================= MISSION - VISSION SECTION ================= -->
<section class="mission-vision-section">
    <div class="container">
        <div class="row">
            <!-- Mission -->
            <div class="col-md-6">
                <div class="card mb-4 h-100">
                    <div class="card-shape card-shape-primary">
                        <img src="<?php echo get_field('mission_icon'); ?>" alt="<?php echo get_field('mission_title'); ?>" />
                    </div>
                    <div class="card-body bg-primary">
                        <h2 class="card-title"><?php echo get_field('mission_title'); ?></h2>
                        <p class="card-text">
                            <?php echo get_field('mission_content'); ?>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Vision -->
            <div class="col-md-6 mt-3 mt-md-0">
                <div class="card mb-4 h-100">
                    <div class="card-shape card-shape-secondary">
                        <img src="<?php echo get_field('vision_icon'); ?>" alt="<?php echo get_field('vision_title'); ?>" />
                    </div>
                    <div class="card-body bg-secondary">
                        <h2 class="card-title"><?php echo get_field('vision_title'); ?></h2>
                        <p class="card-text">
                            <?php echo get_field('vision_content'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= UPCOMING EVENTS SECTION ================= -->
<section id="upcoming-events" class="events-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">Upcoming Events</h2>
            </div>
        </div>

        <div class="owl-carousel owl-carousel-1 event-cards">
            <?php
            $args = array(
                'post_type' => 'embs_event',
                'event_category' => 'conference',
                'posts_per_page' => -1,
            );
            $events = new WP_Query($args);
            if ($events->have_posts()) : while ($events->have_posts()) : $events->the_post();
            ?>
                    <div class="event-card">
                        <img
                            src="<?php echo get_the_post_thumbnail_url(); ?>"
                            class="event-card__logo" />
                        <p class="event-card__desc">
                            <?php echo get_the_title(); ?>
                        </p>
                    </div>
            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<!-- ================= MEDIA SECTION ================= -->
<section id="media" class="media-section">
    <div class="container">
        <h2 class="section-title">Media</h2>

        <div class="owl-carousel owl-carousel-2 media-cards">
            <?php
            $args = array(
                'post_type'      => 'attachment',
                'post_status'    => 'inherit',
                'post_mime_type' => 'image',
                'posts_per_page' => -1,
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'media-category',
                        'field'    => 'slug',
                        'terms'    => array('conference'),
                    ),
                ),
            );

            $media = new WP_Query($args);

            if ($media->have_posts()) :
                while ($media->have_posts()) : $media->the_post();

                    $image_url = wp_get_attachment_image_url(get_the_ID(), 'full');
                    $title     = get_the_title();
            ?>
                    <div class="media-card">
                        <?php if ($image_url) : ?>
                            <img
                                src="<?php echo esc_url($image_url); ?>"
                                alt="<?php echo esc_attr($title); ?>"
                                class="event-card__logo">
                        <?php endif; ?>
                    </div>
            <?php
                endwhile;
            else :
                echo '<p>No media found.</p>';
            endif;

            wp_reset_postdata();
            ?>


        </div>

    </div>
</section>

<!-- ================= MEMBERSHIP SECTION ================= -->
<section id="membership" class="membership-section" style="--membership-bg: url('<?php echo get_field('membership_image'); ?>');">
    <div class="container p-0">
        <div class="row g-0">
            <!-- Left Content -->
            <div class="col-md-6 membership-section__content">
                <div class="membership-section__inner">
                    <h2 class="membership-section__title"><?php echo get_field('membership_title'); ?></h2>
                    <p class="membership-section__subtitle">
                        <?php echo get_field('membership_tagline'); ?>
                    </p>
                    <a href="<?php echo get_field('membership_cta_link'); ?>" class="membership-section__btn"><?php echo get_field('membership_cta'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= OFFICE BEARERS SECTION ================= -->
<section id="team" class="office-bearers-section">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <h2 class="section-title text-center">Office Bearers</h2>
            </div>
        </div>

        <div class="bearer-cards">
            <!-- Card -->

            <?php
            $args = array(
                'post_type' => 'team',
                'posts_per_page' => -1
            );

            $teams = new WP_Query($args);

            if ($teams->have_posts()) : while ($teams->have_posts()) : $teams->the_post();

                    $img = ($teams->get_post_thumbnail_url()) ? $teams->get_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/no-member.png';
            ?>

                    <div class="bearer-card">
                        <div class="bearer-card__shape">
                            <img
                                src="<?php echo $img ?>"
                                alt="<?php the_title() ?>"
                                class="bearer-card__photo" />
                        </div>

                        <div class="bearer-card__role"><?php echo get_field('designation')  ?></div>
                        <div class="bearer-card__info">
                            <h3 class="bearer-card__name"><?php the_title() ?></h3>
                            <hr />
                            <p class="bearer-card__contact">Contact : <?php echo get_field('email') ?></p>
                            <a class="bearer-card__bio" href="#">Bio</a>
                        </div>
                    </div>

            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>

        </div>
    </div>
</section>

<!-- event and achievements section -->

<section id="events-&-achievements" class="event-section">
    <div class="container">
        <div class="event-content">
            <h1 class="event-title section-title">
                Events, Achievements & Highlights
            </h1>
            <div class="event-list">
                <?php
                $args = array(
                    'post_type' => 'embs_event',
                    'event_category' => 'highlights',
                    'posts_per_page' => -1,
                );

                $events = new WP_Query($args);
                if ($events->have_posts()) : while ($events->have_posts()) : $events->the_post();
                ?>

                        <article class="event-item">
                            <span><?php the_title(); ?></span>
                            <a href="<?php echo get_permalink(); ?>" class="event-link">
                                <img
                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                                    alt="arrow"
                                    class="arrow" />
                            </a>
                        </article>
                <?php endwhile;
                endif;
                wp_reset_postdata(); ?>

            </div>
        </div>
    </div>
</section>

<!-- stats section  -->
<section id="stats" class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stats-box stats-members">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/grop-users-icon.png"
                    alt="team"
                    class="stats-icon" />
                <div class="stats-details">
                    <h2 class="stats-number"><?php echo get_field('members'); ?></h2>
                    <p class="stats-label">Members</p>
                </div>
            </div>

            <div class="stats-box stats-events">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/event-icon.png"
                    alt="team"
                    class="stats-icon" />
                <div class="stats-details">
                    <h2 class="stats-number"><?php echo get_field('events'); ?></h2>
                    <p class="stats-label">Events</p>
                </div>
            </div>

            <div class="stats-box stats-guests">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/send-icon.png"
                    alt="team"
                    class="stats-icon" />
                <div class="stats-details">
                    <h2 class="stats-number"><?php echo get_field('guests'); ?></h2>
                    <p class="stats-label">Guests Invited</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- conference-section -->
<section id="conference" class="conference-section">
    <div class="container">
        <div class="conference-grid">
            <?php
            $args = array(
                'post_type' => 'embs_event',
                'event_category' => 'highlights',
                'posts_per_page' => -1,
            );

            $events = new WP_Query($args);
            if ($events->have_posts()) : while ($events->have_posts()) : $events->the_post();
            ?>

                    <!-- CARD 1 -->
                    <div class="conference-card">
                        <img
                            src="<?php echo get_the_post_thumbnail_url(); ?>"
                            alt="Conference Image"
                            class="conference-img" />
                        <div class="conference-content">
                            <h3><?php the_title() ?></h3>
                            <p>
                                <?php the_content(); ?>
                            </p>
                            <a href="<?php echo get_permalink(); ?>" class="button-shape button-shape-primary read-more">Read More</a>
                        </div>
                    </div>

            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<!-- // award and milestone section  -->
<section id="awards" class="awards-section">
    <div class="container">
        <h2 class="awards-title">Awards and Milestones</h2>

        <?php
        $args = array(
            'post_type'      => 'embs_award',
            'posts_per_page' => -1
        );
        $awards = new WP_Query($args);
        if ($awards->have_posts()) : while ($awards->have_posts()) : $awards->the_post();
        ?>

                <?php if ($awards->current_post % 2 == 0) { ?>
                    <!-- Block 1 -->
                    <div class="award-item">
                        <div class="award-border">
                            <div class="award-image">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Award Image" />
                            </div>
                        </div>
                        <div class="award-text">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                            <a href="#" class="button-shape button-shape-light read-more-btn">Read More</a>
                        </div>
                    </div>
                <?php } else { ?>
                    <!-- Block 2 (reversed) -->
                    <div class="award-item reverse">
                        <div class="award-text">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                            <a href="#" class="button-shape button-shape-light read-more-btn">Read More</a>
                        </div>
                        <div class="award-border">
                            <div class="award-image">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Award Image" />
                            </div>
                        </div>
                    </div>
                <?php } ?>



        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
</section>

<!-- speakers-section -->
<section id="speakers" class="speakers-section">
    <div class="container">
        <div class="speakers-container">
            <!-- Left Column -->
            <div class="speakers-intro">
                <h2 class="section-title"><?php echo get_field('speaker_title'); ?></h2>
                <p>
                    <?php echo get_field('speaker_content'); ?>
                </p>
            </div>
            <!-- Right Column: Carousel -->
            <div>
                <div class="owl-carousel owl-carousel-4">
                    <?php
                    wp_reset_postdata();
                    $args = array(
                        'post_type' => 'embs_speaker',
                        'posts_per_page' => -1
                    );
                    $speakers = new WP_Query($args);
                    if ($speakers->have_posts()) : while ($speakers->have_posts()) : $speakers->the_post();

                    $img = has_post_thumbnail() ? get_the_post_thumbnail_url() : esc_url(get_template_directory_uri()). "/assets/images/no-speaker.png";
                    ?>
                            <div class="speaker-card flex-fill">
                                <div class="speaker-image">
                                    <img
                                        src="<?php echo $img ?>" 
                                        alt="<?php the_title(); ?>"
                                        class="img-fluid w-100" />
                                </div>
                                <div class="speaker-info">
                                    <h4><?php the_title(); ?></h4>
                                    <span class="affiliation"><?php echo get_field('affiliation'); ?></span>

                                    <?php the_content(); ?>

                                </div>
                            </div>
                    <?php endwhile;
                    endif;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- research-section -->
<section id="research" class="research-section">
    <div class="container">
        <div class="research-intro">
            <h2 class="section-title"><?php echo get_field('research_title') ?></h2>
            <p class="subheading"><?php echo get_field('research_tagline') ?></p>
            <p class="description">
                <?php echo get_field('research_description') ?>
            </p>
        </div>

        <div class="labs">
            <?php
            $args = array(
                'post_type' => 'research',
                'posts_per_page' => -1
            );
            $research = new WP_Query($args);
            ?>

            <div class="lab-list nav flex-column" id="lab-tabs" role="tablist">
                <?php
                $index = 0;
                if ($research->have_posts()) : while ($research->have_posts()) : $research->the_post();
                ?>
                        <p
                            class="nav-link <?php echo $index == 0 ? 'active' : ''; ?>"
                            id="lab<?php echo $index; ?>-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#lab<?php echo $index; ?>"
                            role="tab"
                            aria-controls="lab<?php echo $index; ?>"
                            aria-selected="<?php echo $index == 0 ? 'true' : 'false'; ?>">
                            <?php the_title(); ?>
                        </p>
                <?php $index++;
                    endwhile;
                endif; ?>
            </div>
            <!-- Tab Content -->
            <div class="lab-details tab-content">
                <?php
                $index = 0;
                if ($research->have_posts()) : while ($research->have_posts()) : $research->the_post();
                ?>
                        <div
                            class="tab-pane fade <?php echo $index == 0 ? 'show active' : ''; ?>"
                            id="lab<?php echo $index; ?>"
                            role="tabpanel"
                            aria-labelledby="lab<?php echo $index; ?>-tab">
                            <?php the_content(); ?>
                        </div>
                <?php $index++;
                    endwhile;
                endif;
                wp_reset_postdata(); ?>
            </div>


            <?php wp_reset_postdata(); ?>
        </div>

        <div class="publications">
            <h3>Publications and conference papers</h3>
            <ul>
                <?php
                $args = array(
                    'post_type' => 'publication',
                    'posts_per_page' => -1
                );
                $publication = new WP_Query($args);
                if ($publication->have_posts()) : while ($publication->have_posts()) : $publication->the_post();
                ?>

                        <li>
                            <img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                                alt="arrow"
                                class="arrow" />
                            <?php the_content(); ?>
                        </li>

                <?php endwhile;
                endif;
                wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
</section>

<!-- alumni-section -->
<section id="alumni" class="alumni-section">
    <div class="container">
        <h2 class="section-title"><?php echo get_field('testimonial_title') ?></h2>
        <p class="subtitle"><?php echo get_field('testimonial_tagline') ?></p>

        <div class="owl-carousel owl-carousel-3">

            <?php
            $args = array(
                'post_type' => 'embs_alumni',
                'posts_per_page' => -1,
            );

            $query = new WP_Query($args);
            ?>

            <?php
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>
                    <div class="alumni-grid">
                        <div class="alumni-border">
                            <div class="alumni-card">
                                <div class="alumni-image">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                                </div>
                                <div class="alumni-info">
                                    <div class="alumni-header">
                                        <h3>
                                            <?php the_title(); ?>
                                        </h3>

                                        <?php if (get_field('email')) { ?>
                                            <p class="email">
                                                <img
                                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/mail-icon.png"
                                                    class="icon"
                                                    alt="email icon" />
                                                <?php echo get_field('email'); ?>
                                            </p>
                                        <?php } elseif (get_field('website')) { ?>
                                            <p class="email">
                                                <img
                                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/mail-icon.png"
                                                    class="icon"
                                                    alt="website icon" />
                                                <?php echo get_field('website'); ?>
                                            </p>
                                        <?php } ?>
                                    </div>
                                    <p class="alumni-info__description">
                                        <?php the_content(); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php
                }
            }
            ?>

        </div>


        <div class="grid-links">
            <div>
                <h4>Networking opportunities with industry professionals</h4>
                <ul>
                    <li>
                        <a href="https://www.ku.ac.ae/career-alumni-alumni" target="_blank">
                            <img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                                alt="arrow"
                                class="arrow" />
                            KU Alumni
                        </a>
                    </li>
                    <li>
                        <a href="https://khalifa-csm.symplicity.com/" target="_blank">
                            <img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                                alt="arrow"
                                class="arrow" />
                            KU Simplicity CSM
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mentorship-programs">
                <h4>Mentorship programs for students</h4>
                <ul class="mentorship-list">
                    <li>
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow" />
                        Peer Mentoring Program
                    </li>
                    <li>
                        <a href="https://www.ku.ac.ae/career-alumni-students" target="_blank">
                            <img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                                alt="arrow"
                                class="arrow" />
                            Career & Alumni Services
                        </a>
                    </li>
                    <li>
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow" />
                        Peer Tutoring Program
                    </li>
                    <li>
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow" />
                        Career Fair – Every Fall
                    </li>
                    <li>
                        <a href="https://www.ku.ac.ae/research-centers/center-for-biotechnology-btc/tawjeeh-mentorship-program" target="_blank">
                            <img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                                alt="arrow"
                                class="arrow" />
                            KU Tawjeeh Program
                        </a>
                    </li>

                    <li>
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow" />
                        Majors Day – Ever Fall
                    </li>
                    <li>
                        <a href=": https://www.ku.ac.ae/academics/center-for-teaching-and-learning" target="_blank">
                            <img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                                alt="arrow"
                                class="arrow" />
                            CTL – Student Development
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>