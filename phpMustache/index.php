<?php
require('vendor/autoload.php');
$options =  array('extension' => '.html');
$m = new Mustache_engine([
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/template', $options),
]);
echo $m->render('index', [
    'name' => 'world'
]);