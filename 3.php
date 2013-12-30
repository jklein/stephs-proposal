<?php

require 'phplib/bootstrap.php';

$tpl = $mustache->loadTemplate('3');
echo $tpl->render(array('bar' => 'baz'));