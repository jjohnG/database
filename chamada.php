<?php

$pdo = require 'conect.php';

$sql = 'select * from produto';

echo "<h3> Produtos</h3>";

foreach($pdo->query($sql) as $key=> $value)
{
    echo 'id' . $value['id'] . '<br> Descricao' . $value['descricao'] . '<hr>' ; 
}
?>