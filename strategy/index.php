<?php

    require_once "./quicksort.php";
    require_once "./mergesort.php";

    $array = [];

    for($i=0; $i<150; $i++) {
        $array[] = rand(1, 50);
    }

    function sorts(Array &$data) {
        if(count($data) > 20) {
            $temp = new QuickSort($data);
        } else {
            $temp = new MergeSort($data);
        }
        $temp->sort();
    }

    sorts($array);