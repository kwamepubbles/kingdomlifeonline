<?php
    define('USER', 'root');
    define('PASSWORD', '');
    define('HOST', 'localhost');
    define('DATABASE', 'klm_db');
    try {
        $plug = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
        $plug->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>