<?php

    require_once "./decorator.php";

    class EmailLogger extends LoggerDecorator
    {
        public function log($msg)
        {
            echo "Logging to EMAIL: " . $msg;
        }
    }