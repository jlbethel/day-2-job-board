<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Job';

    $app = new Silex\Application();
    $app->get("/", function() {
        
    });

?>
