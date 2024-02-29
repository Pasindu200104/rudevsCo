<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Rudevs</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class=" container-fluid">
        <div class="preloader">
            <div class="spinner">LOADING...</div>
        </div>
        <div class="row">
            <?php include "header.php"; ?>
            <div class="col-12">
                <div class="row bg d-flex justify-content-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="row text-white mt-lg-0 mt-md-0 mt-5">
                            <span class="ru mt-5 fw-bolder text-center text-info A" data-aos="fade-up" data-aos-duration="1000">About Us</span><br><br>
                            <span class="fw-bold" data-aos="fade-up" data-aos-duration="1000">Welcome to Rudevs, where innovation meets imagination in the realm of
                                game development! At Rudevs, we pride ourselves on our multidimensional
                                approach, driven by four dynamic departments :</span>
                            <div class="col-12 " data-aos="zoom-in" data-aos-duration="1000">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mt-3 mb-3 border border-2 border-white rounded-end-5 p-4" data-aos="flip-left" data-aos-duration="1000">
                                        <span><b>01.Game Development: </b><br>Our passionate team of designers, developers, and artists
                                            collaborates to craft immersive gaming experiences that captivate audiences worldwide.</span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 mt-3 mb-3 border border-2 border-white rounded-start-5 p-4" data-aos="flip-right" data-aos-duration="1000">
                                        <span><b>02.AI Integration: </b><br>Leveraging the power of artificial intelligence, our experts infuse
                                            intelligence and adaptability into every aspect of our games, creating lifelike interactions
                                            and challenging scenarios.</span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 mt-3 mb-3 border border-2 border-white rounded-end-5 p-4" data-aos="flip-left" data-aos-duration="1000">
                                        <span><b>03.IoT Integration: </b><br>Exploring the frontier of connectivity, our IoT department
                                            pioneers the integration of real-world devices into gaming environments,
                                            offering players unprecedented levels of immersion and interaction.</span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 mt-3 mb-3 border border-2 border-white rounded-start-5 p-4" data-aos="flip-right" data-aos-duration="1000">
                                        <span><b>04.Research & Development: </b><br>Committed to pushing boundaries and exploring the unknown,
                                            our research team continually seeks to innovate and redefine the possibilities
                                            of gaming technology, driving the industry forward.</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row" data-aos="fade-up" data-aos-duration="1000">
                            <span class="ru mt-5 fw-bolder text-center text-info A">Our Vision</span><br><br>
                            <span class="fw-bold text-white border border-2 border-white p-3">To revelutionize the industry by creating immersive and innovative experiences that trancend
                                boundaries, captivate imaginations, and push the limits of virtual world</span>
                        </div>
                        <div class="row" data-aos="fade-up" data-aos-duration="1000">
                            <span class="ru mt-5 fw-bolder text-center text-info A">Our Mission</span><br><br>
                            <span class="fw-bold text-white border border-2 border-white p-3">Empower everyone worldwide through cutting edge technology, creative story
                                telling and unparalleled experience, fostering a global community that celebrates the joy
                                of technology.One pixel at a time , to redefine the possibilities of interactive entertainment
                                ancreate lasting memories</span>
                        </div>
                        <div class="row" data-aos="fade-up" data-aos-duration="1000">
                            <span class="ru mt-5 fw-bolder text-center text-info A">Our Objectives</span><br><br>
                            <div class="col-12 ">
                                <div class="row text-white">
                                    <div class="col-lg-6 col-md-6 col-12 mt-3 mb-3 border border-2 border-white rounded-end-5 p-4" data-aos="flip-left" data-aos-duration="1000">
                                        <span><b>01.Innovation Leadership: </b><br>Continously push the boundaries of technology and creativity
                                            to deliver ground braking gaming experiences that set industry standards</span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 mt-3 mb-3 border border-2 border-white rounded-start-5 p-4" data-aos="flip-right" data-aos-duration="1000">
                                        <span><b>02.Global commuity building: </b><br>Cultivate vibrant and inclusive gaming community by
                                            fostering positive interactions</span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 mt-3 mb-3 border border-2 border-white rounded-end-5 p-4" data-aos="flip-left" data-aos-duration="1000">
                                        <span><b>03.Technological excellence: </b><br>Invest in research and development to stay at the
                                            forefront of tecnological advancement</span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 mt-3 mb-3 border border-2 border-white rounded-start-5 p-4" data-aos="flip-right" data-aos-duration="1000">
                                        <span><b>04.Talent development: </b><br>Attract, nurture and retain top-tier talent to drive creativity,
                                            innovation and excellence in every aspect of game development</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php include "footer.php"; ?>
        </div>
    </div>
    <script>
        // Wait for the page to load
        window.addEventListener('load', function() {
            // Hide the preloader and show the content
            document.querySelector('.preloader').style.display = 'none';
            document.querySelector('.content').style.display = 'block';
        });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>