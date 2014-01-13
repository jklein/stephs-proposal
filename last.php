<?php

require 'phplib/bootstrap.php';

$tpl = $mustache->loadTemplate('last');

echo $tpl->render();