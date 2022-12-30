<?php
    declare(strict_types=1);

    if(!function_exists('out')) {
        function out(string $data) : void {
            echo htmlspecialchars($data, ENT_QUOTES);
        }
    }

    if(!function_exists('route')) {
        function route(string $link, ?array $params = null) : string {
            $exploded_link = explode('/', $link);
            array_shift($exploded_link);
            $new_link = array();

            if(!is_null($params)) {
                foreach($exploded_link as $key => $value) {
                    $new_link[] = (array_key_exists($key, $params)) ? $params[1] : $value;
                }
            }

            return '/' . implode('/', $new_link);
        }
    }