<?php

require 'phplib/bootstrap.php';

$success = false;
$failure = false;
$step = 10;

$question = "She makes an appearance in every other part of our lives, so I couldn't leave her out of this, could I?";

$answers = array(
    'lady',
);

$success_img = '<img src="https://scontent-b-ord.xx.fbcdn.net/hphotos-prn1/1555318_799894782454_475897643_n.jpg" width="520" height="520" />';
$success_message = '<strong>You did it!</strong> Click on for the first of your many rewards...';

if (validate_answer($answers)) {
    $success = true;
} elseif (!empty($_POST)) {
    $failure = true;
}

$tpl = $mustache->loadTemplate('final');
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