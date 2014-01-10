<?php

require 'phplib/bootstrap.php';

$success = false;
$failure = false;
$step = 3;

$question = 'This one is a physical clue.  You have to find the answer written on a piece of paper
                        in the condo :-).  Think of an early morning and some beautiful rust.';

$answers = array(
    'the dimitrios',
);

$success_img = '<img src="http://upload.wikimedia.org/wikipedia/commons/3/30/Nauagio_Dimitrios.jpg" width="576" height="432">';
$success_message = "<strong>Nailed it!</strong>  Did you know that the name of the beached ship is 'The Dimitrios'?  I didn't!";

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