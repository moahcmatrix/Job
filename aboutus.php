<?php
$banner = 'AboutUs';
$bannerDescription = 'Banner';

include 'includes/header.php';
include 'includes/getBanner.php';
?>

<div class="container my-5 text-center">
    <h1 class="fs-1 text-color"><?= $resource['CompanyName']; ?></h1>
    <p class="fs-6 text-color mt-3"><?= $resource['CompanyDescription']; ?></p>
</div>
<div class="container my-5">

    <div class="row justify-content-center">
        <?php
        $teams = $database->query('SELECT * From team', null);

        for ($i = 0; $i < count($teams); $i++) {
        ?>
        <div class="col-6 col-md-4 col-lg-3">
            <div class="team d-flex flex-column justify-content-center align-items-center">
                <img class="img-fluid rounded-5" src="<?= $teams[$i]['image'] ?>" />
                <h1 class="fs-5 mt-3 text-color text-center"><?= $teams[$i]['name'] ?></h1>
                <h1 class="fs-3 text-color fw-bold"><?= $teams[$i]['position'] ?></h1>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include 'includes/footer.php'; ?>