<?

$id = $_GET['test_id'];

$values['test_id'] = $id;

// Here we should retrieve these data from the database.
if ($id == 1) {
    $test_type = 1;
    $values['question'] = 'Test question1';
    $values['answers'] = array(
        'Answer 1',
        'Answer 2',
        'Answer 3',
        'Answer 4'
    );
} else if ($id == 2) {
    $test_type = 2;
    $values['question'] = 'Test question2';
    $values['answers'] = array(
        'Answer 1',
        'Answer 2',
        'Answer 3',
        'Answer 4'
    );
} else if ($id == 3) {
    $test_type = 1;
    $values['question'] = 'Test question3';
    $values['answers'] = array(
        'Answer 1',
        'Answer 2',
        'Answer 3',
        'Answer 4'
    );
} else if ($id == 4) {
    $test_type = 2;
    $values['question'] = 'Test question4';
    $values['answers'] = array(
        'Answer 1',
        'Answer 2',
        'Answer 3',
        'Answer 4'
    );
} else if ($id == 5) {
    $test_type = 1;
    $values['question'] = 'Test question5';
    $values['answers'] = array(
        'Answer 1',
        'Answer 2',
        'Answer 3',
        'Answer 4'
    );
} else if ($id == 6) {
    $test_type = 2;
    $values['question'] = 'Test question6';
    $values['answers'] = array(
        'Answer 1',
        'Answer 2',
        'Answer 3',
        'Answer 4'
    );
} else if ($id == 7) {
    $test_type = 1;
    $values['question'] = 'Test question7';
    $values['answers'] = array(
        'Answer 1',
        'Answer 2',
        'Answer 3',
        'Answer 4'
    );
} else if ($id == 8) {
    $test_type = 3;
    $values['question'] = 'Test question8';
}

// Select tempate depending on type of the test, retrieved from the database.
switch ($test_type) {
    case 1:
        load_template("test_type_1", $values);
        break;
    case 2:
        load_template("test_type_2", $values);
        break;
    case 3:
        load_template("test_type_3", $values);
        break;
}