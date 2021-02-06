<?php
//328/week5/model/data-layer.php
//define a function to "get" data from somewhere

/*
 * Returns an array of fruits
 * @return fruits array
 */
function getFruit(){
    // ie connect to database
    // read fruits
    // process database
    // etc
    // then return the data

    // but for now...
    $fruits = array('apple', 'banana', 'orange', 'kiwi', 'papaya');
    return $fruits;
}
/*
 * Returns an associative array of names and salaries
 * @return array
 */
function getSalary(){
    $salaries = array('Jessica'=>200000, 'Heather'=>250000, 'Blyzyl'=>300000);
    return $salaries;
}