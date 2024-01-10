<?php
require_once('./admin/database/config.php');
require_once('./public/inc/auxilliaries.php');

$quoteCategory = new Admin($pdo, "tbl_quote_category");
$fetchQuoteCategory = $quoteCategory->readAll('quote_category_id');

$contacInfo =  new Admin($pdo, "tbl_settings");
$fetchinfo = $contacInfo->readAll('id')[0];


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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dangaf</title>

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
              <a class="nav-link" href="./blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="./contact.php">Contact us</a>
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
              <!-- <div class=" px-5 header-bg"> -->
              <svg class="ml d-lg-inline d-none" width="160" height="60" viewBox="0 0 296 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M296 47H0V113H296V47Z" fill="#E48415" mask="url(#path-1-inside-1_1966_5637)" />
              </svg>
              <svg class="ml d-lg-none d-inline" width="140" height="60" viewBox="0 0 296 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M296 47H0V113H296V47Z" fill="#E48415" mask="url(#path-1-inside-1_1966_5637)" />
              </svg>

              <!-- </div> -->
              <div class="fs-3 fw-bold header-text text-center">Contact Us</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Quote Request Form -->
    <div class="quote">
      <div class="container py-5 px-5 w-100 my-5 my-lg-0">
        <h4 class="text-success"><?php echo isset($message) ? $message : ''; ?></h4>

        <div class="d-flex flex-column-reverse flex-lg-row justify-content-end align-items-center">
          <!-- <div class="w-100"> -->
          <form method="POST" action="" class="row g-3 needs-validation justify-content-center align-items-center text-start" novalidate>
            <div class="col-md-5">
              <label for="validationCustom01" class="form-label">First name</label>
              <input type="text" name="firstname" class="form-control rounded-0" id="validationCustom01" placeholder="John Doe" required />
            </div>
            <div class="col-md-5">
              <label for="validationCustom02" class="form-label">Email</label>
              <input type="email" name="email" class="form-control rounded-0" id="validationCustom02" placeholder="example@mail.com" required />
            </div>
            <div class="col-md-5">
              <label for="validationCustom03" class="form-label">Phone Number</label>
              <input type="text" name="phone" class="form-control rounded-0" id="validationCustom03" required />
            </div>
            <div class="col-md-5">
              <label for="validationCustom04" class="form-label">Project Type</label>
              <select name="type" class="form-select rounded-0" id="validationCustom04" required>
                <option selected disabled value="">Choose...</option>
                <?php foreach ($fetchQuoteCategory as $category) { ?>
                  <option value="<?php echo $category['quote_category_name'];  ?>"><?php echo $category['quote_category_name']  ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="col-md-10">
              <label for="validationCustom03" class="form-label">Project Details</label>
              <textarea name="details" type="text" class="form-control rounded-0" id="validationCustom03" required></textarea>

              <div class="col-12 mt-4">
                <button type="submit" name="submit" class="btn bgc-new text-light w-100 rounded-0" type="submit">
                  Request Quote
                </button>
              </div>
            </div>
          </form>
          <!-- </div> -->
          <div class="mb-5 mb-lg-0 w-100">
            <img src="./public/asserts/images/contactpic.svg" alt="" class="image-fluid d-none d-lg-block h-100" />
            <img src="./public/asserts/images/contactpics.svg" alt="" class="image-fluid d-block d-lg-none w-100" />
          </div>
        </div>
      </div>
    </div>

    <!-- Map and Direct -->
    <div class="blog">
      <div class="container py-5">

        <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center w-100">

          <div class="row col-lg-6 col-10 justify-content-center align-items-center bgc-primary-light px-4 py-5 ">
            <div class="mapouter w-100">
              <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=500&amp;height=500&amp;hl=en&amp;q=Tamale street&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://embed-googlemap.com">embed code google maps</a></div>
              <style>
                .mapouter {
                  position: relative;
                  text-align: right;
                  width: 100%;
                  height: 468px;
                }

                .gmap_canvas {
                  overflow: hidden;
                  background: none !important;
                  width: 100%;
                  height: 500px;
                }

                .gmap_iframe {
                  height: 500px !important;
                }
              </style>
            </div>
          </div>

          <div class="col-lg-6 col-10 justify-content-center align-items-center bgc-new px-4 py-5">
            <div class="ms-lg-4">
              <div class="d-flex gap-4">
                <div>
                  <svg width="25" height="25" viewBox="0 0 18 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.00065 6.08331C9.7742 6.08331 10.5161 6.3906 11.063 6.93758C11.61 7.48457 11.9173 8.22643 11.9173 8.99998C11.9173 9.383 11.8419 9.76227 11.6953 10.1161C11.5487 10.47 11.3339 10.7915 11.063 11.0624C10.7922 11.3332 10.4707 11.5481 10.1168 11.6946C9.76295 11.8412 9.38367 11.9166 9.00065 11.9166C8.2271 11.9166 7.48524 11.6094 6.93826 11.0624C6.39127 10.5154 6.08398 9.77353 6.08398 8.99998C6.08398 8.22643 6.39127 7.48457 6.93826 6.93758C7.48524 6.3906 8.2271 6.08331 9.00065 6.08331ZM9.00065 0.833313C11.1666 0.833313 13.2438 1.69373 14.7754 3.22527C16.3069 4.75682 17.1673 6.83404 17.1673 8.99998C17.1673 15.125 9.00065 24.1666 9.00065 24.1666C9.00065 24.1666 0.833984 15.125 0.833984 8.99998C0.833984 6.83404 1.6944 4.75682 3.22595 3.22527C4.75749 1.69373 6.83472 0.833313 9.00065 0.833313ZM9.00065 3.16665C7.45355 3.16665 5.96982 3.78123 4.87586 4.87519C3.7819 5.96915 3.16732 7.45288 3.16732 8.99998C3.16732 10.1666 3.16732 12.5 9.00065 20.3283C14.834 12.5 14.834 10.1666 14.834 8.99998C14.834 7.45288 14.2194 5.96915 13.1254 4.87519C12.0315 3.78123 10.5477 3.16665 9.00065 3.16665Z" fill="#E5E5E5" />
                  </svg>

                </div>

                <div class="text-light">
                  <p>Address</p>
                  <p><?php echo $fetchinfo['contact_address'] ?></p>

                </div>
              </div>
              <div class="d-flex gap-4 mt-4">
                <div>
                  <svg width="20" height="20" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.333984 2.50002C0.333984 1.88118 0.579817 1.28769 1.0174 0.850104C1.45499 0.41252 2.04848 0.166687 2.66732 0.166687H21.334C21.9528 0.166687 22.5463 0.41252 22.9839 0.850104C23.4215 1.28769 23.6673 1.88118 23.6673 2.50002V16.5C23.6673 17.1189 23.4215 17.7124 22.9839 18.1499C22.5463 18.5875 21.9528 18.8334 21.334 18.8334H2.66732C2.04848 18.8334 1.45499 18.5875 1.0174 18.1499C0.579817 17.7124 0.333984 17.1189 0.333984 16.5V2.50002ZM4.43948 2.50002L12.0007 9.11619L19.5618 2.50002H4.43948ZM21.334 4.05052L12.7695 11.5452C12.5567 11.7316 12.2835 11.8344 12.0007 11.8344C11.7178 11.8344 11.4446 11.7316 11.2318 11.5452L2.66732 4.05052V16.5H21.334V4.05052Z" fill="#E5E5E5" />
                  </svg>


                </div>

                <div class="text-light">
                  <p>Email</p>
                  <p><?php echo $fetchinfo['contact_email'] ?></p>
                </div>
              </div>
              <div class="d-flex gap-4 mt-4">
                <div>
                  <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.83333 1.16669H8.5L10.8333 7.00002L7.91667 8.75002C9.16612 11.2835 11.2165 13.3339 13.75 14.5834L15.5 11.6667L21.3333 14V18.6667C21.3333 19.2855 21.0875 19.879 20.6499 20.3166C20.2123 20.7542 19.6188 21 19 21C14.4491 20.7235 10.1568 18.7909 6.93297 15.5671C3.70909 12.3432 1.77656 8.05088 1.5 3.50002C1.5 2.88118 1.74583 2.28769 2.18342 1.8501C2.621 1.41252 3.21449 1.16669 3.83333 1.16669Z" stroke="#E5E5E5" stroke-width="2.33333" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>


                </div>

                <div class="text-light">
                  <p>Phone Number</p>
                  <p><?php echo $fetchinfo['contact_phone'] ?></p>
                </div>
              </div>
              <div class="d-flex gap-4 mt-4">
                <div>
                  <svg width="25" height="25" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.9993 3.16665H1.33268V0.833313H19.9993V3.16665ZM19.416 13.6666H17.666V19.5L21.8777 22.02L22.7527 20.5966L19.416 18.625V13.6666ZM26.9993 18.3333C26.9993 22.8483 23.3477 26.5 18.8327 26.5C14.7143 26.5 11.331 23.455 10.7593 19.5H1.33268V12.5H0.166016V10.1666L1.33268 4.33331H19.9993L21.166 10.1666V10.505C24.5377 11.52 26.9993 14.635 26.9993 18.3333ZM2.54602 10.1666H18.786L18.086 6.66665H3.24602L2.54602 10.1666ZM3.66602 17.1666H10.666V12.5H3.66602V17.1666ZM24.666 18.3333C24.666 15.1133 22.0527 12.5 18.8327 12.5C15.6127 12.5 12.9993 15.1133 12.9993 18.3333C12.9993 21.5533 15.6127 24.1666 18.8327 24.1666C22.0527 24.1666 24.666 21.5533 24.666 18.3333Z" fill="#E5E5E5" />
                  </svg>


                </div>

                <div class="text-light">
                  <p>Hours Of Operation</p>
                  <p><?php echo $fetchinfo['contact_fax'] ?></p>
                </div>
              </div>

              <div class="mt-5">
                <span class="me-4">
                  <svg width="25" height="25" viewBox="0 0 28 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 0.5C10.2007 0.5 9.723 0.5175 8.23025 0.584C6.7375 0.654 5.72075 0.8885 4.83 1.235C3.89566 1.58643 3.04936 2.1377 2.35025 2.85025C1.63813 3.54972 1.08694 4.39592 0.735 5.33C0.3885 6.219 0.15225 7.2375 0.084 8.725C0.0175 10.2212 0 10.6973 0 14.5018C0 18.3028 0.0175 18.7787 0.084 20.2715C0.154 21.7625 0.3885 22.7793 0.735 23.67C1.09375 24.5905 1.5715 25.371 2.35025 26.1497C3.12725 26.9285 3.90775 27.408 4.82825 27.765C5.72075 28.1115 6.73575 28.3478 8.22675 28.416C9.72125 28.4825 10.1972 28.5 14 28.5C17.8028 28.5 18.277 28.4825 19.7715 28.416C21.2607 28.346 22.281 28.1115 23.1718 27.765C24.1055 27.4134 24.9512 26.8621 25.6497 26.1497C26.4285 25.371 26.9062 24.5905 27.265 23.67C27.6097 22.7793 27.846 21.7625 27.916 20.2715C27.9825 18.7787 28 18.3028 28 14.5C28 10.6972 27.9825 10.2213 27.916 8.72675C27.846 7.2375 27.6097 6.219 27.265 5.33C26.9131 4.39589 26.3619 3.54968 25.6497 2.85025C24.9509 2.13743 24.1045 1.58613 23.17 1.235C22.2775 0.8885 21.259 0.65225 19.7698 0.584C18.2753 0.5175 17.801 0.5 13.9965 0.5H14.0018H14ZM12.7452 3.0235H14.0018C17.7398 3.0235 18.1825 3.03575 19.6577 3.104C21.0227 3.16525 21.7647 3.3945 22.2582 3.58525C22.911 3.839 23.3782 4.1435 23.8682 4.6335C24.3582 5.1235 24.661 5.589 24.9148 6.2435C25.1073 6.73525 25.3347 7.47725 25.396 8.84225C25.4642 10.3175 25.4783 10.7603 25.4783 14.4965C25.4783 18.2327 25.4642 18.6773 25.396 20.1525C25.3347 21.5175 25.1055 22.2578 24.9148 22.7513C24.6903 23.3591 24.332 23.9088 23.8665 24.3595C23.3765 24.8495 22.911 25.1523 22.2565 25.406C21.7665 25.5985 21.0245 25.826 19.6577 25.889C18.1825 25.9555 17.7398 25.9713 14.0018 25.9713C10.2638 25.9713 9.81925 25.9555 8.344 25.889C6.979 25.826 6.23875 25.5985 5.74525 25.406C5.13712 25.1819 4.58697 24.8243 4.13525 24.3595C3.66931 23.9081 3.31052 23.3579 3.08525 22.7495C2.8945 22.2578 2.66525 21.5157 2.604 20.1507C2.5375 18.6755 2.5235 18.2328 2.5235 14.493C2.5235 10.755 2.5375 10.314 2.604 8.83875C2.667 7.47375 2.8945 6.73175 3.087 6.23825C3.34075 5.5855 3.64525 5.11825 4.13525 4.62825C4.62525 4.13825 5.09075 3.8355 5.74525 3.58175C6.23875 3.38925 6.979 3.16175 8.344 3.09875C9.6355 3.03925 10.136 3.02175 12.7452 3.02V3.0235ZM21.4743 5.3475C21.2536 5.3475 21.0352 5.39095 20.8313 5.47538C20.6275 5.55981 20.4423 5.68356 20.2863 5.83956C20.1303 5.99556 20.0066 6.18077 19.9221 6.38459C19.8377 6.58842 19.7943 6.80688 19.7943 7.0275C19.7943 7.24812 19.8377 7.46658 19.9221 7.67041C20.0066 7.87423 20.1303 8.05944 20.2863 8.21544C20.4423 8.37144 20.6275 8.49519 20.8313 8.57962C21.0352 8.66405 21.2536 8.7075 21.4743 8.7075C21.9198 8.7075 22.3471 8.5305 22.6622 8.21544C22.9773 7.90038 23.1542 7.47306 23.1542 7.0275C23.1542 6.58194 22.9773 6.15462 22.6622 5.83956C22.3471 5.5245 21.9198 5.3475 21.4743 5.3475ZM14.0018 7.311C13.0481 7.29612 12.1011 7.4711 11.2157 7.82575C10.3304 8.18039 9.5244 8.70762 8.84476 9.37674C8.16513 10.0459 7.62539 10.8435 7.25697 11.7232C6.88856 12.6029 6.69883 13.5471 6.69883 14.5009C6.69883 15.4546 6.88856 16.3988 7.25697 17.2785C7.62539 18.1583 8.16513 18.9559 8.84476 19.625C9.5244 20.2941 10.3304 20.8214 11.2157 21.176C12.1011 21.5306 13.0481 21.7056 14.0018 21.6908C15.8892 21.6613 17.6894 20.8908 19.0137 19.5457C20.338 18.2005 21.0803 16.3886 21.0803 14.5009C21.0803 12.6132 20.338 10.8012 19.0137 9.45606C17.6894 8.1109 15.8892 7.34045 14.0018 7.311ZM14.0018 9.83275C15.2396 9.83275 16.4267 10.3245 17.302 11.1998C18.1773 12.075 18.669 13.2622 18.669 14.5C18.669 15.7378 18.1773 16.925 17.302 17.8002C16.4267 18.6755 15.2396 19.1672 14.0018 19.1672C12.7639 19.1672 11.5768 18.6755 10.7015 17.8002C9.82623 16.925 9.3345 15.7378 9.3345 14.5C9.3345 13.2622 9.82623 12.075 10.7015 11.1998C11.5768 10.3245 12.7639 9.83275 14.0018 9.83275Z" fill="#E5E5E5" />
                  </svg>


                </span>

                <span class="me-4">
                  <svg width="26" height="23" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24.6673 1.16661C24.6673 1.16661 23.8507 3.61661 22.334 5.13328C24.2007 16.7999 11.3673 25.3166 1.33398 18.6666C3.90065 18.7833 6.46732 17.9666 8.33398 16.3333C2.50065 14.5833 -0.416016 7.69994 2.50065 2.33328C5.06732 5.36661 9.03398 7.11661 13.0007 6.99994C11.9507 2.09995 17.6673 -0.700055 21.1673 2.56661C22.4506 2.56661 24.6673 1.16661 24.6673 1.16661Z" stroke="#E5E5E5" stroke-width="2.33333" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>


                </span>

                <span class="">
                  <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.9993 3.16671H1.33268V0.833374H19.9993V3.16671ZM19.416 13.6667H17.666V19.5L21.8777 22.02L22.7527 20.5967L19.416 18.625V13.6667ZM26.9993 18.3334C26.9993 22.8484 23.3477 26.5 18.8327 26.5C14.7143 26.5 11.331 23.455 10.7593 19.5H1.33268V12.5H0.166016V10.1667L1.33268 4.33337H19.9993L21.166 10.1667V10.505C24.5377 11.52 26.9993 14.635 26.9993 18.3334ZM2.54602 10.1667H18.786L18.086 6.66671H3.24602L2.54602 10.1667ZM3.66602 17.1667H10.666V12.5H3.66602V17.1667ZM24.666 18.3334C24.666 15.1134 22.0527 12.5 18.8327 12.5C15.6127 12.5 12.9993 15.1134 12.9993 18.3334C12.9993 21.5534 15.6127 24.1667 18.8327 24.1667C22.0527 24.1667 24.666 21.5534 24.666 18.3334Z" fill="#E5E5E5" />
                  </svg>


                </span>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php
  require_once './public/inc/footer.php';
  ?>


  <script src="./script.js"></script>

</body>

</html>