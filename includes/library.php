<?php
include 'includes/vars.php';
include 'includes/manager.php';
include 'includes/auth.php';
include 'includes/database.php';

/* Start Database */

$database = Database::connect(db_server, db_name, db_username, db_password);

if ($database == null) {
    redirect(PAGES['Error']);
}