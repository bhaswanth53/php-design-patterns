<?php

    require_once "./strategy.php";

    class QuickSort implements SortStrategy
    {
        private $data;

        public function __construct(Array $data)
        {
            $this->data = $data;
        }

        public function sort()
        {
            echo "Quick sort";
        }
    }