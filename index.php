<?php
include_once 'includes\header.php';

$database = Database::connect(db_server, db_name, db_username, db_password);

if ($database == null) {
    redirect(PAGES['Error']);
}

$email = $message = '';
$errEmail = $errMessage = $statusMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $status = true;

    if (isset($_POST['email']) && $_POST['email'] != '') {
        $email = $_POST['email'];
    } else {
        $errEmail = 'Please Enter The Email';
        $status = false;
    }

    if (isset($_POST['message']) && $_POST['message'] != '') {
        $message = $_POST['message'];
    } else {
        $errMessage = 'Please Enter The Message';
        $status = false;
    }

    if ($status) {
        $database->execute('INSERT INTO `message` (`id`, `email`, `message`) VALUES (NULL, :email, :message);', [
            ':email' => $email,
            ':message' => $message
        ]);

        $statusMessage = 'Complete To Send';
    }
}

include 'includes/getBanner.php';
?>




<div class="container my-5">
    <div class="row justify-content-center align-items-center">
        <?php
        $categories = $database->query('SELECT * From category where language=:lang', [
            ':lang' => $language
        ]);

        for ($i = 0; $i < count($categories); $i++) {
        ?>

        <div class="col-4 col-lg-2 my-2">
            <div class="d-flex flex-column justify-content-center">
                <i class="<?php echo $categories[$i]['code']; ?> icon text-color"></i>
                <h1 class="text-center text-color mt-2 title">
                    <?php echo $categories[$i]['name']; ?>
                </h1>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<div class="container my-5 text-center">
    <h1 class="fs-3 text-color">Lastest Jobs</h1>
    <h3 class="fs-6 mb-5 mt-3 text-color">
        The Lastest Job To Travel Faster
    </h3>
    <div class="container">
        <?php
        $jobs = $database->query('SELECT * FROM Jobs Where language=:language', [
            ':language' => $language
        ]);

        for ($i = 0; $i < count($jobs); $i++) {
        ?>
        <div class="row">
            <div class="col-12 my-2">
                <div class="row rounded-5 job">
                    <div class="col-12 col-md-3 my-lg-0 my-2">
                        <img class="img-fluid rounded-5" src="<?php echo $jobs[$i]['image']; ?>" />
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="d-flex justify-content-between my-lg-1 align-items-center">
                            <h1 class="fs-6"><?php echo $jobs[$i]['title']; ?></h1>
                            <div class="d-flex align-content-center">

                                <?php
                                    $type = $database->query('SELECT * FROM type Where id=:id And language=:lang', [
                                        ':id' => $jobs[$i]['type'],
                                        ':lang' => $language
                                    ]);

                                    if ($type != null) { ?>
                                <p
                                    class="fs-5 m-0 mx-3 border-color d-flex justify-content-center align-items-center p-2 rounded-5 text-color fs-6">
                                    <?php echo $type[0]['name']; ?>
                                </p>
                                <?php } ?>

                                <button class="btn btn-primary button fs-6">Apply</button>
                            </div>
                        </div>
                        <p class="text-start p-2 p-lg-0 fs-6">
                            <?php echo substr($jobs[$i]['description'], 0, 200); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<div class="container my-3">
    <div class="row">
        <div class="col-12 col-md-6">
            <img class="img-fluid" src="images/contact.jpg" />
        </div>
        <div class="col-12 col-md-6">
            <?php include 'includes/contact.php'; ?>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>