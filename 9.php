<?php

require 'phplib/bootstrap.php';

$success = false;
$failure = false;
$step = 9;

$question = "A hidden pool...and an unexpectedly gorgeous view.  I'm looking for the name of the location within the city.";

$answers = array(
    'zilker botanical garden',
    'zilker botanical gardens',
    'zilker garden',
    'zilker gardens',
    'zilker',
);

$success_img = '<img src="https://scontent-b-ord.xx.fbcdn.net/hphotos-prn2/1472813_626884431486_1709131629_n.jpg" width="360" height="480" />';
$success_message = "<strong>That's the one!</strong> You look great in this picture :-)";

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