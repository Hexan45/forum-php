<?php
    declare(strict_types=1);

    require __DIR__ . '/../vendor/autoload.php';
    require __DIR__ . '/../src/helpers.php';
    
    use src\router;
    use src\env;

    use app\database\database;
    use app\database\mysqli;
    use app\database\builder\queryBuilder;

    $router = new router();

    $env = new env();
    $env();

    $database = new database(new mysqli());
    $query = (new queryBuilder)
        ->select('post', 'id')
        ->where(['id' => 1, 'title' => 'siema'], 'AND')
        ->limit(5);
    echo $query->getQuery();
    //$database->db->execute();

    $router->resolve();