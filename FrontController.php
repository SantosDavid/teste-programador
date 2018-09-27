<?php

require_once '../autoload.php';

class FrontController
{
    const PATH = '\Http\Controllers\\';

    const SLUG = 'Controller';

    public function run()
    {   
        $request = $this->removeParameters($_SERVER['REQUEST_URI']);
        
        $path = explode('/', $request);

        if ($path[1] === '') {
            return (new \Http\Controllers\DevicesController())->index();
        }
        
        $controller = Self::PATH . ucfirst($path[1]) . Self::SLUG;
        
        $controller = new $controller();
        $method = 'index';
        
        if (array_key_exists(2, $path)) {
            $method = $path[2];
        }

        try {
            
            $controller->{$method}();

        } catch (\Exception $e) {
            echo $e->getMessage() . PHP_EOL;
            echo $e->getFile() . PHP_EOL;
            echo $e->getLine();
        }
    }

    private function removeParameters($request)
    {
        if ($position = strpos($request, '?')) {
            $request = substr($request, 0 , $position);
        }

        return $request;
    }
}
