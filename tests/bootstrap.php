<?php

require_once APPLICATION_PATH.'/../library/Symfony/Component/ClassLoader/UniversalClassLoader.php';
use Symfony\Component\ClassLoader\UniversalClassLoader;

define('APPLICATION_PATH', realpath(__DIR__));

// Register autoloader
$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
	'Symfony' => realpath(APPLICATION_PATH.'/../library'),
	'Application' => realpath(APPLICATION_PATH.'/..'),
	'Test' => realpath(APPLICATION_PATH.'/../tests'),
));
$loader->register();

