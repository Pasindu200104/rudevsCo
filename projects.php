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
                            <span class="ru text-info A text-center" data-aos="fade-up" data-aos-duration="1000">Our Projects</span>
                        </div><br><br>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-11 border border-2 rounded-5 p-3">
                                        <img src="resources/Screenshot 2024-02-28 223125.png" alt="projects" class="col-12 rounded-5">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-11 border border-2 rounded-5 p-3">
                                        <img src="" alt="projects" class="col-12">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br><br>
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