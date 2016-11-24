<?

// Remove session cookies.
setcookie('session_id', '', 1);
// TODO: remove session from database.
// And regirect to the main page.
header('Location: index.php?page=main');
