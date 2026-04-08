<?php
$inside = ($page != 'index') ? true : false;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Khalifa University – IEEE EMBS</title>

        <!-- Bootstrap Grid only -->
        <!--        <link
                    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
                    rel="stylesheet"
                    />-->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
            />



        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />


        <!-- Our custom SCSS (compiled to CSS) -->
        <link rel="stylesheet" href="assets/scss/main.css" />
        <?php
        if ($inside) {
            ?>  
            <link rel="stylesheet" href="assets/scss/inside.css" />
            <?php
        }
        ?> 
        <link rel="stylesheet" href="assets/scss/base/responsive.css" />
    </head>
    <body class="<?= ($inside) ? 'inside-page' : ''; ?>" id="<?= $page ?>-page">
        <!-- ================= HERO SECTION ================= -->
        <header id="home" >
            <div class="hero">
                <!-- White navigation strip -->
                <div class="hero__nav-strip">
                    <div class="container">
                        <div class="row hero__header-bar">
                            <!-- Left Logos -->
                            <div class="col-6 hero__header-logo-bar">
                                <img
                                    src="assets/images/embs-logo.png"
                                    alt="IEEE EMBS"
                                    class="hero__logo"
                                    />
                                <img
                                    src="assets/images/ku-logo.png"
                                    alt="Khalifa University"
                                    class="hero__logo ku"
                                    />
                            </div>

                            <!-- Right Logo + Menu -->
                            <div class="hero__right_logo">
                                <img
                                    src="assets/images/ieee-logo.png"
                                    alt="IEEE"
                                    class="hero__logo hero__ieee-logo me-3"
                                    /> 
                                <div class="toggle-menu" id="toggle-menu">
                                    <div class="bar bar1"></div>
                                    <div class="bar bar2"></div>
                                    <div class="bar bar3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
