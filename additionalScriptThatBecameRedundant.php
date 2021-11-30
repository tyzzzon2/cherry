<?php

//some functionality

function createStringsFromArrays (array $leftPartArray, array $rightPartArray) {
    if (count($leftPartArray) != count($rightPartArray)) {
        return ['Wrong parameters'];
    }
    $resultArray = [];
    foreach ($leftPartArray as $value) {
        $resultArray[] = $value . ', ' . array_shift($rightPartArray);
    }
    return $resultArray;
}