<?php

define('APPLICATION_PATH', realpath(__DIR__));
require_once APPLICATION_PATH.'/../library/Symfony/Component/ClassLoader/UniversalClassLoader.php';
use Symfony\Component\ClassLoader\UniversalClassLoader;


// Register autoloader
$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
	'Symfony' => realpath(APPLICATION_PATH.'/../library'),
	'Application' => realpath(APPLICATION_PATH.'/..'),
));
$loader->register();

