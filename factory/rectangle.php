<?php

    require_once "./shape.php";

    class Rectangle implements shape
    {
        private $position;

        public function __construct($pos)
        {
            $this->position = $pos;
        }

        public function draw()
        {
            echo "Drawing a rectangle";
        }
    }