<?php
$count = 1;
$activeSet = 1;
foreach ($fetchTestimony as $item) {

    if ($count == 1) {
        if ($activeSet) {
            echo   '<div class="carousel-item active">';
        } else {
            echo   '<div class="carousel-item">';
        }
        echo  '<div class="row d-flex justify-content-center align-items-center gap-3">';
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
    $count++;

    if ($count == 3) {
        echo '</div>';
        echo '</div>';
        $count = 1;
    }
} ?>