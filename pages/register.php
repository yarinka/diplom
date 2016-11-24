<?

$login = $_POST["login"];
$pw1 = $_POST["password"];
$pw2 = $_POST["password2"];
$submitted = $_POST["submitted"];

$values['login'] = $_POST["login"];
$values['password'] = $_POST["password"];
$values['password2'] = $_POST["password2"];

if ($submitted !== "true") {
    // User opens registration form.
    load_template("reg_form", $values);
} else {
    // User submits registration form.
    $has_error = false;
    if ($login == '') {
        $values['error'] = 'Login is empty!';
        $has_error = true;
    } else if ($pw1 !== $pw2) {
        $values['error'] = 'Passwords are not equal!';
        $has_error = true;
    } else if ($pw1 === '') {
        $values['error'] = 'Password is empty!';
        $has_error = true;
    }
    
    if ($has_error) {
        // If there was an error.
        $values['login'] = $_POST["login"];
        // Never pass passwords back!
        //$values['password'] = $_POST["password"];
        //$values['password2'] = $_POST["password2"];
        load_template("reg_form", $values);
    } else {
        // If there were no errors.
        // TODO: register user in the database.
        // Redirect it to the main page.
        header('Location: index.php?page=main&message=reg_success');
    }
}