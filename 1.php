<?php

require 'phplib/bootstrap.php';

$tpl = $mustache->loadTemplate('1');
echo $tpl->render(array('bar' => 'baz'));