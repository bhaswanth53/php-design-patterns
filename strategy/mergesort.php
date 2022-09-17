<?php

    require_once "./strategy.php";

    class MergeSort implements SortStrategy
    {
        private $data;

        public function __construct(Array $data)
        {
            $this->data = $data;
        }

        public function sort()
        {
            echo "Merge sort";
        }
    }