<?php

require 'phplib/bootstrap.php';

$success = false;
$failure = false;
$step = 7;

$question = 'Bear Cave!  We hiked this beautiful path last year.';

$answers = array(
    'the flume',
    'franconia notch',
    'franconia notch park',
);

$success_img = '<img src="https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-frc3/1291763_617455377386_1215594736_o.jpg" width="721" height="541" />';
$success_message = '<strong>Arrr!</strong> Look out!';

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