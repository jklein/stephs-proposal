<?php

require 'phplib/bootstrap.php';

$tpl = $mustache->loadTemplate('6');
echo $tpl->render(array('bar' => 'baz'));