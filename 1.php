<?php

require 'phplib/bootstrap.php';

if ($_POST['answer'] == 'correct answer') {
    $success = true;
}

$tpl = $mustache->loadTemplate('1');
echo $tpl->render(array(
  'bar' => 'baz',
  'success' => $success,
));