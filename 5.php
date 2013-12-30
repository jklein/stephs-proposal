<?php

require 'phplib/bootstrap.php';

$tpl = $mustache->loadTemplate('5');
echo $tpl->render(array('bar' => 'baz'));