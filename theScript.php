<?php
include ('additionalScriptThatIsNotRedundantButContainsBaseFunctionality.php');

$people = array("Vasya", "Olya", "Nastya", "Kakashka");
$greets = array("hi", "hello", "zdorova", "privetik");

$greetsPeople = createStringsFromArrays($greets, $people);

foreach ($greetsPeople as $value) {
    print $value;
}