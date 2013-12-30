<?php

require 'phplib/bootstrap.php';

$tpl = $mustache->loadTemplate('7');
echo $tpl->render(array('bar' => 'baz'));