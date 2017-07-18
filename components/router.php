<?php

class Router {
    
    private $routes;
    public function __construct()
    {
        $routesPath= ROOT.'/config/routes.php';
        $this->routes  = include($routesPath);
    }
    
    private function getUrl()
    {
        if(!empty($_SERVER['REQUEST_URI']))
        {
        return trim($_SERVER['REQUEST_URI'], '/');
        
        }
    }

    public function run()
    {
        $uri = $this-> getUrl();
        
        foreach ($this->routes as $uriPattern => $path){
            //echo "<br>$uriPattern -> $path";
            if(preg_match("~$uriPattern~", $uri)){
                
                //получение внутреннего роута
                
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                
             // echo 'Result route:'.$internalRoute.'<br>';
                //определение контроллера и экшена
                $string = explode("/", $internalRoute);
              //  echo '<pre>';
              // print_r($string);
                $controller = array_shift($string) .'Controller';
                $controller = ucfirst($controller);
               $action = 'action'.ucfirst(array_shift($string));
               
              // echo '<br>'.$controller;
               // echo '<br>'.$action;
               
               $param = $string;
              // echo '<pre>';
              // print_r($param);
               
               $cotrollerFile = ROOT.'/controllers/'.
                       $controller.'.php';
               if(file_exists($cotrollerFile)){
                   include_once ($cotrollerFile);
               }
               $controllerObject = new $controller;
               //$result = $controllerObject->$action();
               $result = call_user_func_array(array($controllerObject, $action),$param);
               
               if($result != null){
                   break;
               }
                
            }
        }
          
        
    }
}

