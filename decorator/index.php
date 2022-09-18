<?php

    require_once "./filelogger.php";

    $file = new FileLogger();
    $file = new EmailLogger($file);
    $file = new TextLogger($file);
    $file = new FaxLogger($file);

    $file->log("Saving file");