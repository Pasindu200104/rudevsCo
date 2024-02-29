<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Model | Rudevs</title>
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
            <div class="col-12 bg">
                <div class="row mt-5 d-flex justify-content-center">
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="row mt-lg-0 mt-md-0 mt-5">
                            <span class="ru text-info A text-center" data-aos="fade-up" data-aos-duration="1000">Our Business Model</span>
                        </div><br><br>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-11 border border-2 border-info rounded-5 p-3" data-aos="zoom-in-up" data-aos-duration="1000">
                                        <video autoplay muted loop plays-inline class="col-12 rounded-5">
                                            <source src="resources/WhatsApp Video 2024-02-26 at 14.33.14_1a6dfe45.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-11 bg-dark bg-opacity-50 border border-2 border-white p-3 rounded-5"  data-aos="flip-up" data-aos-duration="1000">
                                        <div class="row text-white">
                                            <span class=" text-secondary mb-2">Pixel Alchemy HQ</span>
                                            <span class="">Where Imagination Takes Form</span>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-11 bg-dark bg-opacity-50 border border-2 border-white p-3 rounded-5" data-aos="flip-up" data-aos-duration="1000">
                                        <div class="row text-white">
                                            <span class=" text-secondary mb-2">Concept</span>
                                            <span class="">Imagine a colossal atom, its nucleus a vibrant sphere pulsing with light, representing the heart of Rudevs Corporation. This is Pixel Alchemy HQ, a testament to the company's dedication to crafting groundbreaking experiences, one pixel at a time.</span>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-11 bg-dark bg-opacity-50 border border-2 border-white p-3 rounded-5" data-aos="flip-up" data-aos-duration="1000">
                                        <div class="row text-white">
                                            <span class=" text-secondary mb-2">Design</span>
                                            <span class="">The building itself embodies the "one pixel at a time" philosophy. Its exterior is a mesmerizing mosaic of millions of individual tiles, each meticulously arranged to create ever-shifting patterns and animations. This facade serves as a living canvas, showcasing Rudevs' latest innovations and reflecting the company's dynamic spirit.</span>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-11 bg-dark bg-opacity-50 border border-2 border-white p-3 rounded-5" data-aos="flip-up" data-aos-duration="1000">
                                        <div class="row text-white">
                                            <span class=" text-secondary mb-2">Interior</span>
                                            <span class="">Stepping inside is akin to entering a wonderland of cutting-edge technology and boundless creativity. Collaborative workspaces seamlessly blend with art studios and research labs, fostering a culture of open exchange and experimentation.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br><br>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8 col-md-8 col-12 border border-2 border-info rounded-5 p-3" data-aos="fade-up" data-aos-duration="1000">
                                <img src="resources/team.jpg" class="col-12 rounded-5" alt="team">
                            </div>
                        </div><br>
                        <div class="row d-flex justify-content-center">
                            <div class="btn btn-outline-info col-lg-3 col-md-3 col-8 fs-5 fw-bolder rounded-5" onclick="window.location='key.php';">Read More</div>
                        </div><br>
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