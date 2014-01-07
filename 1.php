<?php

require 'phplib/bootstrap.php';

$success = false;
$answers = array(
    'hoover dam',
    'hooverdam',
    'the hoover dam',
    'thehooverdam',
);


if (validate_answer($answers)) {
    $success = true;
}

$tpl = $mustache->loadTemplate('1');
echo $tpl->render(array(
  'bar' => 'baz',
  'success' => $success,
));