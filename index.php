<?php
    session_start();
    require_once 'bootstrap.php';
    $app = new App();
    echo '<pre>';
    print_r($app);
    echo '</pre>';
    // exit();s