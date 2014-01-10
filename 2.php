<?php

require 'phplib/bootstrap.php';

$success = false;
$failure = false;
$step = 2;

$question = 'Throwing fish is a common occurance here, as are glorious views of a nearby mountain.
                        Our favorite memories of the city where this market resides are booths, steak, and sleeping at
                        inappropriate times.';

$answers = array(
    'pikes place',
    'pike\'s place',
    'pike place',
    'pike place market',
    'pike\'s place market',
    'pikes place market',
);

$success_img = '<img src="https://scontent-a-iad.xx.fbcdn.net/hphotos-ash2/162819_527583990366_1105837_n.jpg?lvh=1" width="720" height="431">';
$success_message = "<strong>Too Easy!</strong> It's going to get harder, don't worry...";

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