<?php
/* Start Form Validation */
$email = $message = '';
$emailError = $messageError = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email'])) {
        $email = cdata($_POST['email']);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = $resource['ErrorFormatEmail'];
        }
    } else {
        $emailError = $resource['ErrorEmail'];
    }

    if (!empty($_POST['message'])) {
        $message = cdata($_POST['message']);

        if ($message == '') {
            $messageError = $resource['ErrorEmptyMessage'];
        }
    } else {
        $messageError = $resource['ErrorMessage'];
    }

    if ($emailError == '' && $messageError == '') {
        $database->execute("INSERT INTO `message` (`id`, `email`, `message`) VALUES (NULL, :email, :message);", [
            ':email' => $email,
            ':message' => $message
        ]);

        $statusMessage = 'Complete To Send';
        $email = $message = '';
    }
}
?>
<form class="d-flex flex-column h-100" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" placeholder="name@example.com"
            value="<?php echo $email; ?>" />
        <span class="text-danger"><?php echo $emailError; ?></span>
    </div>
    <div class=" mb-3 h-50 overflow-hidden">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control h-75" name="message" rows="3"><?php echo $message; ?></textarea>
        <span class="text-danger"><?php echo $messageError; ?></span>
    </div>
    <?php if (isset($statusMessage)) { ?>
    <span class="text-primary text-color"><?= $resource['FormContactStatus'] ?></span>
    <?php } ?>
    <button class=" btn btn-primary button">Send</button>
</form>