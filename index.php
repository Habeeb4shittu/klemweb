<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once __DIR__ . './includes/styles.php' ?><title>Klemweb</title>
    <link rel="stylesheet" href="./assets/styles/css/aos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body><?php require_once __DIR__ . './includes/nav.php' ?>
    <section class="index"><a href=""><img src="./assets/images/logos/kindex-01.png" alt=""></a><a href="">
            <div class="explore">Explore Courses</div>
        </a>
        <div class="mores">
            <div data-aos="fade-right"><span>Become a Klemwebite</span><a href=""><i
                        class="fas fa-arrow-right-long"></i></a></div>
            <div data-aos="zoom-in"><span>Explore our Courses</span><a href=""><i
                        class="fas fa-arrow-right-long"></i></a></div>
            <div data-aos="fade-left"><span>Get Our Latest News</span><a href=""><i
                        class="fas fa-arrow-right-long"></i></a></div>
        </div>
    </section>
    <section class="why-choose-us">
        <div class="contain">
            <div class="img first" data-aos="fade-right"><img src="./assets/images/accreditation.svg" alt=""><span
                    class="acc">Accreditation</span>
                <p>Our training programme are widely accredited and we have some of our students across the world.
                </p>
            </div>
            <div class="img" data-aos="fade-bottom"><img src="./assets/images/opportunities.svg" alt=""><span
                    class="opp">Opportunities</span>
                <p>Through the different components of our training programs,
                    you will be exposed to wide access to both local and International opportunities. </p>
            </div>
            <div class="img" data-aos="fade-left"><img src="./assets/images/affordabability.svg" alt=""><span
                    class="aff">Affordabilities</span>
                <p>We give an affordable training and services without compromising it's optimal quality.</p>
            </div>
        </div>
        <div></div>
        <div></div>
    </section>
    <section class="join-us">
        <div class="img"><img src="./assets/images/logos/join-01.png" alt=""><a href="" class="join">Join
                Klemweb</a></div>
    </section>



    <script src="./assets/scripts/aos.js"></script>
    <script>
    AOS.init({
            disable: 'mobile',
            duration: 1000,
            anchorPlacement: 'center-bottom'
        }

    );
    </script>
    <?php require_once __DIR__ . './includes/review.php' ?>
    <?php require_once __DIR__ . './includes/faq.php' ?>
    <?php require_once __DIR__ . './includes/footer.php' ?>
    <?php require_once __DIR__ . './includes/scripts.php' ?>
</body>

</html>