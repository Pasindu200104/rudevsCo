<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Rudevs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
                <div class="row d-flex justify-content-center bg">
                    <div class="col-lg-8 col-md-8 col-12 mb-5">
                        <div class="row mt-lg-0 mt-md-0 mt-5">
                            <span class="ru A mt-5 text-info fw-bold text-center" data-aos="fade-up" data-aos-duration="1000">Contact Us</span>
                        </div><br><br>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12 border-2 border-end border-info" data-aos="flip-up" data-aos-duration="1000">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-11 border border-2 rounded border-white">
                                        <div class="row p-3">
                                            <img src="resources/rudevs2.png" alt="rudevslogo" class="col-12">
                                        </div>
                                        <div class="row p-3">
                                            <span class=" text-white">Connect with us via Social Media :</span>
                                        </div>
                                        <div class="row text-white p-3">
                                            <div class="col-3 d-flex justify-content-center">
                                                <a href="#" class=" text-decoration-none text-white"><i class="bi bi-facebook fs-3"></i></a>
                                            </div>
                                            <div class="col-3 d-flex justify-content-center">
                                                <a href="#" class=" text-decoration-none text-white"><i class="bi bi-whatsapp fs-3"></i></a>
                                            </div>
                                            <div class="col-3 d-flex justify-content-center">
                                                <a href="#" class=" text-decoration-none text-white"><i class="bi bi-messenger fs-3"></i></a>
                                            </div>
                                            <div class="col-3 d-flex justify-content-center">
                                                <a href="#" class=" text-decoration-none text-white"><i class="bi bi-instagram fs-3"></i></a>
                                            </div>
                                        </div>
                                        <div class="row text-white p-3">
                                            <span><i class="bi bi-envelope-at-fill"></i> inforudevs@gmail.com</span><br>
                                            <span><i class="bi bi-telephone-fill"></i> 078 140 8623</span><br>
                                            <span><i class="bi bi-telephone-fill"></i> 070 294 4475</span><br>
                                            <span><i class="bi bi-house-door-fill"></i> Kurunegala, Sri Lankka</span><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12 d-flex justify-content-center align-items-center" data-aos="zoom-in-up" data-aos-duration="1000">
                                <div class="row">
                                    <span class=" text-center text-white">Crafting immersive gaming experiences with innovation and creativity. Join us on unforgettable adventures in the world of gaming!</span><br>
                                    <span class=" text-center text-white">*** Send Us a request so we can conntact you ***</span>
                                    <div class="col-12 text-white">
                                        <div class="row d-flex justify-content-center align-items-center">
                                            <div class="col-11  p-3  rounded ">
                                                <div class="row ">
                                                    <div class="col-lg-6 col-12">
                                                        <span class="fw-bold">Name :</span>
                                                        <input type="text" class="form-control bg-transparent text-white" id="name" />
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <span class="fw-bold">Email :</span>
                                                        <input type="text" class="form-control bg-transparent text-white" id="email" />
                                                    </div>
                                                    <div class="col-12">
                                                        <span class="fw-bold">Subject :</span>
                                                        <input type="text" class="form-control bg-transparent text-white" id="sub" />
                                                    </div>
                                                    <div class="col-12">
                                                        <span class="col-12 fw-bold">Description :</span>
                                                        <textarea cols="30" rows="5" class="col-12 form-control bg-transparent text-white rounded" id="desc"></textarea>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-center p-2">
                                                        <button class="btn btn-outline-success col-lg-4 col-8 fw-bold" onclick="submit();">Submit Request</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    <script src="script.js"></script>
</body>

</html>