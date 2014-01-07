<?php

error_reporting(-1);

require 'phplib/vendor/mustache-2.5/src/Mustache/Autoloader.php';
Mustache_Autoloader::register();

$mustache = new Mustache_Engine(array(
    'template_class_prefix' => '__MyTemplates_',
    //'cache' => dirname(__FILE__).'/tmp/cache/mustache',
    //'cache_file_mode' => 0666, // Please, configure your umask instead of doing this :)
    //'cache_lambda_templates' => true,
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/../views'),
    'partials_loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/../views/partials'),
    'escape' => function($value) {
        return htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
    },
    'charset' => 'UTF-8',
    'logger' => new Mustache_Logger_StreamLogger('php://stderr'),
    'strict_callables' => true,
));

function request($item) {
    if (isset($_POST[$item])) {
        return $_POST[$item];
    } else {
        return '';
    }
}

function validate_answer($answers_array) {
    return in_array(strtolower(request('answer')), $answers_array);
}