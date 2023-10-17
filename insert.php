<?php

declare(strict_types=1);

$pdo = require 'conect.php';

$sql = 'INSERT INTO produto(descricao) values(?)';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1,$_GET['descricao']);
$prepare->execute();

echo $prepare->rowCount();
?>