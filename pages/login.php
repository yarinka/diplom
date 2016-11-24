<?

$submitted = $_POST["submitted"];
$login = $_POST["login"];
$pw = $_POST["password"];

if (!$submitted) {
    // Simply show login page, the user just entered the page.
    load_template('login', $values);
} else {
    // The user submitted login form.
    // Of course, you will use database to check credentials.
    if ($login === 'test' && $pw === '123') {
        // TODO: Log the user in.
        // TODO: Create session_id and save it in the database.
        $session_id = 'test123415413512';
        // Save session id to the user's cookies.
        setcookie('session_id', $session_id);
        // And regirect to the main page.
        header('Location: index.php?page=main&message=login_success');
    } else {
        // Reject.
        $values['error'] = 'Invalid credentials!';
        load_template('login', $values);
    }
}
