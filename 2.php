<?php

require 'phplib/bootstrap.php';

$tpl = $mustache->loadTemplate('2');
echo $tpl->render(array('bar' => 'baz'));