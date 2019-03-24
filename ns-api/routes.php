<?php
//This php file contains all routes that are working for this website

//Index routes
router::set('index', function() {
    router::$found = 1;
    baseController::createView('index');
});

router::set('index.php', function() {
    router::$found = 1;
    baseController::createView('index');
});

router::set('ajax', function() {
    router::$found = 1;
    baseController::createView('ajax');
});

router::set('test', function() {
    router::$found = 1;
    baseController::createView('test');
});

