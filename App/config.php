<?php
define('BASEDIR', dirname(__FILE__, 2));
define('VIEWS', BASEDIR . '/App/View/modules/');

$_ENV['db']['host'] = 'localhost:3308';
$_ENV['db']['user'] = 'root';
$_ENV['db']['pass'] = '';
$_ENV['db']['database'] = 'db_mvc';
?>