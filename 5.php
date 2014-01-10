<?php

require 'phplib/bootstrap.php';

$success = false;
$failure = false;
$step = 5;

$question = 'Legend has it that as soon as they finish repainting this bridge, they have to start over again';

$answers = array(
    'golden gate bridge',
    'the golden gate bridge',
);

$success_img = '<img src="https://scontent-a-ord.xx.fbcdn.net/hphotos-ash2/65272_555685614584_5729765_n.jpg?lvh=1" width="720" height="404">';
$success_message = '<strong>Bingo!</strong>  You are halfway through :-)';

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