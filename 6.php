<?php

require 'phplib/bootstrap.php';

$success = false;
$failure = false;
$step = 6;

$question = 'This is another physical clue.  Your hint is "Maximus Decimus Meridius".';

$answers = array(
    'the colosseum',
);

$success_img = '<img src="https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-frc3/t31/466621_564449681226_622433152_o.jpg" width="721" height="431" />';
$success_message = '<strong>That one was a doozey...</strong> Onward!';

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