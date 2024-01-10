<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dangaf | Portfolio</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>


    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./public/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./public/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./public/favicon/favicon-16x16.png">
    <link rel="manifest" href="./public/favicon/site.webmanifest">
    <link rel="mask-icon" href="./public/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;500;700&family=Inter:wght@300&family=Plus+Jakarta+Sans:wght@300;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <script src="./script.js" defer></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light shadow">
        <div class="container px-4 justify-content-between w-100">

            <div class="d-flex justify-content-between w-100">

                <div class="logo">
                    <a class="navbar-brand" href="./index.php">
                        <img src="./public/asserts/images/logo.svg" alt="" class="image-fluid logo">
                    </a>

                </div>

                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
                <div class="w-100">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mt-2 w-100">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="./about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./services.php">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="./portfolio.php">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contact.php">Contact us</a>
                        </li>

                    </ul>
                </div>

            </div>

        </div>
    </nav>

    <main>

        <!-- Header -->
        <div class="card border-0 text-white bg-responsive w-100" style="height: 5rem;">
            <img src="./public/asserts/images/headerbg.svg" class="card-img w-100 d-none d-md-block" alt="building" style="height: 14rem;" />
            <img src="./public/asserts/images/headerbg1.svg" class="card-img w-100 d-md-none d-block" alt="building" />
            <div class="card-img-overlay mt-md-2 mt-5  text-center">
                <div class="container center mt-5 justify-content-center align-items-center">
                    <div class="overlay-text justify-content-center align-items-center">
                        <div class="headers text-center">
                            <svg class="ml d-lg-inline d-none" width="190" height="60" viewBox="0 0 296 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M296 47H0V113H296V47Z" fill="#E48415" mask="url(#path-1-inside-1_1966_5637)" />
                            </svg>
                            <svg class="ml d-lg-none d-inline" width="160" height="60" viewBox="0 0 296 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M296 47H0V113H296V47Z" fill="#E48415" mask="url(#path-1-inside-1_1966_5637)" />
                            </svg>

                            <div class="fs-3 fw-bold header-text text-center">Our Portfolio</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Portfolio -->
        <div class="portfolio">
            <div class="container p-5 justify-content-center w-100 about-links" id="link-div">


                <ul class="nav nav-pills mb-5 gap-5 justify-content-center align-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item about-link link-active" role="presentation">
                        <button class="nav-link active text-dark bg-white px-0 fw-link" id="pills-residence-tab" data-bs-toggle="pill" data-bs-target="#pills-residence" type="button" role="tab" aria-controls="pills-residence" aria-selected="true">Residence</button>
                    </li>
                    <li class="nav-item about-link" role="presentation">
                        <button class="nav-link text-dark bg-white px-0 fw-link" id="pills-commercial-tab" data-bs-toggle="pill" data-bs-target="#pills-commercial" type="button" role="tab" aria-controls="pills-commercial" aria-selected="false">Commercial</button>
                    </li>
                    <li class="nav-item about-link" role="presentation">
                        <button class="nav-link text-dark bg-white px-0 fw-link" id="pills-industrial-tab" data-bs-toggle="pill" data-bs-target="#pills-industrial" type="button" role="tab" aria-controls="pills-industrial" aria-selected="false">Industrial</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-residence" role="tabpanel" aria-labelledby="pills-residence-tab">
                        <div class="d-flex flex-column flex-md-row w-100 gap-3">
                            <div><a href="./portfolio-single.php">
                                    <img src="./public/asserts/images/building/compoundroof.webp" alt="" class="image-fluid w-100 h-100">
                                </a></div>
                            <div><a href="">
                                    <img src="./public/asserts/images/building/coumpoundhouse.webp" alt="" class="image-fluid w-100 h-100">
                                </a></div>
                            <div><a href="">
                                    <img src="./public/asserts/images/building/coumpoundfront.webp" alt="" class="image-fluid w-100 h-100">
                                </a></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-commercial" role="tabpanel" aria-labelledby="pills-commercial-tab">
                        <div class="d-flex flex-column flex-md-row w-100 gap-3">
                            <div><a href="./portfolio-single.php">
                                    <img src="./public/asserts/images/building/apartmentsroof.webp" alt="" class="image-fluid w-100 h-100">
                                </a></div>
                            <div><a href="">
                                    <img src="./public/asserts/images/building/apartments.webp" alt="" class="image-fluid w-100 h-100">
                                </a></div>
                            <div><a href="">
                                    <img src="./public/asserts/images/building/apartmentsroof2.webp" alt="" class="image-fluid w-100 h-100">
                                </a></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-industrial" role="tabpanel" aria-labelledby="pills-industrial-tab">
                        <div class="d-flex flex-column flex-md-row w-100 gap-3">
                            <div><a href="">
                                    <img src="./public/asserts/images/portfolio/portfolio.svg" alt="" class="image-fluid w-100 h-100">
                                </a></div>
                            <div><a href="">
                                    <img src="./public/asserts/images/portfolio/portfolio2.svg" alt="" class="image-fluid w-100 h-100">
                                </a></div>
                            <div><a href="">
                                    <img src="./public/asserts/images/portfolio/portfolio3.svg" alt="" class="image-fluid w-100 h-100">
                                </a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>




    </main>

    <?php
    require_once './public/inc/footer.php';

    ?>

</body>

</html>