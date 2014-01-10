<?php

require 'phplib/bootstrap.php';

$success = false;
$failure = false;
$step = 8;

$question = 'Another physical clue. The hint is "Hunger Games".';

$answers = array(
    'santo stefano di sessanio',
);

$success_img = '<img src="https://dl.dropboxusercontent.com/u/3249984/474115_564449401786_1569328280_o.jpg" width="545" height="708" />';
$success_message = '<strong>Hehe.</strong> Dogs, horses, beautiful scenery, what more could you want?!';

if (validate_answer($answers)) {
    $success = true;
} elseif (!empty($_POST)) {
    $failure = true;
}

$tpl = $mustache->loadTemplate('question');
echo $tpl->render(array(
    'success' => $success,
    'failure' => $failure,
    'step' => $step,
    'progress_width' => ($step - 1),
    'next_step' => ($step + 1),
    'success_img' => $success_img,
    'success_message' => $success_message,
    'question' => $question,
));