<?php
    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);
    $conn = mysqli_connect("db","root","root");
    mysqli_select_db($conn, 'sqli-lab');
