<?php

require 'phplib/bootstrap.php';

$success = false;
$failure = false;
$step = 4;

$question = 'Did someone say green screen?  This view might have been better in color.';

$answers = array(
    'tunnel view',
    'tunnelview',
);

$success_img = '<img src="https://scontent-b-lga.xx.fbcdn.net/hphotos-frc3/t1/33737_555685928954_8036413_n.jpg?lvh=1" width="720" height="404">';
$success_message = "<strong>Ug.</strong>  But that's right.  Let's continue quickly!";

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