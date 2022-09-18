<?php

    require_once "./pagefacade.php";

    $id = 23;

    $page = new PageFacade();
    $page->createAndServe($id, "Serving a page $id");