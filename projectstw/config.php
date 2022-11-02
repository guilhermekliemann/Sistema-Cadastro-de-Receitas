<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'projectstw_sql');

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "projectstw_sql";

    $conn = new PDO("mysql:host=$host;dbname=".$dbname, $user, $pass);
    $conn2 = new MySQLi(HOST, USER, PASS, BASE);
?>