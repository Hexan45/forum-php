<?php
    declare(strict_types=1);

    namespace app\controllers;

    use src\template;

    class forum extends template {
        public function index() : void {
            $this->renderView('forum', [
                'title' => 'forum name'
            ]);
        }

        public function post() : void {

        }
    }