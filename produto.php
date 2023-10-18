<?php

declare(strict_types=1);


Class Produto
{
    private $conexao;
    
    public function __construct()
    {
        try
        {
            $this->conexao = new PDO('mysql:host=localhost;dbname=databasear', 'root' ,'');

        } catch (Exception $e)
        {
          echo  $e->getMessage();
          die();
        }
       
    }

    public function list(): array
    {
        $sql = 'select * from produto';

        $produtos = [];
        
        
        foreach($this->conexao->query($sql) as $key=> $value)
        {
           array_push($produtos, $value);
        }
        
        return $produtos;
    }
    public function insert(string $descricao): int
    {
        $sql = 'INSERT INTO produto(descricao) value(?)';
        
        $prepare = $this->conexao->prepare($sql);
        $prepare->bindParam(1,$descricao);

        $prepare->execute();

        return $prepare->rowCount();
    }
    public function update(string $descricao, int $id): int
    {
        $sql = 'update  produto set descricao = ? where id ?';
        
        $prepare = $this->conexao->prepare($sql);
        $prepare->bindParam(1,$descricao);
        $prepare->bindParam(2,$id);
        $prepare->execute();
        return $prepare->rowCount();
         
    }
    public function delete(int $id): int
    {
        $sql = 'delete from produto where id = ?';
        
        $prepare = $this->conexao->prepare($sql);
        $prepare->bindParam(1,$id);
        $prepare->execute();
        return $prepare->rowCount();
      
    }
    
}

?>