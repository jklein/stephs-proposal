<?php

require 'phplib/bootstrap.php';

$success = false;
$failure = false;
$step = 1;

$question = "This structure was built in the early 1930's, and we visited it in 2010!";

$answers = array(
    'hoover dam',
    'hooverdam',
    'the hoover dam',
    'thehooverdam',
);

$success_img = '<img src="https://scontent-a-iad.xx.fbcdn.net/hphotos-ash2/28687_522084641106_8272751_n.jpg?lvh=1" width="720" height="540"/>';
$success_message = "<strong>Well done!</strong> Let's move on :-).";

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