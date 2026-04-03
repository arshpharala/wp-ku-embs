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
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/target-icon.png" alt />
                    </div>
                    <div class="card-body bg-primary">
                        <h2 class="card-title">Mission</h2>
                        <p class="card-text">
                            To bring together students interested in biomedical
                            engineering and support their growth through learning,
                            research, and collaboration.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Vision -->
            <div class="col-md-6 mt-3 mt-md-0">
                <div class="card mb-4 h-100">
                    <div class="card-shape card-shape-secondary">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/eye-icon.png" alt />
                    </div>
                    <div class="card-body bg-secondary">
                        <h2 class="card-title">Vision</h2>
                        <p class="card-text">
                            We aim to explore how technology can help improve healthcare
                            and human well-being. We also aim to build an active and
                            inspiring community where students can share ideas, develop
                            skills, and make a real impact.
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
            <div class="event-card">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/biocas-logo.png"
                    class="event-card__logo"
                    alt="BioCAS 2025" />
                <p class="event-card__desc">
                    21st IEEE Biomedical Circuits and Systems Conference
                </p>
            </div>
            <div class="event-card">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/biocas-logo.png"
                    class="event-card__logo"
                    alt="BioCAS 2025" />
                <p class="event-card__desc">
                    21st IEEE Biomedical Circuits and Systems Conference
                </p>
            </div>
            <div class="event-card">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/biocas-logo.png"
                    class="event-card__logo"
                    alt="BioCAS 2025" />
                <p class="event-card__desc">
                    21st IEEE Biomedical Circuits and Systems Conference
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ================= MEDIA SECTION ================= -->
<section id="media" class="media-section">
    <div class="container">
        <h2 class="section-title">Media</h2>

        <div class="owl-carousel owl-carousel-2 media-cards">
            <div class="media-card">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/media-1.png"
                    alt="Media 1"
                    class="img-fluid" />
            </div>
            <div class="media-card">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/media-2.png"
                    alt="Media 1"
                    class="img-fluid" />
            </div>
            <div class="media-card">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/media-1.png"
                    alt="Media 1"
                    class="img-fluid" />
            </div>
            <div class="media-card">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/media-2.png"
                    alt="Media 1"
                    class="img-fluid" />
            </div>
        </div>

        <!-- Bootstrap Carousel -->
        <!--                <div
                            id="mediaCarousel"
                            class="carousel slide"
                            data-bs-ride="carousel"
                            data-bs-touch="true"
                            >
                            <div class="carousel-inner">
                                 First Slide 
                                <div class="carousel-item active">
                                    <div class="row media-cards">
                                        <div class="col-md-4 col-12 mt-3 mt-md-0">
                                            <div class="media-card">
                                                <img
                                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/media-1.png"
                                                    alt="Media 1"
                                                    class="img-fluid"
                                                    />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mt-3 mt-md-0">
                                            <div class="media-card">
                                                <img
                                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/media-2.png"
                                                    alt="Media 2"
                                                    class="img-fluid"
                                                    />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mt-3 mt-md-0">
                                            <div class="media-card">
                                                <img
                                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/media-1.png"
                                                    alt="Media 3"
                                                    class="img-fluid"
                                                    />
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                 Second Slide 
                                <div class="carousel-item">
                                    <div class="row media-cards">
                                        <div class="col-md-4 col-12 mt-3 mt-md-0">
                                            <div class="media-card">
                                                <img
                                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/media-2.png"
                                                    alt="Media 4"
                                                    class="img-fluid"
                                                    />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mt-3 mt-md-0">
                                            <div class="media-card">
                                                <img
                                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/media-1.png"
                                                    alt="Media 5"
                                                    class="img-fluid"
                                                    />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mt-3 mt-md-0">
                                            <div class="media-card">
                                                <img
                                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/media-2.png"
                                                    alt="Media 6"
                                                    class="img-fluid"
                                                    />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
    </div>
</section>

<!-- ================= MEMBERSHIP SECTION ================= -->
<section id="membership" class="membership-section">
    <div class="container p-0">
        <div class="row g-0">
            <!-- Left Content -->
            <div class="col-md-6 membership-section__content">
                <div class="membership-section__inner">
                    <h2 class="membership-section__title">IEEE EMBS Membership</h2>
                    <p class="membership-section__subtitle">
                        Available offer for professionals and students to join EMBS
                    </p>
                    <a href="#" class="membership-section__btn">Join EMBS Today</a>
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

            <div class="bearer-card">
                <div class="bearer-card__shape">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/member-1.png"
                        alt="Rateb Katmah"
                        class="bearer-card__photo" />
                </div>

                <div class="bearer-card__role">President (PG)</div>
                <div class="bearer-card__info">
                    <h3 class="bearer-card__name">Rateb Katmah</h3>
                    <hr />
                    <p class="bearer-card__contact">Contact : 100060701@ku.ac.ae</p>
                    <a class="bearer-card__bio" href="#">Bio</a>
                </div>
            </div>

            <div class="bearer-card">
                <div class="bearer-card__shape">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/member-1.png"
                        alt="Rateb Katmah"
                        class="bearer-card__photo" />
                </div>
                <div class="bearer-card__role">President (PG)</div>
                <div class="bearer-card__info">
                    <h3 class="bearer-card__name">Rateb Katmah</h3>
                    <hr />
                    <p class="bearer-card__contact">Contact : 100060701@ku.ac.ae</p>
                </div>
            </div>

            <div class="bearer-card">
                <div class="bearer-card__shape">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/member-1.png"
                        alt="Rateb Katmah"
                        class="bearer-card__photo" />
                </div>
                <div class="bearer-card__role">President (PG)</div>
                <div class="bearer-card__info">
                    <h3 class="bearer-card__name">Rateb Katmah</h3>
                    <hr />
                    <p class="bearer-card__contact">Contact : 100060701@ku.ac.ae</p>
                </div>
            </div>

            <div class="bearer-card">
                <div class="bearer-card__shape">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/member-1.png"
                        alt="Rateb Katmah"
                        class="bearer-card__photo" />
                </div>
                <div class="bearer-card__role">President (PG)</div>
                <div class="bearer-card__info">
                    <h3 class="bearer-card__name">Rateb Katmah</h3>
                    <hr />
                    <p class="bearer-card__contact">Contact : 100060701@ku.ac.ae</p>
                </div>
            </div>

            <div class="bearer-card">
                <div class="bearer-card__shape">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/member-1.png"
                        alt="Rateb Katmah"
                        class="bearer-card__photo" />
                </div>
                <div class="bearer-card__role">President (PG)</div>
                <div class="bearer-card__info">
                    <h3 class="bearer-card__name">Rateb Katmah</h3>
                    <hr />
                    <p class="bearer-card__contact">Contact : 100060701@ku.ac.ae</p>
                </div>
            </div>

            <div class="bearer-card">
                <div class="bearer-card__shape">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/member-1.png"
                        alt="Rateb Katmah"
                        class="bearer-card__photo" />
                </div>
                <div class="bearer-card__role">President (PG)</div>
                <div class="bearer-card__info">
                    <h3 class="bearer-card__name">Rateb Katmah</h3>
                    <hr />
                    <p class="bearer-card__contact">Contact : 100060701@ku.ac.ae</p>
                </div>
            </div>

            <div class="bearer-card">
                <div class="bearer-card__shape">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/member-1.png"
                        alt="Rateb Katmah"
                        class="bearer-card__photo" />
                </div>
                <div class="bearer-card__role">President (PG)</div>
                <div class="bearer-card__info">
                    <h3 class="bearer-card__name">Rateb Katmah</h3>
                    <hr />
                    <p class="bearer-card__contact">Contact : 100060701@ku.ac.ae</p>
                </div>
            </div>
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
                <article class="event-item">
                    <span>Lasers in Life Sciences: From 3D Bio Printing to Sensing</span>
                    <a href="#" class="event-link">
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow" />
                    </a>
                </article>
                <article class="event-item">
                    <span>CMHS Undergraduate Research Conference</span>
                    <a href="#" class="event-link">
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow" />
                    </a>
                </article>
                <article class="event-item">
                    <span>Extending the Reach of Bioelectronic Implants</span>
                    <a href="#" class="event-link">
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow" />
                    </a>
                </article>
                <article class="event-item">
                    <span>Extending the Reach of Bioelectronic Implants</span>
                    <a href="#" class="event-link">
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow" />
                    </a>
                </article>
                <article class="event-item">
                    <span>Healthcare Innovation Hackathon 2025</span>
                    <a href="#" class="event-link">
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow" />
                    </a>
                </article>
                <article class="event-item">
                    <span>Women in Emerging Technology</span>
                    <a href="#" class="event-link">
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow" />
                    </a>
                </article>
                <article class="event-item">
                    <span>The Future of Biomaterials</span>
                    <a href="#" class="event-link">
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow" />
                    </a>
                </article>
                <article class="event-item">
                    <span>DSAI 2024 Conference</span>
                    <a href="#" class="event-link">
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow" />
                    </a>
                </article>
                <article class="event-item">
                    <span>Mastering Ubuntu and Python: A Hands-On Coding Workshop</span>
                    <a href="#" class="event-link">
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow" />
                    </a>
                </article>
                <article class="event-item">
                    <span>Open Day</span>
                    <a href="#" class="event-link">
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow" />
                    </a>
                </article>
                <article class="event-item">
                    <span>Breast Cancer Awareness Month Campaign</span>
                    <a href="#" class="event-link">
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow" />
                    </a>
                </article>
                <article class="event-item">
                    <span>Clubs & Chapters Day</span>
                    <a href="#" class="event-link">
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow" />
                    </a>
                </article>
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
                    <h2 class="stats-number">260</h2>
                    <p class="stats-label">Members</p>
                </div>
            </div>

            <div class="stats-box stats-events">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/event-icon.png"
                    alt="team"
                    class="stats-icon" />
                <div class="stats-details">
                    <h2 class="stats-number">11</h2>
                    <p class="stats-label">Events</p>
                </div>
            </div>

            <div class="stats-box stats-guests">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/send-icon.png"
                    alt="team"
                    class="stats-icon" />
                <div class="stats-details">
                    <h2 class="stats-number">986</h2>
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
            <!-- CARD 1 -->
            <div class="conference-card">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/group.png"
                    alt="Conference Image"
                    class="conference-img" />
                <div class="conference-content">
                    <h3>21st IEEE Biomedical Circuits and Systems Conference</h3>
                    <p>
                        Khalifa University was honored to host Professor Jonathan
                        Knowles from University College London for a research seminar on
                        “Future Biomaterials: Biomedical, Medicine, and Other
                        Applications” on Wednesday, February 19, 2025, at the Main
                        Campus Auditorium.
                    </p>
                    <a href="#" class="button-shape button-shape-primary read-more">Read More</a>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="conference-card">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/group.png"
                    alt="Conference Image"
                    class="conference-img" />
                <div class="conference-content">
                    <h3>21st IEEE Biomedical Circuits and Systems Conference</h3>
                    <p>
                        Khalifa University was honored to host Professor Jonathan
                        Knowles from University College London for a research seminar on
                        “Future Biomaterials: Biomedical, Medicine, and Other
                        Applications” on Wednesday, February 19, 2025, at the Main
                        Campus Auditorium.
                    </p>
                    <a href="#" class="button-shape button-shape-primary read-more">Read More</a>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="conference-card">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/group.png"
                    alt="Conference Image"
                    class="conference-img" />
                <div class="conference-content">
                    <h3>21st IEEE Biomedical Circuits and Systems Conference</h3>
                    <p>
                        Khalifa University was honored to host Professor Jonathan
                        Knowles from University College London for a research seminar on
                        “Future Biomaterials: Biomedical, Medicine, and Other
                        Applications” on Wednesday, February 19, 2025, at the Main
                        Campus Auditorium.
                    </p>
                    <a href="#" class="button-shape button-shape-primary read-more">Read More</a>
                </div>
            </div>

            <!-- CARD 4 -->
            <div class="conference-card">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/group.png"
                    alt="Conference Image"
                    class="conference-img" />
                <div class="conference-content">
                    <h3>21st IEEE Biomedical Circuits and Systems Conference</h3>
                    <p>
                        Khalifa University was honored to host Professor Jonathan
                        Knowles from University College London for a research seminar on
                        “Future Biomaterials: Biomedical, Medicine, and Other
                        Applications” on Wednesday, February 19, 2025, at the Main
                        Campus Auditorium.
                    </p>
                    <a href="#" class="button-shape button-shape-primary read-more">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- // award and milestone section  -->
<section id="awards" class="awards-section">
    <div class="container">
        <h2 class="awards-title">Awards and Milestones</h2>

        <!-- Block 1 -->
        <div class="award-item">
            <div class="award-border">
                <div class="award-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/milestone.png" alt="Award Image" />
                </div>
            </div>
            <div class="award-text">
                <h3>Best Regional Student Chapter Award - 2025:</h3>
                <p>
                    The IEEE EMBS Khalifa University Student Chapter has been
                    recognized for its outstanding contributions to the IEEE
                    Engineering in Medicine and Biology Society through impactful
                    student engagement.
                </p>
                <a href="#" class="button-shape button-shape-light read-more-btn">Read More</a>
            </div>
        </div>

        <!-- Block 2 (reversed) -->
        <div class="award-item reverse">
            <div class="award-text">
                <h3>Best Regional Student Chapter Award - 2025:</h3>
                <p>
                    The IEEE EMBS Khalifa University Student Chapter has been
                    recognized for its outstanding contributions to the IEEE
                    Engineering in Medicine and Biology Society through impactful
                    student engagement.
                </p>
                <a href="#" class="button-shape button-shape-light read-more-btn">Read More</a>
            </div>
            <div class="award-border">
                <div class="award-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/milestone.png" alt="Award Image" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- speakers-section -->
<section id="speakers" class="speakers-section">
    <div class="container">
        <div class="speakers-container">
            <!-- Left Column -->
            <div class="speakers-intro">
                <h2 class="section-title">Distinguished Speakers</h2>
                <p>
                    Over the past years, EMBS @KU has hosted several distinguished
                    speakers, leading professionals in research and industry. Lecture
                    topics varied from breakthroughs in biomedical engineering to
                    career pathways and even how to breakthrough with a startup
                    venture! See our past speakers and topics below and on our social
                    media accounts.
                </p>
            </div>

            <!-- Right Column: Carousel -->
            <div>
                <div class="owl-carousel owl-carousel-4">
                    <div class="speaker-card flex-fill">
                        <div class="speaker-image">
                            <img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/speaker.png"
                                alt="Prof. Jonathan Knowles"
                                class="img-fluid w-100" />
                        </div>
                        <div class="speaker-info">
                            <h4>Prof. Jonathan Knowles</h4>
                            <span class="affiliation">University College London</span>
                            <p>
                                Future Biomaterials: Biomedical, Medicine, and Other
                                Applications
                            </p>
                        </div>
                    </div>
                    <div class="speaker-card flex-fill">
                        <div class="speaker-image">
                            <img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/speaker.png"
                                alt="Prof. Jonathan Knowles"
                                class="img-fluid w-100" />
                        </div>
                        <div class="speaker-info">
                            <h4>Prof. Jonathan Knowles</h4>
                            <span class="affiliation">University College London</span>
                            <p>
                                Future Biomaterials: Biomedical, Medicine, and Other
                                Applications
                            </p>
                        </div>
                    </div>
                    <div class="speaker-card flex-fill">
                        <div class="speaker-image">
                            <img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/speaker.png"
                                alt="Prof. Jonathan Knowles"
                                class="img-fluid w-100" />
                        </div>
                        <div class="speaker-info">
                            <h4>Prof. Jonathan Knowles</h4>
                            <span class="affiliation">University College London</span>
                            <p>
                                Future Biomaterials: Biomedical, Medicine, and Other
                                Applications
                            </p>
                        </div>
                    </div>
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
            <div class="lab-list nav flex-column" id="lab-tabs" role="tablist">
                <p
                    class="nav-link active"
                    id="lab1-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#lab1"
                    role="tab"
                    aria-controls="lab1"
                    aria-selected="true">
                    Laboratory of Bioelectronics & Biosystems on Chip
                </p>
                <p
                    class="nav-link"
                    id="lab2-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#lab2"
                    role="tab"
                    aria-controls="lab2"
                    aria-selected="false">
                    The Rehabilitation Lab
                </p>
                <p
                    class="nav-link"
                    id="lab3-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#lab3"
                    role="tab"
                    aria-controls="lab3"
                    aria-selected="false">
                    The MedXAI research group
                </p>
            </div>
            <!-- Tab Content -->
            <div class="lab-details tab-content">
                <div
                    class="tab-pane fade show active"
                    id="lab1"
                    role="tabpanel"
                    aria-labelledby="lab1-tab">
                    <p>
                        Laboratory of Bioelectronics & Biosystems on Chip – led by Dr.
                        Anna-Maria Pappa –
                        <a href="https://www.lab-bbc.com/">https://www.lab-bbc.com/</a>
                        An interdisciplinary group working at the interface between
                        electronics and biology. The BBC Lab focuses on developing
                        technological solutions to unmet clinical needs by taking a
                        multilevel approach, that combines the triad engineering ·
                        interfacing · translating. They interface manmade devices with
                        biology at multiple length scales spanning from subcellular to
                        multicellular systems to even directly interfacing with the
                        human body.
                    </p>
                </div>

                <div
                    class="tab-pane fade"
                    id="lab2"
                    role="tabpanel"
                    aria-labelledby="lab2-tab">
                    <p>
                        The Rehabilitation Lab focuses on rehabilitation engineering,
                        assistive devices, and recovery-focused research. It supports
                        patients through advanced motion capture and biomechanical
                        analysis tools.
                    </p>
                </div>

                <div
                    class="tab-pane fade"
                    id="lab3"
                    role="tabpanel"
                    aria-labelledby="lab3-tab">
                    <p>
                        The MedXAI research group combines AI with medical imaging and
                        diagnostics. Their goal is to enhance clinical decision-making
                        using predictive models and machine learning in healthcare.
                    </p>
                </div>
            </div>
        </div>

        <div class="publications">
            <h3>Publications and conference papers</h3>
            <ul>
                <li>
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                        alt="arrow"
                        class="arrow" />
                    Adaptation Robotics and Cognitive Load: Use of a Supernumerary
                    Finger for Activities of Daily Living.
                </li>
                <li>
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                        alt="arrow"
                        class="arrow" />
                    Musculoskeletal model predictions sensitivity to upper body mass
                    scaling during gait.
                </li>
                <li>
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                        alt="arrow"
                        class="arrow" />
                    Deep Learning Models to Predict Hip Joint Kinetics From Kinematics
                    During Gait.
                </li>
                <li>
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                        alt="arrow"
                        class="arrow" />
                    A Methodology for Quantifying Neurological Adaptation to
                    Physiotherapy in ACL-Injured Patients through Muscle Activity and
                    Brain Connectivity Analysis.
                </li>
                <li>
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                        alt="arrow"
                        class="arrow" />
                    A Ratiometric Conducting Polymer Redox Electrode Comprising of a
                    Functionalized MOF for Dual Signal Bioelectronic Sensing.
                </li>
                <li>
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                        alt="arrow"
                        class="arrow" />
                    Data-driven analysis for the evaluation of cortical mechanics of
                    non-adherent cells
                </li>
                <li>
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                        alt="arrow"
                        class="arrow" />
                    Bacterial Membrane Mimetics: From Biosensing to Disease Prevention
                    and Treatment
                </li>
                <li>
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                        alt="arrow"
                        class="arrow" />
                    Revealing Bioremediation Potential of Novel Indigenous Bacteria
                    from Oil-Contaminated Sites in the UAE: A Combined Bioinformatics
                    and Experimental Approach
                </li>
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
                                        <?php } elseif(get_field('website')) { ?>
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
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow" />
                        KU Alumni
                    </li>
                    <li>
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow" />
                        KU Simplicity CSM
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
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow" />
                        Career & Alumni Services
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
                        Career Fair
                    </li>
                    <li>
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow" />
                        KU Tawjeeh Program
                    </li>

                    <li>
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow" />
                        Majors Day
                    </li>
                    <li>
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow" />
                        CTL – Student Development
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- contact section  -->
<!--        <section id="contact" class="contact-section">
    <div class="container">
        <h2 class="section-title">Contact Us</h2>
        <form class="contact-form">
            <div class="input-row">
                <div class="angled-border">
                    <div class="angled-input">
                        <input type="text" placeholder="Your name" />
                    </div>
                </div>
                <div class="angled-border">
                    <div class="angled-input">
                        <input type="email" placeholder="Your Email" />
                    </div>
                </div>
            </div>
            <div class="input-row">
                <div class="angled-border">
                    <div class="angled-textarea">
                        <textarea
                            placeholder="Your Message"
                            class="textarea"
                            ></textarea>
                    </div>
                </div>
            </div>
            <a href="#" class="button-shape button-shape-dark">Read More</a>
        </form>
    </div>
</section>-->
<?php get_footer(); ?>