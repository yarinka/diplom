<?

$tests = array(
    'C++' => 'cpp_test',
    'C#' => 'cs_test',
    'Java' => 'java_test',
    'Python' => 'python_test'
);

$values['tests'] = $tests;

load_template("tests", $values);