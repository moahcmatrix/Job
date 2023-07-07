<div class="row">

    <?php
    if (isset($jobs)) {
        for ($i = 0; $i < count($jobs); $i++) {
    ?>
    <div class="col-12 my-2">
        <a href="<?php echo "jobdetials.php?id=" . $jobs[$i]['id']; ?>" class="text-decoration-none text-color">
            <div class="row rounded-5 job">
                <div class="col-12 col-md-3 my-lg-0 my-2">
                    <img class="img-fluid rounded-5" src="<?php echo $jobs[$i]['image'] ?>" />
                </div>
                <div class="col-12 col-md-9">
                    <div class="d-flex justify-content-between my-lg-1 align-items-center">
                        <h1 class="fs-6"><?php echo $jobs[$i]['title'] ?></h1>
                        <div class="d-flex align-content-center">
                            <p
                                class="fs-5 m-0 mx-3 border-color d-flex justify-content-center align-items-center p-2 rounded-5 text-color fs-6">
                                <?php

                                        $type = $database->query('SELECT * FROM type WHERE id=:id And language=:lang', [
                                            ':id' => $jobs[$i]['type'],
                                            ':lang' => $language
                                        ]);

                                        echo $type[0]['name'];
                                        ?>

                            </p>
                            <?php if (Authenticate::isAuth()) { ?>
                            <button class="btn btn-primary button fs-6">Apply</button>
                            <?php } ?>
                        </div>
                    </div>
                    <p class="text-start p-2 p-lg-0 fs-6">
                        <?php echo substr($jobs[$i]['description'], 0, 400); ?>
                    </p>
                </div>
            </div>
    </div>
    </a>
    <?php
        }
    }
    ?>

</div>