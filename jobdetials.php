<?php
include_once 'includes/library.php';

if (isset($_GET['id'])) {
    $job = $database->query(
        'SELECT * FROM jobs WHERE id=:id AND language=:lang',
        [
            ':id' => 1,
            ':lang' => 'en'
        ]
    );

    if ($job == NULL) {
        redirect(PAGES[404]);
    }

    $job = $job[0];
} else {
    redirect(PAGES['404']);
}


$banner = 'JobDetials';
$bannerDescription = 'Banner';

include 'includes/header.php';

$jobs = $database->query(
    'SELECT  * FROM jobs WHERE language=:lang AND categoryid=:category LIMIT 4',
    [
        ':lang' => 'en',
        ':category' => $job['categoryid']
    ]
);

?>
<div class="container my-5">
    <div class="jobdetials p-4 mb-3">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
                <img class="img-fluid w-100 rounded-2" src="images/Job.jfif" />
            </div>
            <div class="col-12 col-md-5 col-lg-6 my-2 my-lg-0">
                <div class="fs-2 fw-bold"><?php echo $job['title']; ?></div>
                <div class="row">
                    <div class="col-auto">
                        <h1 class="fs-6">Education</h1>
                        <h4 class="fs-6"><?php echo $job['title']; ?></h4>
                    </div>
                    <div class="col-auto">
                        <h1 class="fs-6">Salary</h1>
                        <h4 class="fs-6"><?php echo $job['minsalary'] . ' - ' . $job['maxsalary']; ?></h4>
                    </div>
                </div>
                <div>
                    <h1 class="fs-6">Experience</h1>
                    <h4 class="fs-6"><?php echo $job['minexperience'] . ' - ' . $job['maxexperience']; ?></h4>
                </div>
            </div>
            <div class="col-12 col-md-3 my-2">
                <?php if (Authenticate::isAuth()) { ?>
                <button class="btn btn-primary button w-100 mb-2">Apply Job</button>
                <?php } ?>
                <div class="btn btn-outline-primary w-100 border-color my-2 text-color">
                    <?php

                    $type = $database->query('SELECT * FROM type WHERE id=:id And language=:lang', [
                        ':id' => $job['type'],
                        ':lang' => $language
                    ]);

                    echo $type[0]['name'];

                    ?>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column mt-2">
            <h1 class="fs-6 fw-bold">Description</h1>
            <p>
                <?php echo $job['description']; ?>
            </p>
        </div>
    </div>
    <?php include 'includes/getJobs.php'; ?>
</div>

<?php include 'includes/footer.php'; ?>