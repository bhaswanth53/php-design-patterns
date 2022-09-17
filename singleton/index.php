<?php

    require "./class.php";

    $db = Database::getInstance();
    echo $db->getQuery();