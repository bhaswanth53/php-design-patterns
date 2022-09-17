<?php

    require_once "./facebook.php";
    require_once "./fbadapter.php";

    $fb = new FacebookAdapter(new Facebook());
    $fb->post("My name is Bhaswanth");