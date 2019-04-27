<?php
    require 'database_config.php';

    $pdo = new PDO($databaseConnectionString, $databaseUsername, $databasePassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>