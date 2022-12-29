<?php
    declare(strict_types=1);

    if(!function_exists('out')) {
        function out(string $data) {
            echo htmlspecialchars($data, ENT_QUOTES);
        }
    }