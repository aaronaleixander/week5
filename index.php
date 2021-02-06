<?php
// turn on error reporting
ini_set('display_error', 1);
error_reporting(E_ALL);

// require the autoload file
require_once('vendor/autoload.php');
require_once('model/data-layer.php');

// create an instance of the base class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /' , function($f3){
    //save variables --- fat free hive storing data in your fat free object
    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with Templates');
    $f3->set('ftemp', 67);
    $f3->set('color', 'purple');
    $f3->set('radius', 10);
    $f3->set('veggies', array('carrot', 'potato', 'bok choy')); // hard coded array
    $f3->set('fruits', getFruit()); // model is giving you your data
    $f3->set('salaries', getSalary());
    $f3->set('num', 10);
    $f3->set('preferredCustomer', true);
    // $f3->set('myPet', new Pet('Fido'));  --- example for later day. oop php

    // load a template
    $template = new Template();
    echo $template->render('views/info.html');

    // alternate syntax
    // echo Template::instance()->render('views/info.html');

});

// Run fat free
$f3->run();