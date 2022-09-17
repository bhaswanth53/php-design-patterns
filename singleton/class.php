<?php

    class Database
    {
        public static $instance;

        private function __construct()
        {
            //
        }

        public static function getInstance()
        {
            if(!isset(Database::$instance))
                Database::$instance = new Database();
            return Database::$instance;
        }

        public function getQuery()
        {
            return "select * from members";
        }
    }
?>