<?php

function autoload($className) {
    
    $extension = spl_autoload_extensions();

    $className = str_replace('\\', '/', $className);
    
    require_once(__DIR__ . '/src/' . $className . $extension);
}

spl_autoload_extensions('.php');

spl_autoload_register('autoload');