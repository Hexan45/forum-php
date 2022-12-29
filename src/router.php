<?php
    declare(strict_types=1);

    namespace src;

    use src\request;

    final class router {
        private string $controller = '_404';
        private array $params = [];

        private const METHODS = [
            'GET' => 'index',
            'POST' => 'post'
        ];

        public function __construct() {
            request::initialize();
        }

        private function getControllerExists(string $controllerName) : bool {
            if(file_exists(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . $controllerName . '.php')) {
                return true;
            }
            return false;
        }

        private function getParamsFromPath(array $paths) : void {
            unset($paths[0]);
            $this->params = array_values($paths);
        }

        private function getControllerData() : void {
            $paths = request::getPaths();
            array_shift($paths);

            $controllerName = ($paths[0] === '') ? 'home' : $paths[0];

            if($this->getControllerExists($controllerName)) {
                $this->controller = $controllerName;
                $this->getParamsFromPath($paths);
            }
        }

        public function resolve() : void {
            $this->getControllerData();

            $controller = '\\app\\controllers\\' . $this->controller;
            call_user_func_array([new $controller, self::METHODS[request::getMethod()]], [$this->params, request::getQuery()]);
        }
    }