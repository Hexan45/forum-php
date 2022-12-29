<?php
    declare(strict_types=1);

    namespace app\controllers;

    use src\template;

    class post extends template {
        public function index() : void {
            $this->renderView('post', [
                'title' => 'post name'
            ]);
        }

        public function post() : void {

        }
    }