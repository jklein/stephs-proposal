<?php

require 'phplib/bootstrap.php';

$tpl = $mustache->loadTemplate('8');
echo $tpl->render(array('bar' => 'baz'));