<?php

    require_once "./rectangle.php";
    require_once "./mock.php";

    class Position {}

    class ShapeFactory
    {
        public function create($type)
        {
            if($type == "Rectangle") {
                return new Rectangle(new Position());
            }
        }
    }