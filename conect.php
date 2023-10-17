<?php

$pdo= null;

    try {
        $pdo= new PDO('mysql:host=localhost;dbname=databasear','root', '');
    } catch (Exception $e) {
        echo $e->getMessage(); 
        die();
    }

return $pdo;

?>
