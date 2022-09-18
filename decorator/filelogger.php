<?php

    require_once "./decorator.php";
    require_once "./logger.php";

    class FileLogger implements Logger
    {
        public function log($msg)
        {
            echo "Logging to FILE: " . $msg;
        }
    }

    class EmailLogger extends LoggerDecorator
    {
        public function log($msg)
        {
            $this->logger->log($msg);
            echo "Logging to EMAIL: " . $msg;
        }
    }

    class TextLogger extends LoggerDecorator
    {
        public function log($msg)
        {
            $this->logger->log($msg);
            echo "Logging to TEXT: " . $msg;
        }
    }

    class FaxLogger extends LoggerDecorator
    {
        public function log($msg)
        {
            $this->logger->log($msg);
            echo "Logging to FAX: " . $msg;
        }
    }
