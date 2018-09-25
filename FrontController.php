<?php

require_once '../autoload.php';

$request = $_SERVER['REQUEST_URI'];

if ($position = strpos($request, '?')) {
    $request = substr($request, 0 , $position);
}

$path = explode('/', $request);

$controller = '\Http\Controllers\\' . ucfirst($path[1]) . 'Controller';

$controller = new $controller();
$method = 'index';

if (array_key_exists(2, $path)) {
    $method = $path[2];
}

$arguments = array_slice($path, 3);

$controller->{$method}($_SERVER['QUERY_STRING']);
