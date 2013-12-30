<?php

require 'phplib/bootstrap.php';

$tpl = $mustache->loadTemplate('10');
echo $tpl->render(array('bar' => 'baz'));