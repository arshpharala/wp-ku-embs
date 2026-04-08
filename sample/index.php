<?php 
$page = 'index';
include 'header.php';
?>

<!-- Hero Background + Content -->
<div class="hero__overlay">
    <div class="container">
        <div class="row">
            <!-- Left aligned hero text -->
            <div class="col-md-10">
                <div class="hero__content">
                    <h1 class="hero__title">
                        IEEE Engineering in <br />
                        Medicine and Biology <br />
                        Society
                    </h1>
                    <a href="#" class="hero__btn">Read More</a>
                </div>
            </div>
        </div>
        <div class="hero__botom-tagline">
            <img
                src="assets/images/pin-drop-icon.png"
                alt="Location Icon"
                class="hero__location-icon"
                />
            Khalifa University, Main Campus, Building B, 2nd Floor
        </div>
    </div>
</div>

<!-- Bottom White angled strip -->
<div class="hero__bottom-strip"></div>
</div> 

<?php include 'slide-menu.php'; ?>
</header>
<!-- ================= EMBS SECTION ================= -->
<section id="about" class="embs-section">
    <div class="container">
        <div class="col-md-12">
            <p>
                Welcome to the IEEE Engineering in Medicine and Biology Society
                (EMBS) Chapter at Khalifa University. The chapter is a vibrant
                student-led community dedicated to advancing biomedical engineering
                through innovation, collaboration, and professional development. Our
                chapter serves as a platform for undergraduate and graduate students
                and researchers to engage with cutting-edge topics in healthcare
                technology, connect with experts in the field, and participate in
                workshops, seminars, and outreach activities. We aim to foster
                interdisciplinary growth and contribute to the global EMBS mission
                of applying engineering solutions to improve human health.
            </p>
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
                        <img src="assets/images/target-icon.png" alt />
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
                        <img src="assets/images/eye-icon.png" alt />
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
                    src="assets/images/biocas-logo.png"
                    class="event-card__logo"
                    alt="BioCAS 2025"
                    />
                <p class="event-card__desc">
                    21st IEEE Biomedical Circuits and Systems Conference
                </p>
            </div>
            <div class="event-card">
                <img
                    src="assets/images/biocas-logo.png"
                    class="event-card__logo"
                    alt="BioCAS 2025"
                    />
                <p class="event-card__desc">
                    21st IEEE Biomedical Circuits and Systems Conference
                </p>
            </div>
            <div class="event-card">
                <img
                    src="assets/images/biocas-logo.png"
                    class="event-card__logo"
                    alt="BioCAS 2025"
                    />
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

        <div class="owl-carousel owl-carousel-2 media-cards" >
            <div class="media-card">
                <img
                    src="assets/images/media-1.png"
                    alt="Media 1"
                    class="img-fluid"
                    />
            </div>
            <div class="media-card">
                <img
                    src="assets/images/media-2.png"
                    alt="Media 1"
                    class="img-fluid"
                    />
            </div>
            <div class="media-card">
                <img
                    src="assets/images/media-1.png"
                    alt="Media 1"
                    class="img-fluid"
                    />
            </div>
            <div class="media-card">
                <img
                    src="assets/images/media-2.png"
                    alt="Media 1"
                    class="img-fluid"
                    />
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
                                                    src="assets/images/media-1.png"
                                                    alt="Media 1"
                                                    class="img-fluid"
                                                    />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mt-3 mt-md-0">
                                            <div class="media-card">
                                                <img
                                                    src="assets/images/media-2.png"
                                                    alt="Media 2"
                                                    class="img-fluid"
                                                    />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mt-3 mt-md-0">
                                            <div class="media-card">
                                                <img
                                                    src="assets/images/media-1.png"
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
                                                    src="assets/images/media-2.png"
                                                    alt="Media 4"
                                                    class="img-fluid"
                                                    />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mt-3 mt-md-0">
                                            <div class="media-card">
                                                <img
                                                    src="assets/images/media-1.png"
                                                    alt="Media 5"
                                                    class="img-fluid"
                                                    />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mt-3 mt-md-0">
                                            <div class="media-card">
                                                <img
                                                    src="assets/images/media-2.png"
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
                        src="assets/images/member-1.png"
                        alt="Rateb Katmah"
                        class="bearer-card__photo"
                        />
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
                        src="assets/images/member-1.png"
                        alt="Rateb Katmah"
                        class="bearer-card__photo"
                        />
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
                        src="assets/images/member-1.png"
                        alt="Rateb Katmah"
                        class="bearer-card__photo"
                        />
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
                        src="assets/images/member-1.png"
                        alt="Rateb Katmah"
                        class="bearer-card__photo"
                        />
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
                        src="assets/images/member-1.png"
                        alt="Rateb Katmah"
                        class="bearer-card__photo"
                        />
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
                        src="assets/images/member-1.png"
                        alt="Rateb Katmah"
                        class="bearer-card__photo"
                        />
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
                        src="assets/images/member-1.png"
                        alt="Rateb Katmah"
                        class="bearer-card__photo"
                        />
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
                    <span
                        >Lasers in Life Sciences: From 3D Bio Printing to Sensing</span
                    >
                    <a href="#" class="event-link">
                        <img
                            src="assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow"
                            />
                    </a>
                </article>
                <article class="event-item">
                    <span>CMHS Undergraduate Research Conference</span>
                    <a href="#" class="event-link">
                        <img
                            src="assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow"
                            />
                    </a>
                </article>
                <article class="event-item">
                    <span>Extending the Reach of Bioelectronic Implants</span>
                    <a href="#" class="event-link">
                        <img
                            src="assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow"
                            />
                    </a>
                </article>
                <article class="event-item">
                    <span>Extending the Reach of Bioelectronic Implants</span>
                    <a href="#" class="event-link">
                        <img
                            src="assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow"
                            />
                    </a>
                </article>
                <article class="event-item">
                    <span>Healthcare Innovation Hackathon 2025</span>
                    <a href="#" class="event-link">
                        <img
                            src="assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow"
                            />
                    </a>
                </article>
                <article class="event-item">
                    <span>Women in Emerging Technology</span>
                    <a href="#" class="event-link">
                        <img
                            src="assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow"
                            />
                    </a>
                </article>
                <article class="event-item">
                    <span>The Future of Biomaterials</span>
                    <a href="#" class="event-link">
                        <img
                            src="assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow"
                            />
                    </a>
                </article>
                <article class="event-item">
                    <span>DSAI 2024 Conference</span>
                    <a href="#" class="event-link">
                        <img
                            src="assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow"
                            />
                    </a>
                </article>
                <article class="event-item">
                    <span
                        >Mastering Ubuntu and Python: A Hands-On Coding Workshop</span
                    >
                    <a href="#" class="event-link">
                        <img
                            src="assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow"
                            />
                    </a>
                </article>
                <article class="event-item">
                    <span>Open Day</span>
                    <a href="#" class="event-link">
                        <img
                            src="assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow"
                            />
                    </a>
                </article>
                <article class="event-item">
                    <span>Breast Cancer Awareness Month Campaign</span>
                    <a href="#" class="event-link">
                        <img
                            src="assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow"
                            />
                    </a>
                </article>
                <article class="event-item">
                    <span>Clubs & Chapters Day</span>
                    <a href="#" class="event-link">
                        <img
                            src="assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow"
                            />
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
                    src="assets/images/grop-users-icon.png"
                    alt="team"
                    class="stats-icon"
                    />
                <div class="stats-details">
                    <h2 class="stats-number">260</h2>
                    <p class="stats-label">Members</p>
                </div>
            </div>

            <div class="stats-box stats-events">
                <img
                    src="assets/images/event-icon.png"
                    alt="team"
                    class="stats-icon"
                    />
                <div class="stats-details">
                    <h2 class="stats-number">11</h2>
                    <p class="stats-label">Events</p>
                </div>
            </div>

            <div class="stats-box stats-guests">
                <img
                    src="assets/images/send-icon.png"
                    alt="team"
                    class="stats-icon"
                    />
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
                    src="assets/images/group.png"
                    alt="Conference Image"
                    class="conference-img"
                    />
                <div class="conference-content">
                    <h3>21st IEEE Biomedical Circuits and Systems Conference</h3>
                    <p>
                        Khalifa University was honored to host Professor Jonathan
                        Knowles from University College London for a research seminar on
                        “Future Biomaterials: Biomedical, Medicine, and Other
                        Applications” on Wednesday, February 19, 2025, at the Main
                        Campus Auditorium.
                    </p>
                    <a href="#" class="button-shape button-shape-primary read-more"
                       >Read More</a
                    >
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="conference-card">
                <img
                    src="assets/images/group.png"
                    alt="Conference Image"
                    class="conference-img"
                    />
                <div class="conference-content">
                    <h3>21st IEEE Biomedical Circuits and Systems Conference</h3>
                    <p>
                        Khalifa University was honored to host Professor Jonathan
                        Knowles from University College London for a research seminar on
                        “Future Biomaterials: Biomedical, Medicine, and Other
                        Applications” on Wednesday, February 19, 2025, at the Main
                        Campus Auditorium.
                    </p>
                    <a href="#" class="button-shape button-shape-primary read-more"
                       >Read More</a
                    >
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="conference-card">
                <img
                    src="assets/images/group.png"
                    alt="Conference Image"
                    class="conference-img"
                    />
                <div class="conference-content">
                    <h3>21st IEEE Biomedical Circuits and Systems Conference</h3>
                    <p>
                        Khalifa University was honored to host Professor Jonathan
                        Knowles from University College London for a research seminar on
                        “Future Biomaterials: Biomedical, Medicine, and Other
                        Applications” on Wednesday, February 19, 2025, at the Main
                        Campus Auditorium.
                    </p>
                    <a href="#" class="button-shape button-shape-primary read-more"
                       >Read More</a
                    >
                </div>
            </div>

            <!-- CARD 4 -->
            <div class="conference-card">
                <img
                    src="assets/images/group.png"
                    alt="Conference Image"
                    class="conference-img"
                    />
                <div class="conference-content">
                    <h3>21st IEEE Biomedical Circuits and Systems Conference</h3>
                    <p>
                        Khalifa University was honored to host Professor Jonathan
                        Knowles from University College London for a research seminar on
                        “Future Biomaterials: Biomedical, Medicine, and Other
                        Applications” on Wednesday, February 19, 2025, at the Main
                        Campus Auditorium.
                    </p>
                    <a href="#" class="button-shape button-shape-primary read-more"
                       >Read More</a
                    >
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
                    <img src="assets/images/milestone.png" alt="Award Image" />
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
                <a href="#" class="button-shape button-shape-light read-more-btn"
                   >Read More</a
                >
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
                <a href="#" class="button-shape button-shape-light read-more-btn"
                   >Read More</a
                >
            </div>
            <div class="award-border">
                <div class="award-image">
                    <img src="assets/images/milestone.png" alt="Award Image" />
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
                                src="assets/images/speaker.png"
                                alt="Prof. Jonathan Knowles"
                                class="img-fluid w-100"
                                />
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
                                src="assets/images/speaker.png"
                                alt="Prof. Jonathan Knowles"
                                class="img-fluid w-100"
                                />
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
                                src="assets/images/speaker.png"
                                alt="Prof. Jonathan Knowles"
                                class="img-fluid w-100"
                                />
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
            <h2 class="section-title">Research & Projects</h2>
            <p class="subheading">Featured student and faculty research</p>
            <p class="description">
                Explore the cutting-edge research led by our faculty and students
                across diverse biomedical engineering fields. This spotlight
                highlights the work of principal investigators (PIs) and their labs,
                showcasing impactful innovations in health technologies, biosensors,
                physiological modeling, neural engineering, and more.
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
                    aria-selected="true"
                    >
                    Laboratory of Bioelectronics & Biosystems on Chip
                </p>
                <p
                    class="nav-link"
                    id="lab2-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#lab2"
                    role="tab"
                    aria-controls="lab2"
                    aria-selected="false"
                    >
                    The Rehabilitation Lab
                </p>
                <p
                    class="nav-link"
                    id="lab3-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#lab3"
                    role="tab"
                    aria-controls="lab3"
                    aria-selected="false"
                    >
                    The MedXAI research group
                </p>
            </div>
            <!-- Tab Content -->
            <div class="lab-details tab-content">
                <div
                    class="tab-pane fade show active"
                    id="lab1"
                    role="tabpanel"
                    aria-labelledby="lab1-tab"
                    >
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
                    aria-labelledby="lab2-tab"
                    >
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
                    aria-labelledby="lab3-tab"
                    >
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
                        src="assets/images/arrow-right.png"
                        alt="arrow"
                        class="arrow"
                        />
                    Adaptation Robotics and Cognitive Load: Use of a Supernumerary
                    Finger for Activities of Daily Living.
                </li>
                <li>
                    <img
                        src="assets/images/arrow-right.png"
                        alt="arrow"
                        class="arrow"
                        />
                    Musculoskeletal model predictions sensitivity to upper body mass
                    scaling during gait.
                </li>
                <li>
                    <img
                        src="assets/images/arrow-right.png"
                        alt="arrow"
                        class="arrow"
                        />
                    Deep Learning Models to Predict Hip Joint Kinetics From Kinematics
                    During Gait.
                </li>
                <li>
                    <img
                        src="assets/images/arrow-right.png"
                        alt="arrow"
                        class="arrow"
                        />
                    A Methodology for Quantifying Neurological Adaptation to
                    Physiotherapy in ACL-Injured Patients through Muscle Activity and
                    Brain Connectivity Analysis.
                </li>
                <li>
                    <img
                        src="assets/images/arrow-right.png"
                        alt="arrow"
                        class="arrow"
                        />
                    A Ratiometric Conducting Polymer Redox Electrode Comprising of a
                    Functionalized MOF for Dual Signal Bioelectronic Sensing.
                </li>
                <li>
                    <img
                        src="assets/images/arrow-right.png"
                        alt="arrow"
                        class="arrow"
                        />
                    Data-driven analysis for the evaluation of cortical mechanics of
                    non-adherent cells
                </li>
                <li>
                    <img
                        src="assets/images/arrow-right.png"
                        alt="arrow"
                        class="arrow"
                        />
                    Bacterial Membrane Mimetics: From Biosensing to Disease Prevention
                    and Treatment
                </li>
                <li>
                    <img
                        src="assets/images/arrow-right.png"
                        alt="arrow"
                        class="arrow"
                        />
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
        <h2 class="section-title">Alumni & Networking</h2>
        <p class="subtitle">Success stories of KU EMBS alumni</p>

        <div class="owl-carousel owl-carousel-3">
            <div class="alumni-grid">
                <div class="alumni-border">
                    <div class="alumni-card">
                        <div class="alumni-image">
                            <img
                                src="assets/images/dr-halima-alnaqbi.png"
                                alt="Dr. Halima Alnaqbi"
                                />
                        </div>
                        <div class="alumni-info">
                            <div class="alumni-header">
                                <h3>Dr. Halima Alnaqbi</h3>
                                <p class="email">
                                    <img
                                        src="assets/images/mail-icon.png"
                                        class="icon"
                                        alt="email icon"
                                        />
                                    halima.alnaqbi@ku.ac.ae
                                </p>
                            </div>
                            <p class="description">
                                Dr. Halima Alnaqbi is a leading researcher in human
                                genetics, immunogenetics, and multi-omics. Her work
                                explores genetic susceptibility to immune-related
                                diseases and cancer, with a strong focus on bridging
                                gaps in histocompatibility and organ transplantation
                                within the UAE. She completed her PhD at Khalifa
                                University and holds a master's degree from the
                                University of Pittsburgh. Dr. Alnaqbi also completed a
                                prestigious postdoctoral fellowship in collaboration
                                with KU Leuven, where she investigated novel drug
                                targets for diabetic complications and cancer
                                immunotherapy. Her academic and research contributions
                                exemplify the vital role of biomedical science in
                                advancing precision medicine across the region.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="alumni-grid">
                <div class="alumni-border">
                    <div class="alumni-card">
                        <div class="alumni-image">
                            <img
                                src="assets/images/dr-halima-alnaqbi.png"
                                alt="Dr. Halima Alnaqbi"
                                />
                        </div>
                        <div class="alumni-info">
                            <div class="alumni-header">
                                <h3>Dr. Halima Alnaqbi</h3>
                                <p class="email">
                                    <img
                                        src="assets/images/mail-icon.png"
                                        class="icon"
                                        alt="email icon"
                                        />
                                    halima.alnaqbi@ku.ac.ae
                                </p>
                            </div>
                            <p class="description">
                                Dr. Halima Alnaqbi is a leading researcher in human
                                genetics, immunogenetics, and multi-omics. Her work
                                explores genetic susceptibility to immune-related
                                diseases and cancer, with a strong focus on bridging
                                gaps in histocompatibility and organ transplantation
                                within the UAE. She completed her PhD at Khalifa
                                University and holds a master's degree from the
                                University of Pittsburgh. Dr. Alnaqbi also completed a
                                prestigious postdoctoral fellowship in collaboration
                                with KU Leuven, where she investigated novel drug
                                targets for diabetic complications and cancer
                                immunotherapy. Her academic and research contributions
                                exemplify the vital role of biomedical science in
                                advancing precision medicine across the region.sssssssssssss
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="grid-links">
            <div>
                <h4>Networking opportunities with industry professionals</h4>
                <ul>
                    <li>
                        <img
                            src="assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow"
                            />
                        KU Alumni
                    </li>
                    <li>
                        <img
                            src="assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow"
                            />
                        KU Simplicity CSM
                    </li>
                </ul>
            </div>
            <div class="mentorship-programs">
                <h4>Mentorship programs for students</h4>
                <ul class="mentorship-list">
                    <li>
                        <img
                            src="assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow"
                            />
                        Peer Mentoring Program
                    </li>
                    <li>
                        <img
                            src="assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow"
                            />
                        Career & Alumni Services
                    </li>
                    <li>
                        <img
                            src="assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow"
                            />
                        Peer Tutoring Program
                    </li>
                    <li>
                        <img
                            src="assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow"
                            />
                        Career Fair
                    </li>
                    <li>
                        <img
                            src="assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow"
                            />
                        KU Tawjeeh Program
                    </li>

                    <li>
                        <img
                            src="assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow"
                            />
                        Majors Day
                    </li>
                    <li>
                        <img
                            src="assets/images/arrow-right.png"
                            alt="arrow"
                            class="arrow"
                            />
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
<?php include 'footer.php'; ?>