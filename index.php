<?php

require 'phplib/bootstrap.php';

$tpl = $mustache->loadTemplate('index');
echo $tpl->render(array('bar' => 'baz'));