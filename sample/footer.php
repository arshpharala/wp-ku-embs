
        <!-- footer section  -->
        <footer class="site-footer">
            <div class="container">
                <div class="footer-container">
                    <div class="footer-left">
                        <div class="footer-mail">
                            <strong>Email Us</strong>
                            <span class="email">
                                <img src="assets/images/footer-mail.png" alt="email icon" />
                                embsclub@ku.ac.ae
                            </span>
                        </div>
                        <div class="social-icons">
                            <a href="https://linkedin.com" target="_blank" class="icon-link">
                                <img src="assets/images/linkedin.png" alt="linkedin" />
                            </a>
                            <a href="https://instagram.com" target="_blank" class="icon-link">
                                <img src="assets/images/instagram.png" alt="Instagram" />
                            </a>
                        </div>
                    </div>

                    <div class="footer-right">
                        Copyright 2025 - Khalifa University | All Rights Reserved
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery --> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


        <!-- Owl Carousel JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <script src="assets/js/main.js"></script>


        <script>
            $(document).ready(function () {
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
                    autoplayTimeout: 3000, // time in ms (3000 = 3 seconds)
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
                    autoplayTimeout: 3000, // time in ms (3000 = 3 seconds)
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
                    autoplayTimeout: 3000, // time in ms (3000 = 3 seconds)
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
            });

            $(document).ready(function () {
                $('#toggle-menu').click(function () {
                    $(this).toggleClass('active');
                    $('#slide-menu').toggleClass('active');
                });
            });
        </script>
    </body>
</html>
