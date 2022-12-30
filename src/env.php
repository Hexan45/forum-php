<?php
    declare(strict_types=1);

    namespace src;

    class env {
        private string $envPath = '';
        private array $variablesData = [];

        public function __construct(?string $filePath = null) {
            $this->envPath = (!is_null($filePath)) ? $filePath : dirname(__DIR__) . DIRECTORY_SEPARATOR . '.env';
        }

        private function checkFileExists() : bool {
            if(!file_exists($this->envPath) && !is_readable($this->envPath)) return false;
            return true;
        }

        private function setENV() : void {
            foreach($this->variablesData as $variableName => $variableValue) {
                if(!array_key_exists($variableName, $_SERVER)) $_SERVER[$variableName] = $variableValue;
                if(!array_key_exists($variableName, $_ENV)) $_ENV[$variableName] = $variableValue;
            }
        }

        public function __invoke() : void {
            if($this->checkFileExists()) {
                $file = fopen($this->envPath, 'r');

                if(!$file) {
                    trigger_error('env file error - cannot open file', E_USER_ERROR);
                    return;
                }

                while(!feof($file)) {
                    $line = fgets($file);

                    if(str_starts_with($line, '#')) continue 1;

                    list($variableName, $variableValue) = explode('=', $line, 2);

                    $variableName = trim($variableName);
                    $variableValue = trim($variableValue);

                    $this->variablesData[$variableName] = $variableValue;
                }

                $this->setENV();
            }
        }
    }