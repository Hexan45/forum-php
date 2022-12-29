<?php
    declare(strict_types=1);

    namespace src;

    abstract class template {
        private string $viewPath;
        private string $pageContent;

        private function getViewExists(string $viewName) : mixed {
            $path = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $viewName . '.view.php';
            
            return (file_exists($path)) ? $path : false;
        }

        private function loadView(?array $parameters = null) : string {
            ob_start();
            if(!is_null($parameters))
                extract($parameters);
                
            include_once($this->viewPath);

            $content = ob_get_contents();
            ob_clean();
            return $content;
        }

        public function renderView(string $viewName, ?array $parameters = null) : void {
            if($viewPath = $this->getViewExists($viewName)) {
                $this->viewPath = $viewPath;
                $this->pageContent = $this->loadView($parameters);

                echo $this->pageContent;
            } else {
                trigger_error('View named ' . $viewName . ' not exists!', E_USER_ERROR);
            }
        }
    }