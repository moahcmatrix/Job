<?php

function redirect($page)
{
    header("Location : $page");
    exit();
}

function cdata($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

function isCookie()
{
    setcookie('test', '', time() + (86400 * 30), '/');

    if (isset($_COOKIE['test'])) {
        return true;
    }

    return false;
}

function parseLangPath($lang)
{
    return "languages/$lang-language.ini";
}


// if (!isCookie()) {
//     redirect(PAGES['cookie']);
// }


/* Start Loading Language */
$language = language;
$language_path = null;
$language_rtl = false;

if (isset($_GET['lang'])) {
    $language = $_GET['lang'];
}

$language_path = parseLangPath($language);

if (!file_exists($language_path)) {
    redirect(PAGES['Error.php']);
}

$resource = parse_ini_file($language_path);