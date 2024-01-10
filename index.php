<?php
require_once('./admin/database/config.php');
require_once('./public/inc/auxilliaries.php');

$Testimonials = new Admin($pdo, "tbl_testimonials");
$fetchTestimony = $Testimonials->readAll('id');

$Blogs = new Admin($pdo, "tbl_blogs");
$fetchBlogs = $Blogs->readWithLimit(3, 'blog_id');

$quoteCategory = new Admin($pdo, "tbl_quote_category");
$fetchQuoteCategory = $quoteCategory->readAll('quote_category_id');

if (isset($_POST['submit'])) {
    $quote = new Admin($pdo, "tbl_quote");


    $firstname = $_POST['firstname'];
    $details = $_POST['details'];
    $type = $_POST['type'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];


    $quoteInfo = [
        'firstname' => $firstname,
        'details' => $details,
        'type' => $type,
        'phone' => $phone,
        'email' => $email,
    ];

    if ($quote->create($quoteInfo)) {
        $message = 'Quote submitted Successfully';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dangaf | Home</title>

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
                            <a class="nav-link active" aria-current="page" href="./about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./portfolio.php">Portfolio</a>
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

    <main class="pt-5">

        <!-- Header -->
        <div class="card bg-color text-white bg-responsive">

            <img src="./public/asserts/images/Frame1.svg" class="card-img d-none d-lg-block" alt="building" />
            <img src="./public/asserts/images/library.svg" class="card-img d-lg-none d-block" alt="building" />
            <div class="card-img-overlay bg-color text-center">
                <div class="container d-lg-flex justify-content-center align-items-center mt-5">
                    <div class="overlay-text col-lg-6 text-start">
                        <h5 class="card-title fw-bold display-5 header-title d-none d-lg-block">Building Dreams,
                            Constructing Futures</h5>
                        <h5 class="card-title fw-bold display-5 header-title d-block d-lg-none">Your Top Construction
                            Firm</h5>
                        <p class="card-text mb-lg-5 pb-3">
                            Lorem ipsum diolor emet atet lorem ipsum dilore amet lorem iosum dilor amet lorem ipsum
                            diilor amet ncdnd dnjsdkkdls jdslkdsp;mkldkmmckmm lksdls slddslkksd l
                        </p>
                        <a href="#request-a-quote" class="btn px-5 py-2 btn-request text-light border-0 rounded-0 d-block d-lg-inline w-100 text-center">Request
                            a Quote</a>
                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <img src="./public/asserts/images/Polygon.svg" alt="" class="image-fluid w-75">
                    </div>
                </div>
            </div>
        </div>


        <!-- Our Services -->
        <div class="services">
            <div class="container py-5">
                <div class="headers py-5 text-center">
                    <!-- <div class=" px-5 header-bg"> -->
                    <svg class="ml" width="180" height="60" viewBox="0 0 296 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M296 47H0V113H296V47Z" fill="#FFB764" mask="url(#path-1-inside-1_1966_5637)" />
                    </svg>

                    <!-- </div> -->
                    <div class="fs-3 fw-bold header-text text-center">Our Services</div>
                </div>

                <!-- architectural -->
                <div class="d-lg-flex flex-row w-100">
                    <div class="col-lg-5">
                        <img src="./public/asserts/images/building/houseroof.webp" alt="" class="image-fluid w-100 h-100" />
                    </div>
                    <div class="px-4 py-5 py-lg-0 d-flex flex-column justify-content-center text-light architectural bgc-new col-lg-7">
                        <h4 class="fs-3 fw-bold services-header">Architectural Design</h4>
                        <p class="mt-2 services-text">
                            Lorem ipsum diolor emet atet lorem ipsum dilore amet lorem iosum
                            dilor amet lorem ipsum diilor amet ncdnd dnjsdkkdls
                            jdslkdsp;mkldkmmckmm lksdls slddslkksd lLorem ipsum diolor emet
                            atet lorem ipsum dilore amet lorem iosum dilor amet lorem ipsum
                            diilor amet ncdnd dnjsdkkdls jdslkdsp;mkldkmmckmm lksdls
                            slddslkksd Lorem ipsum diolor emet atet lorem ipsum dilore amet
                            lorem iosum dilor amet lorem ipsum d
                        </p>
                    </div>
                </div>

                <!-- Structural -->
                <div class="d-lg-flex flex-row-reverse w-100">
                    <div class="col-lg-5">
                        <img src="./public/asserts/images/building/compoundroof.webp" alt="" class="image-fluid w-100 h-100" />
                    </div>
                    <div class="px-4 py-5 py-lg-0 d-flex flex-column justify-content-center text-light structural bgc-primary col-lg-7">
                        <h4 class="fs-3 fw-bold services-header">Structural Design</h4>
                        <p class="mt-2 services-text">
                            Lorem ipsum diolor emet atet lorem ipsum dilore amet lorem iosum
                            dilor amet lorem ipsum diilor amet ncdnd dnjsdkkdls
                            jdslkdsp;mkldkmmckmm lksdls slddslkksd lLorem ipsum diolor emet
                            atet lorem ipsum dilore amet lorem iosum dilor amet lorem ipsum
                            diilor amet ncdnd dnjsdkkdls jdslkdsp;mkldkmmckmm lksdls
                            slddslkksd Lorem ipsum diolor emet atet lorem ipsum dilore amet
                            lorem iosum dilor amet lorem ipsum d
                        </p>
                    </div>
                </div>

                <!-- General -->
                <div class="d-lg-flex flex-row w-100">
                    <div class="col-lg-5">
                        <img src="./public/asserts/images/building/buildingp.webp" alt="" class="image-fluid w-100 h-100" />
                    </div>
                    <div class="px-4 py-5 py-lg-0 d-flex flex-column justify-content-center text-light general bgc-dark col-lg-7">
                        <h4 class="fs-3 fw-bold services-header">General Constructuon</h4>
                        <p class="mt-2 services-text">
                            Lorem ipsum diolor emet atet lorem ipsum dilore amet lorem iosum
                            dilor amet lorem ipsum diilor amet ncdnd dnjsdkkdls
                            jdslkdsp;mkldkmmckmm lksdls slddslkksd lLorem ipsum diolor emet
                            atet lorem ipsum dilore amet lorem iosum dilor amet lorem ipsum
                            diilor amet ncdnd dnjsdkkdls jdslkdsp;mkldkmmckmm lksdls
                            slddslkksd Lorem ipsum diolor emet atet lorem ipsum dilore amet
                            lorem iosum dilor amet lorem ipsum d
                        </p>
                    </div>
                </div>

                <!-- Other Services -->
                <div class="d-lg-flex flex-row-reverse w-100">
                    <div class="col-lg-5">
                        <img src="./public/asserts/images/building/house.webp" alt="" class="image-fluid w-100 h-100" />
                    </div>
                    <div class="px-4 py-5 py-lg-0 d-flex flex-column justify-content-center text-light other-services bgc-primary col-lg-7">
                        <h4 class="fs-3 fw-bold services-header">
                            Check out our other services
                        </h4>
                        <p class="mt-2 services-text">
                            Lorem ipsum diolor emet atet lorem ipsum dilore amet lorem iosum
                            dilor amet lorem ipsum diilor amet ncdnd dnjsdkkdls jdslkd
                        </p>
                        <div class="mt-4">
                            <a href="services.php" class="btn bgc-dark text-light rounded-0 d-lg-inline d-block px-5 py-2">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Projects -->
        <div class="featured">
            <div class="container py-5">
                <div class="d-md-flex justify-content-between align-items-center w-100">


                    <div class="headers my-5 text-center">

                        <svg class="ml2 d-lg-inline d-none" width="260" height="60" viewBox="0 0 407 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M407 47H0V113H407V47Z" fill="#FFB764" mask="url(#path-1-inside-1_1966_5662)" />
                        </svg>
                        <svg class="ml2 d-lg-none d-inline" width="230" height="60" viewBox="0 0 407 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M407 47H0V113H407V47Z" fill="#FFB764" mask="url(#path-1-inside-1_1966_5662)" />
                        </svg>


                        <div class="fs-3 fw-bold header-text text-lg-start ms-lg-2">Featured Projects</div>
                    </div>

                    <div class="d-md-block d-none">
                        <a href="" class="btn rounded-0 border-0 ff-other see-all">See All</a>
                    </div>
                </div>

                <div class="d-lg-flex justify-content-center align-items-center gap-3 w-100">
                    <div class="">
                        <img src="./public/asserts/images/building/storey.webp" alt="" class="image-fluid w-100 featuredimgs">
                    </div>

                    <div class="d-flex flex-column gap-3">
                        <img src="./public/asserts/images/building/housef.webp" alt="" class="image-fluid w-100 mt-3 mt-lg-0 featuredimg">
                        <img src="./public/asserts/images/building/houseoverview.webp" alt="" class="image-fluid w-100 featuredimg">
                    </div>
                </div>

                <div class="d-block d-lg-none text-center mt-5">
                    <a href="" class="btn rounded-0 border-0 ff-other see-all">See All</a>
                </div>
            </div>
        </div>

        <!-- Quote Request Form -->
        <div class="quote px-3 w-100" id="request-a-quote">
            <div class="card border-0 container px-5 py-5">

                <img src="./public/asserts/images/building/contact-bg.svg" class="card-img image-fluid w-100 d-md-block d-none" alt="building" />

                <img src="./public/asserts/images/building/contactbg.svg" class="card-img image-fluid w-100 d-md-none d-block" alt="building" />
                <div class="card-img-overlay text-center d-flex justify-content-center align-items-md-center align-items-start mt-5 mt-lg-0">
                    <div class="bg-light col-md-8 px-4 py-5">
                        <div class="headers mb-5 text-center">
                            <h4 class="text-success"><?php echo isset($message) ? $message : ''; ?></h4>

                            <svg class="ml d-lg-inline d-none" width="260" height="60" viewBox="0 0 382 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M382 47H0V113H382V47Z" fill="#FFB764" mask="url(#path-1-inside-1_1966_6550)" />
                            </svg>
                            <svg class="ml d-lg-none d-inline" width="220" height="60" viewBox="0 0 382 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M382 47H0V113H382V47Z" fill="#FFB764" mask="url(#path-1-inside-1_1966_6550)" />
                            </svg>


                            <div class="fs-3 fw-bold header-text text-center">Request
                                A Quote</div>

                        </div>

                        <form method="POST" action="" class="row g-3 needs-validation justify-content-center align-items-center text-start" novalidate>
                            <div class="col-md-5">
                                <label for="validationCustom01" class="form-label">First name</label>
                                <input type="text" name="firstname" class="form-control rounded-0" id="validationCustom01" placeholder="John Doe" required>

                            </div>
                            <div class="col-md-5">
                                <label for="validationCustom02" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control rounded-0" id="validationCustom02" placeholder="example@mail.com" required>

                            </div>
                            <div class="col-md-5">
                                <label for="validationCustom03" class="form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control rounded-0" id="validationCustom03" required>

                            </div>
                            <div class="col-md-5">
                                <label for="validationCustom04" class="form-label">Project Type</label>
                                <select class="form-select rounded-0" name="type" id="validationCustom04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <?php foreach ($fetchQuoteCategory as $category) { ?>
                                        <option value="<?php echo $category['quote_category_name'];  ?>"><?php echo $category['quote_category_name']  ?></option>
                                    <?php } ?>
                                </select>

                            </div>

                            <div class="col-md-10">
                                <label for="validationCustom03" class="form-label">Project Details</label>
                                <textarea type="text" name="details" class="form-control rounded-0" id="validationCustom03" required></textarea>

                                <div class="col-12 mt-4">
                                    <button class="btn bgc-new text-light w-100 rounded-0" name="submit" type="submit">Request
                                        Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Testimonies -->
        <div class="testimonies">
            <div class="container">
                <div class="headers py-5 ">
                    <svg class="ml d-lg-inline d-md-none d-none" width="420" height="60" viewBox="0 0 684 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M683.5 47H0.5V113H683.5V47Z" fill="#FFB764" mask="url(#path-1-inside-1_1966_5700)" />
                    </svg>
                    <svg class="ml d-lg-none d-md-inline d-none" width="400" height="60" viewBox="0 0 684 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M683.5 47H0.5V113H683.5V47Z" fill="#FFB764" mask="url(#path-1-inside-1_1966_5700)" />
                    </svg>
                    <svg class="ml ms-4 ps-2 d-lg-none d-md-none d-inline" width="370" height="60" viewBox="0 0 684 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M683.5 47H0.5V113H683.5V47Z" fill="#FFB764" mask="url(#path-1-inside-1_1966_5700)" />
                    </svg>

                    <h1 class="fs-3 fw-bold header-text text-md-start text-center">
                        <span>
                            What Our Clients Say About Us

                        </span>
                    </h1>
                </div>

                <!-- Carousel wrapper -->
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-inner">

                        <?php
                        $count = 1;
                        $activeSet = 1;

                        foreach ($fetchTestimony as $item) {
                            if ($count == 1) {
                                if ($activeSet) {
                                    echo '<div class="carousel-item active">';
                                } else {
                                    echo '<div class="carousel-item">';
                                }
                                echo '<div class="row d-flex justify-content-center align-items-center gap-3">';
                            }
                            $activeSet = 0;

                        ?>




                            <div class="col-lg-4 col-8 <?php if ($count == 2) {
                                                            echo 'd-lg-block d-none';
                                                        } ?>">
                                <div class="card border-0">
                                    <div class="card-body border border-1 border-warning px-4 py-5 w-100">

                                        <img src="./assets/uploads/<?php echo $item['photo']; ?>" alt="" width="90px" height="90" class="image-fluid mb-4 border-2 border-2 border-secondary rounded-circle">
                                        <p><?php echo strip_tags($item['detail']) ?></p>

                                        <h5 class="fs-5 fw-bold ff-header mt-3"><?php echo $item['position'] ?></h5>
                                    </div>
                                </div>
                            </div>

                        <?php
                            if ($count == 2) {
                                echo '</div>';
                                echo '</div>';
                                $count = 1;
                            } else {
                                $count++;
                            }
                        }
                        ?>


                        <div class="carousel-np d-none d-lg-block">

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <svg width="50" height="50" viewBox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.9375" y="1.125" width="49.0625" height="47.75" rx="23.875" stroke="#333333" />
                                    <path d="M24.8125 32.875L16.9375 25L24.8125 17.125M18.0312 25H34" stroke="#333333" stroke-width="2.625" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <span class="visually-hidden">Previous</span>

                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <svg width="50" height="50" viewBox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1" y="1.125" width="49.0625" height="47.75" rx="23.875" stroke="#333333" />
                                    <path d="M26.1875 17.125L34.0625 25L26.1875 32.875M32.9688 25H17" stroke="#333333" stroke-width="2.625" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="carousel-np d-lg-none d-flex">

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <svg width="40" height="40" viewBox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.9375" y="1.125" width="49.0625" height="47.75" rx="23.875" stroke="#333333" />
                                    <path d="M24.8125 32.875L16.9375 25L24.8125 17.125M18.0312 25H34" stroke="#333333" stroke-width="2.625" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <span class="visually-hidden">Previous</span>

                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <svg width="40" height="40" viewBox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1" y="1.125" width="49.0625" height="47.75" rx="23.875" stroke="#333333" />
                                    <path d="M26.1875 17.125L34.0625 25L26.1875 32.875M32.9688 25H17" stroke="#333333" stroke-width="2.625" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                        <div class="carousel-indicators">
                            <?php
                            $i = 0;
                            foreach ($fetchTestimony as $item) {
                            ?>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i ?>" aria-label="Slide <?php echo $i + 1; ?>" <?php if ($i == 1) {
                                                                                                                                                                                    echo ' class="active" aria-current="true"';
                                                                                                                                                                                } ?>></button>
                            <?php
                                $i++;
                            } ?>

                        </div>

                    </div>

                </div>

            </div>
        </div>

        <!-- Our Blog -->
        <div class="blog">
            <div class="container py-5">
                <div class="headers my-5 text-center">
                    <svg class="ml d-lg-inline d-none" width="140" height="50" viewBox="0 0 296 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M296 47H0V113H296V47Z" fill="#FFB764" mask="url(#path-1-inside-1_1966_5637)" />
                    </svg>
                    <svg class="ml d-lg-none d-inline" width="120" height="50" viewBox="0 0 296 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M296 47H0V113H296V47Z" fill="#FFB764" mask="url(#path-1-inside-1_1966_5637)" />
                    </svg>

                    <div class="fs-3 fw-bold header-text text-center">Our Blog</div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-4">
                    <?php foreach ($fetchBlogs as $blog) { ?>
                        <div class="card col-lg-3 col-md-4 justify-content-center align-items-center">
                            <img src="./assets/uploads/<?php echo $blog['photo'] ?>" class="card-img-top image-fluid w-100" alt="...">
                            <div class="card-body border-0">
                                <p class="card-text date text-muted fs-6">
                                    <?php echo $blog['blog_date'] ?>
                                </p>
                                <h5 class="card-title fw-bold"><?php echo $blog['blog_title'] ?>"</h5>
                                <p class="card-text"><?php echo $blog['blog_content_short'] ?>...</p>
                                <a href="./blog?id=<?php echo $blog['blog_id'] ?>;" class="btn">Read More</a>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- <div class="card col-lg-3 col-md-4 justify-content-center align-items-center">
                        <img src="./public/asserts/images/building/foundation3.webp" class="card-img-top image-fluid w-100" alt="...">
                        <div class="card-body">
                            <p class="card-text date text-muted fs-6">
                                <span class="day">03</span>/
                                <span class="month">10</span>/
                                <span class="year">2023</span>
                            </p>
                            <h5 class="card-title fw-bold">Lorem ipsum diolor emet atet lorem </h5>
                            <p class="card-text">Lorem ipsum diolor emet atet lorem ipsum dilore amet lorem iosum dilor
                                amet lorem ipsum diilor amet ncdnd...</p>
                            <a href="#" class="btn">Read More</a>
                        </div>
                    </div>  -->

                </div>

                <div class="mt-5 text-center">
                    <a href="./blog.php" class="btn rounded-0 border-0 ff-other see-all">See All</a>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <?php
    require_once './public/inc/footer.php';
    ?>

</body>

</html>