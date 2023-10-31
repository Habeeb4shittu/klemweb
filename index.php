<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once __DIR__ . './includes/styles.php' ?>
    <title>Klemweb</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>



<body>
    <?php require_once __DIR__ . './includes/nav.php' ?>
    <section class="index">



        <a href=""> <img src="./assets/images/logos/kindex-01.png" alt=""></a>
        <a href="">
            <div class="explore">Explore Courses</div>
        </a>



        <div class="mores">
            <div>
                <span>Become a Klemwebite</span>
                <a href=""><i class="fas fa-arrow-right-long"></i></a>
            </div>
            <div>
                <span>Explore our Courses</span>
                <a href=""><i class="fas fa-arrow-right-long"></i></a>
            </div>
            <div>
                <span>Get Our Latest News</span>
                <a href=""><i class="fas fa-arrow-right-long"></i></a>
            </div>
        </div>
    </section>
    <section class="why-choose-us">
        <div class="contain">
            <div class="img first">
                <img src="./assets/images/accreditation.svg" alt="">
                <span class="acc">Accreditation</span>
                <p>Our training programme are widely accredited and we have some of our students across the world.</p>
            </div>
            <div class="img">
                <img src="./assets/images/opportunities.svg" alt="">
                <span class="opp">Opportunities</span>
                <p>Through the different components of our training programs, you will be exposed to wide access to both
                    local and International opportunities. </p>
            </div>
            <div class="img">
                <img src="./assets/images/affordabability.svg" alt="">
                <span class="aff">Affordabilities</span>
                <p>We give an affordable training and services without compromising it's optimal quality.</p>
            </div>
        </div>
        <div></div>
        <div></div>
    </section>
    <section class="join-us">
        <div class="img">
            <img src="./assets/images/logos/join-01.png" alt="">

            <a href="" class="join">Join Klemweb</a>
        </div>

    </section>
    <section class="reviews">
        <div class="swiper">
            <h1>STUDENT'S REVIEWS</h1>
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <span><i class="fas fa-quote-left quote"></i></span>
                    <h4>Klemweb has really worked their way through making me an expert in Front-end Development. I
                        would
                        really recommend Klemweb.</h4>
                    <div class="details">
                        <div class="img">
                            <img src="./assets/images/abbey-removebg-preview.png" alt="">
                        </div>
                        <div class="person">
                            <span>Agbanigo Abiodun</span>
                            <span>Full Stack Developer</span>
                        </div>
                    </div>


                </div>
                <div class="swiper-slide"> <span><i class="fas fa-quote-left quote"></i></span>
                    <h4>Klemweb's teaching method has always been the best, it is a great thing having this kind of
                        Institute in this locality. Klemweb to the World </h4>
                    <div class="details">
                        <div class="img">
                            <img src="./assets/images/mercy-removebg-preview.png" alt="">
                        </div>
                        <div class="person">
                            <span>Adeniyi Mercy </span>
                            <span>Robotics & A I </span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"> <span><i class="fas fa-quote-left quote"></i></span>
                    <h4>Full stack development was once like jargons to me, but Klemweb made it an acquired feat for me.
                        Klemweb is the best</h4>
                    <div class="details">
                        <div class="img">
                            <img src="./assets/images/vic-removebg-preview.png" alt="">
                        </div>
                        <div class="person">
                            <span>Awosemo Victor </span>
                            <span>Front-end developer </span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"> <span><i class="fas fa-quote-left quote"></i></span>
                    <h4>Klemweb has really worked their way through making me an expert in Front-end Development. I
                        would
                        really recommend Klemweb.</h4>
                    <div class="details">
                        <div class="img">
                            <img src="./assets/images/abbey-removebg-preview.png" alt="">
                        </div>
                        <div class="person">
                            <span>Name</span>
                            <span>Email</span>
                        </div>
                    </div>
                </div>

                ...
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 1000,
                disableOnInteraction: false,
            },
            breakpoints: {
                100: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
    <?php require_once __DIR__ . './includes/faq.php' ?>
    <?php require_once __DIR__ . './includes/footer.php' ?>
    <?php require_once __DIR__ . './includes/scripts.php' ?>
</body>


</html>