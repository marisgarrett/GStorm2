<?php
    require 'autoloader.php';
    
    $routes = new \GStorm\Routes();    

    $entryPoint = new \GStorm\EntryPoint($routes);

    $entryPoint->run();
?>