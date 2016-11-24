<?
echo "hello world";
$page = $_GET["page"];
$session_id = $_COOKIE["session_id"];

if ($session_id != '') {
    // TODO: load user info from database.
    $user_logged_in = true;
    $user_login = "test";
} else {
    $user_logged_in = false;
}

function load_template($name, $v) {
    include 'pages/templates/' . $name . '.html';
}

// Set default page if user specified nothing.
if ($page == '') {
    $page = 'main';
}

// Dangerous!
$file_controller = "pages" . DIRECTORY_SEPARATOR . $page . ".php";

if (file_exists($file_controller)) {
    include $file_controller;
} else {
    echo "404 - Page Not Found!";
}
?>