<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rudevs Co</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container-fluid">
        <div class="preloader">
            <div class="spinner">LOADING...</div>
        </div>

        <div class="row">
            <!-- <?php include "header.php"; ?> -->
            <div class="col-12">
                <div class="row">
                    <video autoplay muted loop plays-inline class="myVideo p-0 bg-black">
                        <source src="resources/holy_-_35006 (1080p).mp4" type="video/mp4">
                    </video>
                    <div class="col-12 vh-100 bg-dark bg-opacity-50 d-flex justify-content-center align-items-center">
                        <div class="row ">
                            <div class="col-12 d-flex justify-content-center">
                                <div class="row d-flex justify-content-center">
                                    <img src="resources/rudevs.png" alt="rudevs" class="col-lg-5 col-md-5 col-3">
                                </div>
                            </div>
                            <span class=" text-center fw-bold fs-3 text-white">Welcome To</span><br>
                            <span class="ru text-info A text-center mt-2 mb-2">RUDEVS CORPORATION</span>
                            <div class="col-12 d-flex justify-content-center">
                                <div class="row d-flex justify-content-center">
                                    <img src="resources/onepixel.png" alt="rudevs" class="col-lg-6 col-md-6 col-4">
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center align-items-center mt-5 p-3">
                                <div class="btn btn-dark B1 fw-bolder fs-6 d-flex justify-content-center align-items-center" onclick="window.location='model.php';">Start Tour</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <?php include "footer.php"; ?> -->

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
    <script src="bootstrap.bundle.js"></script>
</body>

</html>