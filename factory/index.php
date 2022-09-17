<?php

    require_once "./factory.php";

    $shape = new ShapeFactory();
    $rect = $shape->create("Rectangle");
    $rect->draw();