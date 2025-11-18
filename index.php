<?php include 'header.php'; ?>


<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background"
        style="background-image: url('assets/img/home/slidebg.png'); background-size: cover; background-position: center;">

        <div class="swiper init-swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <img src="assets/img/home/slide.png" alt="Slide 1" class="img-fluid">
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <img src="assets/img/home/Untitled-1-7.png" alt="Slide 2" class="img-fluid">
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <!-- <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> -->
        </div>

        <style>
            .swiper {
                width: 100%;
                height: 100%;
            }

            .swiper-slide {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .swiper-slide img {
                max-width: 100%;
                height: auto;
            }
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                new Swiper('.init-swiper', {
                    loop: true,
                    speed: 600,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false
                    },
                    // pagination: {
                    //     el: '.swiper-pagination',
                    //     clickable: true
                    // },
                    // navigation: {
                    //     nextEl: '.swiper-button-next',
                    //     prevEl: '.swiper-button-prev'
                    // }
                });
            });
        </script>

    </section>
    <section>
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content">
                    <h1><span>W</span>elcome</h1>
                    <p>Welcome to our website! We invite you to sup from our banquet of Love expressed in the resources
                        provided through our spiritual gifts and talents. We hope that you are refreshed, empowered, and
                        inspired as you peruse the site. This endeavor of God’s love poured upon us, represents a
                        culmination of years of pressing toward the mark of the high calling in Christ Jesus, of
                        studying to
                        show ourselves approved as workmen unto God that need not to be ashamed, rightly dividing the
                        word
                        of truth in all the ways we accomplish same, of sowing our substance and our tears; and of
                        experiencing the transforming power of the Holy Spirit. We look forward to serving you!</p>
                    <div class="post-thumbnail">
                    </div>
                </div>



            </div>
        </div>
    </section>
    <section class="container-fluid qucikbg">
        <div class="container m-auto row">
            <!-- <div class="row"> -->
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 gudlink">
                <div class="quickimg">
                    <a href="/">
                        <img src="assets/img/home/1.jpg" alt="" class="img-responsivepraye">
                    </a>
                </div>
                <div class="title">
                    <a href="/">
                        Online Giving </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 gudlink">
                <div class="quickimg">
                    <a href="/">
                        <img src="assets/img/home/2.jpg" alt="" class="img-responsive">
                    </a>
                </div>
                <div class="title">
                    <a href="/">
                        Prayer Request </a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 gudlink">
                <div class="quickimg">
                    <a href="/">
                        <img src="assets/img/home/3.png" alt="" class="img-responsive">
                    </a>
                </div>
                <div class="title">
                    <a href="/">
                        Products </a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 gudlink">
                <div class="quickimg">
                    <a href="/">
                        <img src="assets/img/home/4.jpg" alt="" class="img-responsive">
                    </a>
                </div>
                <div class="title">
                    <a href="/">
                        Ministry </a>
                </div>
            </div>


        </div>
        <!-- </div> -->
    </section>
</main><!-- /Main content goes here -->
<?php include 'footer.php'; ?>