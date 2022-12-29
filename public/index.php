<?php
    declare(strict_types=1);

    require __DIR__ . '/../vendor/autoload.php';
    require __DIR__ . '/../src/helpers.php';
    
    use src\router;

    $router = new router();

    $router->resolve();