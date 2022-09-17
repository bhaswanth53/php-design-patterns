<?php

    require_once "./facebook.php";
    require_once "./socialadapter.php";

    class FacebookAdapter implements SocialMediaAdapter
    {
        private $instance;

        public function __construct(Facebook $facebook)
        {
            $this->instance = $facebook;
        }

        public function post($msg)
        {
            $this->instance->postToWall($msg);
        }
    }