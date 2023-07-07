<?php
$banner = 'ContactUs';
$bannerDescription = 'Banner';

include 'includes/header.php';
include 'includes/getBanner.php';


?>

<!-- Start Brand -->
<div class="container my-3 my-md-5">
    <div class="row">
        <div class="col-12 col-md-6 overflow-hidden">
            <iframe class="w-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13800.71922003523!2d31.319848499999996!3d30.14627495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14581576e8dc74ed%3A0x9c5fd8ba1e59363e!2sIRON%20GYM!5e0!3m2!1sen!2seg!4v1674204924642!5m2!1sen!2seg"
                height="450" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-12 col-md-6 my-3">
            <?php include 'includes/contact.php'; ?>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>