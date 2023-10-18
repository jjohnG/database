<?php

require 'produto.php';

$con = new Produto();

switch ($_GET['operacao']) {
    case 'list':
        echo "<h3> Produtos</h3>";

        foreach($con->list() as  $value)
        {
            echo 'id' . $value['id'] . '<hr> Descricao' . $value['descricao'] . '<hr>' ; 
        }
        break;
     case 'insert':
        $status = $con->insert('Produto novo inserido');

        if(!$status)
        {
            echo "não foi possível inserir";
            
        }
        
        echo "Registro com sucesso";

        break;
    case 'update':
            # code...
        break;
    case 'delete':
            # code...
        break;
    default:
        # code...
        break;
}