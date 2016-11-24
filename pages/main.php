<?

$message = $_GET['message'];

$values['user_logged_in'] = $user_logged_in;
$values['user_login'] = $user_login;

switch ($message) {
    case 'reg_success':
        $values['message'] = 'Registration is successfull! You can log in.';
        break;
    case 'login_success':
        $values['message'] = 'Willkommen, ' . $user_login .'!';
        break;
}

load_template('main', $values);