<?

$test_id = $_GET['test'];
//TODO: receive test with $test_id from database
// Fake hardcoded test just for demo
$values['questions'] = array(
    1, 2, 3, 4, 5, 6, 7, 8 // These are ids of particular questions
);

load_template("run_test", $values);