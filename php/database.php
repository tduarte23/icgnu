<?php
    /* Conecta a um banco de dados MySQL */
    $dsn = 'mysql:dbname=icgnu_db;host=127.0.0.1';
    $user = 'root';
    $password = 'abc123';
    try {
        $conn = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
?>
