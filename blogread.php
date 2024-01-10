<?php
require_once('./admin/database/config.php');
require_once('./public/inc/auxilliaries.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$Blogs = new Admin($pdo, "tbl_blogs");
$blog = $Blogs->read('blog_id', $id)[0];

$fetchBlogs = $Blogs->readAll('blog_id');
// print_r($fetchBlogs);

$dateString = $blog['blog_date'];
$dateTime = DateTime::createFromFormat('d-m-Y', $dateString);
$formattedDate = $dateTime->format('jS F Y');


// print_r($fetchBlog);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dangaf | Blog</title>

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

    <main class="pt-5">

        <!-- Blog Read Post -->
        <div class="blogread">
            <div class="container p-5">
                <div class="py-4">
                    <a href="./blog.php" class="text-muted text-decoration-none">
                        <svg class="me-2 text-muted" width="15" height="15" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.34375 17.875L1.46875 10L9.34375 2.125M2.5625 10H18.5312" stroke="#454545" stroke-width="2.625" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        Blog Page</a>
                </div>

                <div class="mainblog ff-body">
                    <div class="blog-header">
                        <p class="text-muted blog-date py-4"><?php echo $formattedDate; ?></p>
                        <h4 class="blog-topic fs-4 fw-bold ff-other my-4"><?php echo $blog['blog_title']; ?></h4>
                    </div>

                    <div class="blog-post">
                        <img src="./assets/uploads/<?php echo $blog['photo']; ?>" alt="" class="img-fluid w-100 h-80">
                        <div class="row justify-content-center align-items-center w-100 mt-5">
                            <div class="blog-message col-lg-8">
                                <?php echo $blog['blog_content']; ?>
                                <!-- <p class="blog-paragraph">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem Ipsum
                                    is simply dummy text of the printing and typesetting industry..Lorem Ipsum is simply
                                    dummy text of the printing and typesetting industryLorem Ipsum is simply dummy text
                                    of the printing and typesetting industry..
                                    <br><br>
                                    Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industryLorem Ipsum is simply dummy text of the printing
                                    and typesetting industry.
                                    .Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem
                                    Ipsum is simply dummy text of the printing and typesetting industry..
                                    <br><br>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem Ipsum
                                    is simply dummy text of the printing and typesetting industry..
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem Ipsum
                                    is simply dummy text of the printing and typesetting industry..
                                </p>
                                <div class="blockquote mt-5 px-3 py-2 border-start border-2 border-muted">
                                    <blockquote class="blockquote px-2">
                                        <p class="mb-0 border-right fw-bold fs-6 border-2 fst-italic">“In a world older and more complete than ours they move finished and complete, gifted with extensions of the senses we have lost or never attained, living by voices we shall never hear.”
                                        </p>
                                        <footer class="blockquote-footer mt-3"> <cite title="Source Title" class="source-name">Olivia Rhye</cite>,
                                            <cite class="source-position">Product Designer</cite>
                                        </footer>
                                        <p class="text-muted mt-2 px-3 fs-5">— <span class="name-quote"></span>, <span class="postion-quote"></span></p> 
                                </blockquote>
                            </div>
                           <div class="my-5">
                                <img src="./public/asserts/images/blog/blogview1.svg" alt="" class="img-fluid">
                                <p class="text-muted">Image courtesy of <span class="courtest-name">Leon</span> via <a href="#sourcelink" class="text-muted text-decoration-underline">Unsplash</a></p>
                            </div> -->
                                <!-- <p class="blog-paragraph">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem Ipsum
                                is simply dummy text of the printing and typesetting industry..Lorem Ipsum is simply
                                dummy text of the printing and typesetting industryLorem Ipsum is simply dummy text
                                of the printing and typesetting industry..
                                <br><br>
                                Lorem Ipsum is simply dummy text of the
                                printing and typesetting industryLorem Ipsum is simply dummy text of the printing
                                and typesetting industry.
                                .Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem
                                Ipsum is simply dummy text of the printing and typesetting industry..
                                <br><br>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem Ipsum
                                is simply dummy text of the printing and typesetting industry..
                                Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem Ipsum
                                is simply dummy text of the printing and typesetting industry..
                            </p> -->

                                <!-- <div class="conclusion py-4">
                                <h4 class="fw-bold font-5 ff-other mb-3">Conclusion</h4>
                                <p>Overall, the Black Star Line Festival is an incredible celebration of African culture and unity, bringing together people from all over the world to share in the joy and beauty.</p>
                            </div> -->
                            </div>

                            <div class="blog-share d-flex col-lg-8 mt-3">
                                <div class="">
                                    <a href="" class="btn btn-light text-muted border border-2 rounded-2 py-1 px-2">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_3061_226)">
                                                <path d="M4.16602 12.5H3.33268C2.89065 12.5 2.46673 12.3244 2.15417 12.0118C1.84161 11.6992 1.66602 11.2753 1.66602 10.8333V3.33329C1.66602 2.89127 1.84161 2.46734 2.15417 2.15478C2.46673 1.84222 2.89065 1.66663 3.33268 1.66663H10.8327C11.2747 1.66663 11.6986 1.84222 12.0112 2.15478C12.3238 2.46734 12.4993 2.89127 12.4993 3.33329V4.16663M9.16602 7.49996H16.666C17.5865 7.49996 18.3327 8.24615 18.3327 9.16663V16.6666C18.3327 17.5871 17.5865 18.3333 16.666 18.3333H9.16602C8.24554 18.3333 7.49935 17.5871 7.49935 16.6666V9.16663C7.49935 8.24615 8.24554 7.49996 9.16602 7.49996Z" stroke="#3C3B3B" stroke-opacity="0.9" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_3061_226">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span class="copy-link text-dark ff-other">Copy Link</span>
                                    </a>
                                </div>
                                <div class="ms-1">
                                    <a href="" class="btn btn-light text-muted border border-2 rounded-2 py-1 px-2">
                                        <svg width="20" height="20" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.2918 17.125C13.8371 17.125 17.9652 10.8723 17.9652 5.45155C17.9652 5.27577 17.9613 5.09608 17.9535 4.9203C18.7566 4.33955 19.4496 3.62021 20 2.79608C19.2521 3.12883 18.458 3.34615 17.6449 3.44061C18.5011 2.92742 19.1421 2.12123 19.4492 1.17147C18.6438 1.6488 17.763 1.98551 16.8445 2.16718C16.2257 1.50963 15.4075 1.07426 14.5164 0.928376C13.6253 0.782488 12.711 0.934209 11.9148 1.36008C11.1186 1.78595 10.4848 2.46225 10.1115 3.28443C9.73825 4.1066 9.64619 5.02885 9.84961 5.90858C8.21874 5.82674 6.62328 5.40309 5.16665 4.66508C3.71002 3.92708 2.42474 2.8912 1.39414 1.6246C0.870333 2.5277 0.710047 3.59637 0.945859 4.61341C1.18167 5.63045 1.79589 6.51954 2.66367 7.09999C2.01219 7.0793 1.37498 6.9039 0.804688 6.58827V6.63905C0.804104 7.58679 1.13175 8.50549 1.73192 9.23897C2.3321 9.97246 3.16777 10.4755 4.09687 10.6625C3.49338 10.8276 2.85999 10.8517 2.2457 10.7328C2.50788 11.5479 3.01798 12.2607 3.70481 12.7719C4.39164 13.2831 5.22093 13.5672 6.07695 13.5844C4.62369 14.7259 2.82848 15.3451 0.980469 15.3422C0.652739 15.3417 0.325333 15.3216 0 15.282C1.87738 16.4865 4.06128 17.1262 6.2918 17.125Z" fill="#656565" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="ms-1">
                                    <a href="" class="btn btn-light text-muted border border-2 rounded-2 py-1 px-2">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 10C20 4.47715 15.5229 0 10 0C4.47715 0 0 4.47715 0 10C0 14.9912 3.65684 19.1283 8.4375 19.8785V12.8906H5.89844V10H8.4375V7.79688C8.4375 5.29063 9.93047 3.90625 12.2146 3.90625C13.3084 3.90625 14.4531 4.10156 14.4531 4.10156V6.5625H13.1922C11.95 6.5625 11.5625 7.3334 11.5625 8.125V10H14.3359L13.8926 12.8906H11.5625V19.8785C16.3432 19.1283 20 14.9912 20 10Z" fill="#656565" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="ms-1">
                                    <a href="" class="btn btn-light text-muted border border-2 rounded-2 py-1 px-2">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.5195 0H1.47656C0.660156 0 0 0.644531 0 1.44141V18.5547C0 19.3516 0.660156 20 1.47656 20H18.5195C19.3359 20 20 19.3516 20 18.5586V1.44141C20 0.644531 19.3359 0 18.5195 0ZM5.93359 17.043H2.96484V7.49609H5.93359V17.043ZM4.44922 6.19531C3.49609 6.19531 2.72656 5.42578 2.72656 4.47656C2.72656 3.52734 3.49609 2.75781 4.44922 2.75781C5.39844 2.75781 6.16797 3.52734 6.16797 4.47656C6.16797 5.42187 5.39844 6.19531 4.44922 6.19531ZM17.043 17.043H14.0781V12.4023C14.0781 11.2969 14.0586 9.87109 12.5352 9.87109C10.9922 9.87109 10.7578 11.0781 10.7578 12.3242V17.043H7.79688V7.49609H10.6406V8.80078H10.6797C11.0742 8.05078 12.043 7.25781 13.4844 7.25781C16.4883 7.25781 17.043 9.23438 17.043 11.8047V17.043V17.043Z" fill="#656565" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <!-- Our Blog -->
        <div class="blog">
            <div class="container p-5">
                <div class="headers py-5 ">
                    <h1 class="fs-3 fw-bold header-text">See more blogs</h1>
                </div>
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


                </div>
            </div>
        </div>

    </main>
    <!-- Footer -->
    <?php
    require_once './public/inc/footer.php';
    ?>
</body>

</body>

</html>