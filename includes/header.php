<?php include_once 'includes/library.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <!-- Start Css -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/all.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>
    <form method="post" action="<?php echo cdata($_SERVER['PHP_SELF']); ?>">
        <!-- Modal -->
        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="Login">Login</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Enter Username" />
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password" />
                        </div>
                        <input type="hidden" value="login" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary button">Login</button>
                        <button type="button" class="btn btn-secondary button" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form method="post" action="<?php echo cdata($_SERVER['PHP_SELF']); ?>">
        <!-- Modal -->
        <div class="modal fade" id="register" tabindex="-1" aria-labelledby="register" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Register</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Username</label>
                            <input type="text" class="form-control" placeholder="Enter Username" />
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password" />
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password" />
                        </div>
                        <input type="hidden" value="register" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="header">
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img class="logo" src="images/logo.jpg" />
                        </a>
                        <!-- Start Login Button -->

                        <div class="d-flex">
                            <button class="navbar-toggler m-0" type="button" data-bs-toggle="collapse"
                                data-bs-target="#main" aria-controls="main" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Start Menu -->
                            <div class="collapse navbar-collapse" id="main">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php"><?= $resource['Home'] ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="jobs.php"><?= $resource['Jobs'] ?></a>
                                    </li>
                                    <?php if (Authenticate::isAuth()) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="profile.php"><?= $resource['Profile'] ?></a>
                                    </li>
                                    <?php } ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="aboutus.php"><?= $resource['AboutUs'] ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contactus.php"><?= $resource['ContactUs'] ?></a>
                                    </li>
                                </ul>
                            </div>

                            <?php if (!Authenticate::isAuth()) { ?>
                            <button class="btn btn-primary ms-1 button" data-bs-toggle="modal"
                                data-bs-target="#login">Login</button>
                            <button class="btn btn-primary ms-1 button" data-bs-toggle="modal"
                                data-bs-target="#register">Sign Up</button>
                            <?php } ?>
                            <!-- Start Dialog -->
                            <div class="modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
        <?php if (isset($banner)) { ?>
        <div class="container">
            <div class="banner">
                <h1 class="fs-4"><?= $resource[$banner] ?></h1>
                <p class="fs-6 text-black-50">
                    <?= $resource[$bannerDescription] ?>
                </p>
            </div>
        </div>
        <?php } ?>
    </div>
    <!-- Start Brand -->