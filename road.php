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
                        <div class="row">
                            <span class="ru text-info A text-center mt-lg-0 mt-md-0 mt-5" data-aos="fade-up" data-aos-duration="1000">Road map of achieving the model</span>
                        </div><br><br>
                        <div class="row" data-aos="fade-up" data-aos-duration="1000">
                            <span class="fw-bold fs-2 text-white text-center A">Rudevs Corporation</span>
                            <span class="fw-bold text-white text-center text-bg-info ">One Pixel at a Time - A Roadmap to the Future</span>
                        </div><br>
                        <div class="row" data-aos="fade-up" data-aos-duration="1000">
                            <span class="fw-bold text-white text-center">To evolve from pixel-perfect gaming experiences to a pioneer at the intersection of gaming, AI, IoT, and cutting-edge research, crafting intelligent, immersive, and impactful realities.</span>
                        </div><br>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-11 col-md-11 col-12 border border-2 border-info rounded-5 p-3" data-aos="fade-up" data-aos-duration="1000">
                                <video autoplay muted loop plays-inline class="col-12 rounded-5">
                                    <source src="resources/rudevs blender.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div><br><br>
                        <div class="row">
                            <span class="fw-bold A fs-3 text-white text-center" data-aos="fade-up" data-aos-duration="1000">Road Map</span>
                        </div><br>
                        <div class="row text-white">
                            <table class="col-12 border  border-2" data-aos="fade-up" data-aos-duration="1000">
                                <tr class="col-12 border border-2">
                                    <th class=" text-center border-2 border-end">Phase</th>
                                    <th class=" text-center border-2 border-end">Focus</th>
                                    <th class=" text-center ">Key Objectives</th>
                                </tr>
                                <tr class="col-12 border border-2">
                                    <td class="border-2 p-3 border-end">1: Pixel Perfection (Years 1-3)</td>
                                    <td class="border-2 p-3 border-end">Solidify foundation in gaming, build community, initiate AI research</td>
                                    <td class=" p-3"><br>
                                        <span class=" text-info">Gaming: </span><br>
                                        * Release 2-3 high-quality pixel art games across multiple platforms.<br>
                                        * Establish a loyal gaming community through active engagement and feedback incorporation.<br>
                                        * Refine development process with data-driven insights.<br><br>
                                        <span class=" text-info">AI: </span>
                                        <br>
                                        * Build a dedicated AI research team with top talent.<br>
                                        * Initiate research on AI integration in games (NPCs, content generation, personalization).<br>
                                        * Partner with academic institutions and industry leaders for knowledge sharing.<br>
                                    </td>
                                </tr>
                                <tr class="col-12 border border-2">
                                    <td class="border-2 p-3 border-end">2: Expanding Horizons (Years 4-6)</td>
                                    <td class="border-2 p-3 border-end">Infuse AI into games, explore IoT integration, showcase expertise.</td>
                                    <td class=" p-3"><br>
                                        <span class=" text-info">AI in Gaming: </span>
                                        <br>
                                        * Seamlessly integrate AI advancements into new and existing games.<br>
                                        * Develop AI-powered tools for game developers.<br>
                                        * Showcase expertise at industry events and conferences.<br><br>
                                        <span class=" text-info"> IoT Integration:</span>
                                        <br>
                                        * Experiment with incorporating IoT devices into gameplay for unique interactions.<br>
                                        * Research potential of IoT for data collection and game design refinement.<br>
                                        * Partner with IoT hardware manufacturers for co-creation opportunities.<br>
                                    </td>
                                </tr>
                                <tr class="col-12 border border-2">
                                    <td class="border-2 p-3 border-end">3: The Future Pixelated (Years 7 and Beyond)</td>
                                    <td class="border-2 p-3 border-end">Research emerging technologies, diversify into new industries, maintain leadership position.</td>
                                    <td class=" p-3"><br>
                                        <span class=" text-info">Cutting-Edge Research:</span>
                                        <br>
                                        * Conduct research in brain-computer interfaces, augmented reality, and the metaverse.<br>
                                        * Explore potential for future gaming experiences.<br><br>
                                        <span class=" text-info">Industry Diversification:</span>
                                        <br>
                                        * Apply AI and IoT expertise to develop innovative solutions in healthcare, education, and other sectors.<br>
                                        * Foster a culture of continuous learning and adaptation.<br><br>
                                        <span class=" text-info">Leadership and Collaboration:</span>
                                        <br>
                                        * Collaborate with external partners to stay at the forefront of emerging technologies.<br>
                                        * Maintain a strong reputation for innovation and excellence.<br>
                                    </td>
                                </tr>
                            </table>
                        </div><br><br>
                    </div>
                </div>
            </div>
            <?php include "footer.php"; ?>

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