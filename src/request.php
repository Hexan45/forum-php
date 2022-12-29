<?php
    declare(strict_types=1);

    namespace src;

    final class request {
        private static string $scheme = '';
        private static array $paths = [];
        private static string $method = '';
        private static string $host = '';
        private static array $queries = [];

        private static function parseURL() : array {
            return parse_url($_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
        }

        public static function initialize() : void {
            $parsedURL = self::parseURL();
        
            self::$scheme = $parsedURL['scheme'];
            self::$host = $parsedURL['host'];

            self::$method = $_SERVER['REQUEST_METHOD'];

            self::$paths = explode('/', $parsedURL['path']);

            if(isset($parsedURL['query'])) parse_str($parsedURL['query'], self::$queries);
        }

        public static function getScheme() : string {
            return self::$scheme;
        }

        public static function getPaths() : array {
            return self::$paths;
        }

        public static function getMethod() : string {
            return self::$method;
        }

        public static function getHost() : string {
            return self::$host;
        }

        public static function getQuery() : array {
            return self::$queries;
        }
    }