<?php
require_once('./admin/database/config.php');
require_once('./public/inc/auxilliaries.php');

$Blogs = new Admin($pdo, "tbl_blogs");
$fetchBlogs = $Blogs->readAll('blog_id');
// print_r($fetchBlogs);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dangaf | Blog</title>

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
              <a class="nav-link" href="./services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./portfolio.php">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="./blog.php">Blog</a>
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
    <div class="card border-0 text-white bg-responsive w-100" style="height: 5rem">
      <img src="./public/asserts/images/headerbg.svg" class="card-img w-100 d-none d-md-block" alt="building" style="height: 14rem" />
      <img src="./public/asserts/images/headerbg1.svg" class="card-img w-100 d-md-none d-block" alt="building" />
      <div class="card-img-overlay mt-md-2 mt-5 text-center">
        <div class="container center mt-5 justify-content-center align-items-center">
          <div class="overlay-text justify-content-center align-items-center">
            <div class="headers text-center">
              <svg class="ml d-lg-inline d-none" width="140" height="60" viewBox="0 0 296 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M296 47H0V113H296V47Z" fill="#E48415" mask="url(#path-1-inside-1_1966_5637)" />
              </svg>
              <svg class="ml d-lg-none d-inline" width="120" height="60" viewBox="0 0 296 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M296 47H0V113H296V47Z" fill="#E48415" mask="url(#path-1-inside-1_1966_5637)" />
              </svg>

              <div class="fs-3 fw-bold header-text text-center">Our Blog</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Our Blog -->
    <div class="blog">
      <div class="container p-5">
        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-4">
          <?php foreach ($fetchBlogs as $blog) { ?>
            <div class="card col-lg-3 col-md-4 justify-content-center align-items-center">
              <img src="./assets/uploads/<?php echo $blog['photo']; ?>" class="card-img-top image-fluid w-100" alt="..." />
              <div class="card-body border-0">
                <p class="card-text date text-muted fs-6">
                  <!-- <span class="day">03</span>/ <span class="month">10</span>/
                  <span class="year">2023</span> -->
                  <?php echo $blog['blog_date']; ?>
                </p>
                <h5 class="card-title fw-bold">
                  <?php echo $blog['blog_title']; ?>
                </h5>
                <p class="card-text">
                  <?php echo $blog['blog_content_short']; ?>...
                </p>
                <a href="./blogread.php?id=<?php echo $blog['blog_id'] ?>" class="btn">Read More</a>
              </div>
            </div>
          <?php } ?>



          <!-- <div class="card col-lg-3 col-md-4 justify-content-center align-items-center">
            <img src="./public/asserts/images/building/foundation3.webp" class="card-img-top image-fluid w-100" alt="..." />
            <div class="card-body">
              <p class="card-text date text-muted fs-6">
                <span class="day">03</span>/ <span class="month">10</span>/
                <span class="year">2023</span>
              </p>
              <h5 class="card-title fw-bold">
                Lorem ipsum diolor emet atet lorem
              </h5>
              <p class="card-text">
                Lorem ipsum diolor emet atet lorem ipsum dilore amet lorem
                iosum dilor amet lorem ipsum diilor amet ncdnd...
              </p>
              <a href="#" class="btn">Read More</a>
            </div>
          </div> -->
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