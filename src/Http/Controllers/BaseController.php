<?php

namespace Http\Controllers;

abstract class BaseController
{
    const VIEWS = 'Views';

    public function view($view, $variables = [])
    {     
        $path = str_replace('Http'. DIRECTORY_SEPARATOR .'Controllers', '', __DIR__);
        
        $view = $path . Self::VIEWS . '/' . $view . '.php';

        require_once $path . Self::VIEWS . '/template.php';
    }

    public function redirectTo($path)
    {
        header('Location:'. $path);
    }
}