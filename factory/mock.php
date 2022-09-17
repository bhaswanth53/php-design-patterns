<?php

    require_once "./shape.php";

    class MockShape implements Shape
    {
        public function draw()
        {
            return true;
        }
    }