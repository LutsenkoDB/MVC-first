<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       define('ROOT',dirname(__FILE__));
       require_once (ROOT.'/components/router.php');
       
       $router = new Router();
       $router->run();
    
    //$url = $_SERVER['REQUEST_URI'];
    //var_dump($url);
        ?>
    </body>
</html>
