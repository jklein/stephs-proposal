<?php

require 'phplib/bootstrap.php';

$tpl = $mustache->loadTemplate('9');
echo $tpl->render(array('bar' => 'baz'));