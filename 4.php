<?php

require 'phplib/bootstrap.php';

$tpl = $mustache->loadTemplate('4');
echo $tpl->render(array('bar' => 'baz'));