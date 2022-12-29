<?php
    declare(strict_types=1);

    namespace app\controllers;

    use src\template;

    final class home extends template {
        public function index() {
            $this->renderView('home', [
                'title' => 'Strona główna'
            ]);
        }

        public function post() {

        }
    }