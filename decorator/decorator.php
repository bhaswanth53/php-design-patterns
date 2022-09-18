<?php

    require_once "./logger.php";

    abstract class LoggerDecorator implements Logger {
        protected $logger;

        public function __construct(Logger $logger) {
            $this->logger = $logger;
        }

        public function log($msg) {
            $this->logger->log($msg);
        }
    }