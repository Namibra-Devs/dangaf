<?php
require_once('./admin/database/config.php');
require_once('./public/inc/auxilliaries.php');

$About = new Admin($pdo, "tbl_settings");
$fetchAbout = $About->readAll('id')[0];

$sql = "SELECT *
        FROM tbl_team_member
        INNER JOIN tbl_designation ON tbl_designation.designation_id = tbl_team_member.designation_id";

// Prepare and execute the query
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Fetch the results
$fetchTeam = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $fetchTeam = $team->readAll('id');
// print_r($fetchTeam);
// exit;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dangaf | About Us</title>

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
              <a class="nav-link active" aria-current="page" href="./about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./portfolio.php">portfolio</a>
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
              <svg class="ml d-lg-inline d-none" width="140" height="60" viewBox="0 0 296 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M296 47H0V113H296V47Z" fill="#E48415" mask="url(#path-1-inside-1_1966_5637)" />
              </svg>
              <svg class="ml d-lg-none d-inline" width="120" height="60" viewBox="0 0 296 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M296 47H0V113H296V47Z" fill="#E48415" mask="url(#path-1-inside-1_1966_5637)" />
              </svg>

              <div class="fs-3 fw-bold header-text text-center">About Us</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Who We Are -->
    <div class="whoweare">
      <div class="container py-5">
        <div class="d-lg-flex flex-row justify-content-around align-content-center w-100 gap-5">
          <div class="col-lg-5">
            <img src="./public/asserts/images/building/constractor2.webp" alt="" class="image-fluid w-100" />
          </div>
          <div class="col-lg-5 d-none px-4 d-lg-flex flex-column justify-content-center">
            <h4 class="fs-3 fw-bold services-header">Who We Are...</h4>
            <p class="mt-2 services-text text-start">
              <?php
              echo $fetchAbout['home_about_content'];
              ?>
            </p>
          </div>

          <div class="col-lg-5 d-block d-lg-none px-4 py-5 py-lg-0 d-flex flex-column justify-content-center">
            <h4 class="fs-3 fw-bold services-header">How we started...</h4>
            <p class="mt-2 services-text text-start">

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

        <!-- </div> -->
      </div>
    </div>

    <!-- Mission and Vision -->
    <div class="mission-vision">
      <div class="container p-5">
        <div class="d-flex flex-lg-row flex-column justify-content-center align-items-center gap-5 w-100">
          <div class="bgc-darker text-light py-4 px-4">
            <h1 class="fs-3 fw-bold ff-header">Our Vision</h1>

            <p class="mt-4">
              <?php
              echo $fetchAbout['our_vision'];
              ?>

            </p>
          </div>

          <div class="bgc-darker text-light py-4 px-4">
            <h1 class="fs-3 fw-bold ff-header">Our Mission</h1>

            <p class="mt-4">
              <?php
              echo $fetchAbout['our_mission'];
              ?>

            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Our Team -->
    <div class="blog">
      <div class="container py-5">
        <div class="headers my-5 text-center">
          <svg class="ml d-lg-inline d-none" width="150" height="60" viewBox="0 0 296 80" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M296 47H0V113H296V47Z" fill="#FFB764" mask="url(#path-1-inside-1_1966_5637)" />
          </svg>
          <svg class="ml d-lg-none d-inline" width="130" height="60" viewBox="0 0 296 80" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M296 47H0V113H296V47Z" fill="#FFB764" mask="url(#path-1-inside-1_1966_5637)" />
          </svg>

          <div class="fs-3 fw-bold header-text text-center">OuR Team</div>
        </div>

        <div class="row d-flex flex-md-row justify-content-center gap-3 w-100">
          <?php
          $i = 0;
          foreach ($fetchTeam as $member) {
            $i++;
          ?>
            <div class="card border-0" style="width: 20rem">
              <img src="./assets/uploads/<?php echo $member['photo']; ?>" class="card-img-top rounded" height="250px" alt="..." />
              <div class="card-body border-0 px-1">
                <div class="d-flex justify-content-between">
                  <div>
                    <h5 class="card-title ff-header fs-6"><?php echo $member['name'] ?></h5>
                    <p class="text-muted"><?php echo $member['designation_name'] ?></p>
                  </div>
                  <div>
                    <p>
                      <a class="btn btn-outline-light" data-bs-toggle="collapse" href="#collapseExample<?php echo $i ?>" role="button" aria-expanded="false" aria-controls="collapseExample<?php echo $i ?>">
                        <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M6.66628 8.47089C6.51072 8.47089 6.35983 8.44172 6.21361 8.38339C6.06739 8.32506 5.94605 8.24728 5.84961 8.15006L0.482942 2.78339C0.269053 2.5695 0.162109 2.29728 0.162109 1.96672C0.162109 1.63617 0.269053 1.36395 0.482942 1.15006C0.696831 0.936168 0.969054 0.829224 1.29961 0.829224C1.63016 0.829224 1.90239 0.936168 2.11628 1.15006L6.66628 5.70006L11.2163 1.15006C11.4302 0.936168 11.7024 0.829224 12.0329 0.829224C12.3635 0.829224 12.6357 0.936168 12.8496 1.15006C13.0635 1.36395 13.1704 1.63617 13.1704 1.96672C13.1704 2.29728 13.0635 2.5695 12.8496 2.78339L7.48294 8.15006C7.36628 8.26672 7.23989 8.34956 7.10378 8.39856C6.96766 8.44756 6.82183 8.47167 6.66628 8.47089Z" fill="#262626" />
                        </svg>
                      </a>
                    </p>
                  </div>
                </div>
                <div class="collapse" id="collapseExample<?php echo $i ?>">
                  <div class="card card-body border-0 px-1 pt-0">
                    <?php echo $member['detail'] ?>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>

          <!-- <div class="card border-0 px-1" style="width: 20rem">
            <img src="./public/asserts/images/thumbnail1.svg" class="card-img-top" alt="..." />
            <div class="card-body border-0 px-1">
              <div class="d-flex justify-content-between">
                <div>
                  <h5 class="card-title ff-header fs-6">Mohammed Awwal</h5>
                  <p class="text-muted">Architect</p>
                </div>
                <div>
                  <p>
                    <a class="btn btn-outline-light" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
                      <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.66628 8.47089C6.51072 8.47089 6.35983 8.44172 6.21361 8.38339C6.06739 8.32506 5.94605 8.24728 5.84961 8.15006L0.482942 2.78339C0.269053 2.5695 0.162109 2.29728 0.162109 1.96672C0.162109 1.63617 0.269053 1.36395 0.482942 1.15006C0.696831 0.936168 0.969054 0.829224 1.29961 0.829224C1.63016 0.829224 1.90239 0.936168 2.11628 1.15006L6.66628 5.70006L11.2163 1.15006C11.4302 0.936168 11.7024 0.829224 12.0329 0.829224C12.3635 0.829224 12.6357 0.936168 12.8496 1.15006C13.0635 1.36395 13.1704 1.63617 13.1704 1.96672C13.1704 2.29728 13.0635 2.5695 12.8496 2.78339L7.48294 8.15006C7.36628 8.26672 7.23989 8.34956 7.10378 8.39856C6.96766 8.44756 6.82183 8.47167 6.66628 8.47089Z" fill="#262626" />
                      </svg>
                    </a>
                  </p>
                </div>
              </div>
              <div class="collapse" id="collapseExample1">
                <div class="card card-body border-0 px-1 pt-0">
                  Mohammed Awwal is a highly skilled creative director in the
                  event production field, with over a decade of experience
                  designing and executing unique and memorable events. Known
                  for his innovative ideas and attention to detail, John has
                  worked with numerous high-profile clients, delivering
                  exceptional experiences that exceed expectations. He is
                  passionate about using his expertise to create unforgettable
                  events that bring people together and leave a lasting
                  impression.
                </div>
              </div>
            </div>
          </div> -->

          <!-- <div class="card border-0 px-1" style="width: 20rem">
            <img src="./public/asserts/images/thumbnail2.svg" class="card-img-top" alt="..." />
            <div class="card-body border-0 px-1">
              <div class="d-flex justify-content-between">
                <div>
                  <h5 class="card-title ff-header fs-6">Jane Doe</h5>
                  <p class="text-muted">VP, Engineering</p>
                </div>
                <div>
                  <p>
                    <a class="btn btn-outline-light" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                      <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.66628 8.47089C6.51072 8.47089 6.35983 8.44172 6.21361 8.38339C6.06739 8.32506 5.94605 8.24728 5.84961 8.15006L0.482942 2.78339C0.269053 2.5695 0.162109 2.29728 0.162109 1.96672C0.162109 1.63617 0.269053 1.36395 0.482942 1.15006C0.696831 0.936168 0.969054 0.829224 1.29961 0.829224C1.63016 0.829224 1.90239 0.936168 2.11628 1.15006L6.66628 5.70006L11.2163 1.15006C11.4302 0.936168 11.7024 0.829224 12.0329 0.829224C12.3635 0.829224 12.6357 0.936168 12.8496 1.15006C13.0635 1.36395 13.1704 1.63617 13.1704 1.96672C13.1704 2.29728 13.0635 2.5695 12.8496 2.78339L7.48294 8.15006C7.36628 8.26672 7.23989 8.34956 7.10378 8.39856C6.96766 8.44756 6.82183 8.47167 6.66628 8.47089Z" fill="#262626" />
                      </svg>
                    </a>
                  </p>
                </div>
              </div>
              <div class="collapse" id="collapseExample2">
                <div class="card card-body border-0 px-1 pt-0">
                  Jane Doe is a highly skilled creative director in the event
                  production field, with over a decade of experience designing
                  and executing unique and memorable events. Known for his
                  innovative ideas and attention to detail, John has worked
                  with numerous high-profile clients, delivering exceptional
                  experiences that exceed expectations. He is passionate about
                  using his expertise to create unforgettable events that
                  bring people together and leave a lasting impression.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

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



                    <div class="fs-3 fw-bold header-text text-center">Frequently Ask Questions</div>
                  </div>
                </div>

                <div class="px-4 d-lg-flex flex-column w-100 bg-light">

                  <div class="faq border-bottom py-2">


                    <div class="w-100">
                      <a class="btn btn-light btn-outline-light w-100" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
                        <div class="d-flex justify-content-between w-100">

                          <div class="text-dark">What Services does your IT Company Offer
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
                        Our mentorship programs are designed to provide one-on-one guidance and support to young individuals. Our mentorship programs are designed to provide one-on-one guidance and support to young individuals.
                      </div>
                    </div>
                  </div>
                  <div class="faq border-bottom py-2">


                    <div class="w-100">
                      <a class="btn btn-light btn-outline-light w-100" data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5">
                        <div class="d-flex justify-content-between w-100">

                          <div class="text-dark">What Services does your IT Company Offer
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
                        Our mentorship programs are designed to provide one-on-one guidance and support to young individuals. Our mentorship programs are designed to provide one-on-one guidance and support to young individuals.
                      </div>
                    </div>
                  </div>
                  <div class="faq border-bottom py-2">


                    <div class="w-100">
                      <a class="btn btn-light btn-outline-light w-100" data-bs-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample6">
                        <div class="d-flex justify-content-between w-100">

                          <div class="text-dark">What Services does your IT Company Offer
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
                        Our mentorship programs are designed to provide one-on-one guidance and support to young individuals. Our mentorship programs are designed to provide one-on-one guidance and support to young individuals.
                      </div>
                    </div>
                  </div>
                  <div class="faq border-bottom py-2">


                    <div class="w-100">
                      <a class="btn btn-light btn-outline-light w-100" data-bs-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample7">
                        <div class="d-flex justify-content-between w-100">

                          <div class="text-dark">What Services does your IT Company Offer
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
                        Our mentorship programs are designed to provide one-on-one guidance and support to young individuals. Our mentorship programs are designed to provide one-on-one guidance and support to young individuals.
                      </div>
                    </div>
                  </div>
                  <div class="faq border-bottom py-2">


                    <div class="w-100">
                      <a class="btn btn-light btn-outline-light w-100" data-bs-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample8">
                        <div class="d-flex justify-content-between w-100">

                          <div class="text-dark">What Services does your IT Company Offer
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
                        Our mentorship programs are designed to provide one-on-one guidance and support to young individuals. Our mentorship programs are designed to provide one-on-one guidance and support to young individuals.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  </main>

  <!-- Footer -->
  <footer class="bg-dark w-100 h-100 pt-5 pb-4 px-2 text-light ff-header">
    <div class="container pt-5">
      <div class="d-lg-flex justify-content-around align-items-start">
        <div class="about col-lg-5">
          <a href="" class="fs-5 fw-bold text-light">
            <img src="./public/asserts/images/logo_light.svg" alt="" class="image-fluid logo-light" />
          </a>
          <p class="">
            Lorem ipsum diolor emet atet lorem ipsum dilore amet lorem iosum
            dilor amet lorem ipsum diilor amet ncdnd dnjsdkkdls
            jdslkdsp;mkldkmmckmm lksdls slddslkksd l
          </p>
          <div>
            <p class="tel">2338096542356</p>
            <p class="">info@dangafltd.com</p>
          </div>
        </div>

        <div class="quick-links mt-lg-0 mt-5 col-lg-2">
          <h4 class="fs-5 fw-bold">Quick Links</h4>
          <ul class="quick-link mt-3 text-start">
            <li class="my-1">
              <a href="./about.php" class="text-light text-decoration-none">Abouut Us</a>
            </li>
            <li class="my-1">
              <a href="./services.php" class="text-light text-decoration-none">Our Services</a>
            </li>
            <li class="my-1">
              <a href="./careers.php" class="text-light text-decoration-none">Portfolio</a>
            </li>
            <li class="my-1">
              <a href="./applications.php" class="text-light text-decoration-none">Blogs</a>
            </li>
            <li class="my-1">
              <a href="./contact.php" class="text-light text-decoration-none">Contact Us</a>
            </li>
          </ul>
        </div>

        <div class="socials mt-lg-0 mt-5 col-lg-2">
          <ul class="d-flex p-lg-2 p-0 list-none">
            <li class="mx-lg-3">
              <a href="" class="text-light">
                <svg width="25" height="25" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_2618_1680)">
                    <path d="M32.3115 16C32.3115 7.1635 25.148 0 16.3115 0C7.47502 0 0.311523 7.16337 0.311523 16C0.311523 23.986 6.16252 30.6054 13.8115 31.8056V20.625H9.74902V16H13.8115V12.475C13.8115 8.465 16.2003 6.25 19.8549 6.25C21.6055 6.25 23.4365 6.5625 23.4365 6.5625V10.5H21.419C19.4313 10.5 18.8115 11.7334 18.8115 12.9987V16H23.249L22.5396 20.625H18.8115V31.8056C26.4605 30.6054 32.3115 23.9861 32.3115 16Z" fill="#E5E5E5" />
                  </g>
                  <defs>
                    <clipPath id="clip0_2618_1680">
                      <rect width="32" height="32" fill="white" transform="translate(0.311523)" />
                    </clipPath>
                  </defs>
                </svg>
              </a>
            </li>
            <li class="mx-3">
              <a href="" class="text-light">
                <svg width="25" height="25" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M39.5096 3.89677C38.0419 4.54699 36.4851 4.9738 34.8909 5.16299C36.5514 4.16778 37.8264 2.59181 38.4267 0.714072C36.8482 1.65078 35.1212 2.31075 33.3203 2.66546C31.8534 1.10267 29.7636 0.125977 27.4505 0.125977C23.0094 0.125977 19.4087 3.72651 19.4087 8.16732C19.4087 8.79767 19.4799 9.41133 19.617 10C12.9337 9.66458 7.00837 6.4632 3.04205 1.59798C2.34999 2.78565 1.95344 4.16716 1.95344 5.64069C1.95344 8.43067 3.37323 10.8919 5.53085 12.3341C4.25384 12.2941 3.00492 11.9491 1.88837 11.3281C1.88791 11.3618 1.88791 11.3955 1.88791 11.4293C1.88791 15.3255 4.65981 18.5757 8.33843 19.3145C7.15426 19.6365 5.91214 19.6837 4.70697 19.4523C5.7302 22.6471 8.70008 24.9719 12.2189 25.037C9.4667 27.1937 5.99922 28.4794 2.23179 28.4794C1.58261 28.4794 0.942606 28.4412 0.313477 28.367C3.87221 30.6486 8.09912 31.9799 12.6404 31.9799C27.4319 31.9799 35.5202 19.7264 35.5202 9.09991C35.5202 8.75112 35.5126 8.40433 35.4969 8.05953C37.0713 6.92144 38.4301 5.5118 39.5096 3.89677Z" fill="#E5E5E5" />
                </svg>
              </a>
            </li>
            <li class="mx-3">
              <a href="" class="text-light">
                <svg width="25" height="25" viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M34 19.6191V32H26.8221V20.448C26.8221 17.5453 25.7835 15.5654 23.1862 15.5654C21.203 15.5654 20.0218 16.901 19.5033 18.1913C19.3137 18.6527 19.2651 19.2953 19.2651 19.9413V32H12.0839C12.0839 32 12.1812 12.4362 12.0839 10.4077H19.2651V13.4681L19.2181 13.5386H19.2651V13.4681C20.2181 12 21.9211 9.90101 25.7349 9.90101C30.458 9.90101 34 12.9883 34 19.6191ZM4.5738 0C2.1191 0 0.511719 1.61074 0.511719 3.72987C0.511719 5.80201 2.07212 7.46141 4.47984 7.46141H4.52682C7.03185 7.46141 8.58722 5.80201 8.58722 3.72987C8.5436 1.61074 7.03185 0 4.5738 0ZM0.937893 32H8.11575V10.4077H0.937893V32Z" fill="#E5E5E5" />
                </svg>
              </a>
            </li>
            <li class="mx-3">
              <a href="" class="text-light">
                <svg width="25" height="25" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M16 0C11.6544 0 11.1104 0.0191999 9.4032 0.0959999C7.7008 0.1744 6.5376 0.4448 5.52 0.84C4.45198 1.24135 3.4844 1.87093 2.6848 2.6848C1.87097 3.48444 1.2414 4.452 0.84 5.52C0.4448 6.5376 0.1744 7.7008 0.0959999 9.4032C0.0175999 11.1104 0 11.6544 0 16C0 20.3456 0.0175999 20.8896 0.0959999 22.5968C0.1744 24.2992 0.4448 25.4624 0.84 26.48C1.24144 27.548 1.87101 28.5155 2.6848 29.3152C3.48447 30.129 4.45203 30.7586 5.52 31.16C6.5376 31.5552 7.7008 31.8256 9.4032 31.904C11.1104 31.9808 11.6544 32 16 32C20.3456 32 20.8896 31.9808 22.5968 31.904C24.2992 31.8256 25.4624 31.5552 26.48 31.16C27.548 30.7586 28.5156 30.129 29.3152 29.3152C30.129 28.5156 30.7586 27.548 31.16 26.48C31.5552 25.4624 31.8256 24.2992 31.904 22.5968C31.9808 20.8896 32 20.3456 32 16C32 11.6544 31.9808 11.1104 31.904 9.4032C31.8256 7.7008 31.5552 6.5376 31.16 5.52C30.7586 4.452 30.129 3.48444 29.3152 2.6848C28.5156 1.87093 27.548 1.24135 26.48 0.84C25.4624 0.4448 24.2992 0.1744 22.5968 0.0959999C20.8896 0.0191999 20.3456 0 16 0ZM16 2.8832C20.272 2.8832 20.7776 2.8992 22.464 2.976C24.0256 3.048 24.872 3.3072 25.4368 3.5264C26.1824 3.8176 26.7168 4.1648 27.2768 4.7232C27.8368 5.2832 28.1824 5.8176 28.4736 6.5632C28.6912 7.128 28.9536 7.9744 29.024 9.5344C29.1008 11.2224 29.1168 11.7264 29.1168 16C29.1168 20.272 29.1008 20.7776 29.024 22.464C28.952 24.0256 28.6912 24.872 28.4736 25.4368C28.2171 26.1318 27.8081 26.7605 27.2768 27.2768C26.7168 27.8368 26.1824 28.1824 25.4368 28.4736C24.872 28.6912 24.0256 28.9536 22.4656 29.024C20.7792 29.1008 20.2736 29.1168 16 29.1168C11.728 29.1168 11.2208 29.1008 9.536 29.024C7.9744 28.952 7.128 28.6912 6.5632 28.4736C5.86814 28.2172 5.23939 27.8082 4.7232 27.2768C4.19177 26.7606 3.78282 26.1319 3.5264 25.4368C3.3072 24.872 3.0464 24.0256 2.976 22.4656C2.8992 20.7776 2.8832 20.2736 2.8832 16C2.8832 11.728 2.8992 11.2224 2.976 9.536C3.048 7.9744 3.3072 7.128 3.5264 6.5632C3.8176 5.8176 4.1648 5.2832 4.7232 4.7232C5.2832 4.1632 5.8176 3.8176 6.5632 3.5264C7.128 3.3072 7.9744 3.0464 9.5344 2.976C11.2224 2.8992 11.7264 2.8832 16 2.8832ZM16 21.3328C14.5857 21.3328 13.2292 20.771 12.2291 19.7709C11.229 18.7708 10.6672 17.4143 10.6672 16C10.6672 14.5857 11.229 13.2292 12.2291 12.2291C13.2292 11.229 14.5857 10.6672 16 10.6672C17.4143 10.6672 18.7708 11.229 19.7709 12.2291C20.771 13.2292 21.3328 14.5857 21.3328 16C21.3328 17.4143 20.771 18.7708 19.7709 19.7709C18.7708 20.771 17.4143 21.3328 16 21.3328ZM16 7.784C14.9211 7.784 13.8527 7.99651 12.8559 8.40941C11.8591 8.8223 10.9533 9.42749 10.1904 10.1904C9.42748 10.9533 8.8223 11.8591 8.40941 12.8559C7.99651 13.8527 7.784 14.9211 7.784 16C7.784 17.0789 7.99651 18.1473 8.40941 19.1441C8.8223 20.1409 9.42748 21.0467 10.1904 21.8096C10.9533 22.5725 11.8591 23.1777 12.8559 23.5906C13.8527 24.0035 14.9211 24.216 16 24.216C18.179 24.216 20.2688 23.3504 21.8096 21.8096C23.3504 20.2688 24.216 18.179 24.216 16C24.216 13.821 23.3504 11.7312 21.8096 10.1904C20.2688 8.64961 18.179 7.784 16 7.784ZM26.4608 7.4592C26.4608 7.71134 26.4111 7.96101 26.3146 8.19395C26.2182 8.4269 26.0767 8.63856 25.8984 8.81684C25.7202 8.99513 25.5085 9.13656 25.2756 9.23305C25.0426 9.32954 24.7929 9.3792 24.5408 9.3792C24.2887 9.3792 24.039 9.32954 23.806 9.23305C23.5731 9.13656 23.3614 8.99513 23.1832 8.81684C23.0049 8.63856 22.8634 8.4269 22.767 8.19395C22.6705 7.96101 22.6208 7.71134 22.6208 7.4592C22.6208 6.94998 22.8231 6.46162 23.1832 6.10155C23.5432 5.74149 24.0316 5.5392 24.5408 5.5392C25.05 5.5392 25.5384 5.74149 25.8984 6.10155C26.2585 6.46162 26.4608 6.94998 26.4608 7.4592Z" fill="#E5E5E5" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <p class="text-center mt-5">
        &copy;
        <a href="" class="text-light text-decoration-none">Dangaf Construction Limited</a>
        2023
      </p>
    </div>
  </footer>
</body>

</html>