<?php
    declare(strict_types=1);

    require __DIR__ . '/../vendor/autoload.php';
    require __DIR__ . '/../src/helpers.php';
    
    use src\router;
    use src\env;

    use app\database\database;
    use app\database\mysqli;

    $router = new router();

    $env = new env();
    $env();

    $database = new database(new mysqli());
    $database->db->select("post", ['title' => 'sda']);
    $database->db->execute();
    print_r($database->db->getResult($database->db::ASSOC_RESULT));

    $router->resolve();