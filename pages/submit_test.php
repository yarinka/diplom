<?

//TODO: receive answer of the user and save it into the database
$test_id = $_GET['test_id'];

//TODO: Get type of the test by it's id.
// The switch below is just for demonstration,
// matching between test_id and tast_type is taken from get_test.php file.
switch ($test_id) {
    case 1: $test_type = 1; break;
    case 2: $test_type = 2; break;
    case 3: $test_type = 1; break;
    case 4: $test_type = 2; break;
    case 5: $test_type = 1; break;
    case 6: $test_type = 2; break;
    case 7: $test_type = 1; break;
    case 8: $test_type = 3; break;
}

echo "Test type = " . $test_type . "\n";

if ($test_type === 1) {
    $answers = $_GET['answers'];
    // For debug purposes.
    var_dump($answers);
    //TODO: verify test 1
} else if ($test_type === 2) {
    $answer = $_GET['answer'];
    // For debug purposes.
    var_dump($answer);
    //TODO: verify test 2
} else if ($test_type === 3) {
    $answer = $_GET['answer'];
    // For debug purposes.
    var_dump($answer);
    //TODO: verify test 3
}