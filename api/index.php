<?php

$root = dirname(__DIR__);

chdir($root);

$_SERVER['DOCUMENT_ROOT'] = $root;
$_SERVER['SCRIPT_FILENAME'] = $root . '/index.php';
$_SERVER['SCRIPT_NAME'] = '/index.php';

require $root . '/index.php';