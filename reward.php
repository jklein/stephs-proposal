<?php

require 'phplib/bootstrap.php';

$tpl = $mustache->loadTemplate('reward');

echo $tpl->render();