<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dangaf | Services</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./public/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./public/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./public/favicon/favicon-16x16.png" />
  <link rel="manifest" href="./public/favicon/site.webmanifest" />
  <link rel="mask-icon" href="./public/favicon/safari-pinned-tab.svg" color="#5bbad5" />
  <meta name="msapplication-TileColor" content="#da532c" />
  <meta name="theme-color" content="#ffffff" />

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;500;700&family=Inter:wght@300&family=Plus+Jakarta+Sans:wght@300;600;700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light shadow">
    <div class="container px-4 justify-content-between w-100">
      <div class="d-flex justify-content-between w-100">
        <div class="logo">
          <a class="navbar-brand" href="./index.php">
            <img src="./public/asserts/images/logo.svg" alt="" class="image-fluid logo" />
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
              <a class="nav-link" aria-current="page" href="./about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="./services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./portfolio.php">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact us</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <main>
    <!-- Header -->
    <div class="card border-0 text-white bg-responsive w-100" style="height: 5rem">
      <img src="./public/asserts/images/headerbg.svg" class="card-img w-100 d-none d-md-block" alt="building" style="height: 14rem" />
      <img src="./public/asserts/images/headerbg1.svg" class="card-img w-100 d-md-none d-block" alt="building" />
      <div class="card-img-overlay mt-md-2 mt-5 text-center">
        <div class="container center mt-5 justify-content-center align-items-center">
          <div class="overlay-text justify-content-center align-items-center">
            <div class="headers text-center">
              <svg class="ml d-lg-inline d-none" width="190" height="60" viewBox="0 0 296 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M296 47H0V113H296V47Z" fill="#E48415" mask="url(#path-1-inside-1_1966_5637)" />
              </svg>
              <svg class="ml d-lg-none d-inline" width="160" height="60" viewBox="0 0 296 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M296 47H0V113H296V47Z" fill="#E48415" mask="url(#path-1-inside-1_1966_5637)" />
              </svg>

              <div class="fs-3 fw-bold header-text text-center">
                Our Services
              </div>
            </div>
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
              <a href="#Seemore" class="btn bgc-dark text-light rounded-0 d-lg-inline d-block px-5 py-2">See More</a>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- FAQs -->
    <div class="faqs">
      <div class="container py-5">
        <div class="d-lg-flex flex-row justify-content-around align-content-center w-100 gap-3">
          <div class="w-100">
            <div class="headers my-5 text-center">
              <svg class="ml2 d-lg-inline d-none" width="370" height="60" viewBox="0 0 684 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M683.5 47H0.5V113H683.5V47Z" fill="#FFB764" mask="url(#path-1-inside-1_1966_5700)" />
              </svg>
              <svg class="ml2 d-lg-none d-inline" width="320" height="60" viewBox="0 0 684 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M683.5 47H0.5V113H683.5V47Z" fill="#FFB764" mask="url(#path-1-inside-1_1966_5700)" />
              </svg>

              <div class="fs-3 fw-bold header-text text-center">
                Frequently Ask Questions
              </div>
            </div>
          </div>

          <div class="px-4 d-lg-flex flex-column w-100 bg-light">
            <div class="faq border-bottom py-2">
              <div class="w-100">
                <a class="btn btn-light btn-outline-light w-100" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
                  <div class="d-flex justify-content-between w-100">
                    <div class="text-dark">
                      What Services does your IT Company Offer
                    </div>

                    <div class="">
                      <svg width="25" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 5.5V19.5M5 12.5H19" stroke="#656565" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                  </div>
                </a>
              </div>

              <div class="collapse" id="collapseExample4">
                <div class="card card-body border-0">
                  Our mentorship programs are designed to provide one-on-one
                  guidance and support to young individuals. Our mentorship
                  programs are designed to provide one-on-one guidance and
                  support to young individuals.
                </div>
              </div>
            </div>
            <div class="faq border-bottom py-2">
              <div class="w-100">
                <a class="btn btn-light btn-outline-light w-100" data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5">
                  <div class="d-flex justify-content-between w-100">
                    <div class="text-dark">
                      What Services does your IT Company Offer
                    </div>

                    <div class="">
                      <svg width="25" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 5.5V19.5M5 12.5H19" stroke="#656565" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                  </div>
                </a>
              </div>

              <div class="collapse" id="collapseExample5">
                <div class="card card-body border-0">
                  Our mentorship programs are designed to provide one-on-one
                  guidance and support to young individuals. Our mentorship
                  programs are designed to provide one-on-one guidance and
                  support to young individuals.
                </div>
              </div>
            </div>
            <div class="faq border-bottom py-2">
              <div class="w-100">
                <a class="btn btn-light btn-outline-light w-100" data-bs-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample6">
                  <div class="d-flex justify-content-between w-100">
                    <div class="text-dark">
                      What Services does your IT Company Offer
                    </div>

                    <div class="">
                      <svg width="25" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 5.5V19.5M5 12.5H19" stroke="#656565" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                  </div>
                </a>
              </div>

              <div class="collapse" id="collapseExample6">
                <div class="card card-body border-0">
                  Our mentorship programs are designed to provide one-on-one
                  guidance and support to young individuals. Our mentorship
                  programs are designed to provide one-on-one guidance and
                  support to young individuals.
                </div>
              </div>
            </div>
            <div class="faq border-bottom py-2">
              <div class="w-100">
                <a class="btn btn-light btn-outline-light w-100" data-bs-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample7">
                  <div class="d-flex justify-content-between w-100">
                    <div class="text-dark">
                      What Services does your IT Company Offer
                    </div>

                    <div class="">
                      <svg width="25" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 5.5V19.5M5 12.5H19" stroke="#656565" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                  </div>
                </a>
              </div>

              <div class="collapse" id="collapseExample7">
                <div class="card card-body border-0">
                  Our mentorship programs are designed to provide one-on-one
                  guidance and support to young individuals. Our mentorship
                  programs are designed to provide one-on-one guidance and
                  support to young individuals.
                </div>
              </div>
            </div>
            <div class="faq border-bottom py-2">
              <div class="w-100">
                <a class="btn btn-light btn-outline-light w-100" data-bs-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample8">
                  <div class="d-flex justify-content-between w-100">
                    <div class="text-dark">
                      What Services does your IT Company Offer
                    </div>

                    <div class="">
                      <svg width="25" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 5.5V19.5M5 12.5H19" stroke="#656565" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                  </div>
                </a>
              </div>

              <div class="collapse" id="collapseExample8">
                <div class="card card-body border-0">
                  Our mentorship programs are designed to provide one-on-one
                  guidance and support to young individuals. Our mentorship
                  programs are designed to provide one-on-one guidance and
                  support to young individuals.
                </div>
              </div>
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