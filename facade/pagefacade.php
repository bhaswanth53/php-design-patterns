<?php

    require_once "./template.php";
    require_once "./database.php";
    require_once "./logger.php";

    class PageFacade
    {
        public function createAndServe($id, $msg = "")
        {
            $db = new Database();
            $db->getData($id);

            $template = new Template($id);
            $template->serve();

            $logger = new Logger();
            $logger->log("Creating a page for $id");
        }
    }