<?php


class Router
{

    private $routes;

    public function __construct()
    {
        $routePath = ROOT.'/config/routes.php';
        $this->routes = include($routePath);
    }

    /* Returns request string
    @return string
    */

    private function getURI() {
        if(!empty($_SERVER['REQUEST_URI']))
         {
            return  trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
      $uri = $this->getURI();

     foreach($this->routes as $uriPattern => $path) {
       if(preg_match("~$uriPattern~",$uri)) {
         
        $segments  = explode('/',$path);
        $controllerName = array_shift($segments).'Controller';
        $controllerName = ucfirst($controllerName);
            
        $actionName = 'action'.ucfirst(array_shift($segments));

        $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
       
         if(file_exists($controllerFile)) {
             $result = include_once($controllerFile);
             
         }
        
         $controllerObject = new $controllerName;
         $result = $controllerObject->$actionName();
         print_r($result);
             
       }  

     }


    }
    



}