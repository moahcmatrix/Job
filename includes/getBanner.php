<?php
$brands = $database->query('SELECT * FROM Brands', null);

if ($brands != null) {
?>
<!-- Start Brand -->
<div class="container p-lg-3 mt-2">
    <div class="row justify-content-center align-content-center">
        <?php for ($i = 0; $i < count($brands); $i++) { ?>
        <!-- Start Brand-->
        <div class="col-4 col-md-3 col-lg-2">
            <img class="img-fluid" src="<?= $brands[$i]['image'] ?>" />
        </div>
        <?php } ?>
    </div>
</div>
<?php } ?>