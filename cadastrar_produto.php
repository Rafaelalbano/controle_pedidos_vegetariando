<?php

    if(count($_POST)>0){
        $nome = $_POST["nome_produto"];
        $categoria = $_POST["categoria_produto"];
        $valor = $_POST["valor_produto"];
        $foto = $_POST["foto_produto"];
        $info = $_POST["info_produto"];

        try {
            include("conexao_db.php");
            //echo "Conexão realizada com sucesso!";
            $sql = "INSERT INTO produto (nome, categoria, valor, foto, info_adicional, codigo_usuario) VALUES (?,?,?,?,?,?)";
            $stmt= $conn->prepare($sql);
            $stmt->execute([$nome, $categoria, $valor, $foto, $info, null]);

 
    
            
            $resultado["msg"] = "Item inserido com sucesso!";
            $resultado["cod"] = 1;
            $resultado["style"] = "alert-success";
                
            }
           
        catch(PDOException $e) {
            $resultado["msg"] = "Erro de banco de dados: " . $e->getMessage();
            $resultado["cod"] = 0;
            $resultado["style"] = "alert-danger";
            
            }
        
        try{
            $consulta = $conn->prepare("SELECT * FROM produto");
            $consulta->execute();
            $produtos = $consulta->fetchAll();

        }catch(PDOException $e){
            $resultado["msg"] = "Erro ao selecionar produtos no banco de dados: " . $e->getMessage();
            $resultado["cod"] = 0;
            $resultado["style"] = "alert-danger";
            
        }
        
        }
        $conn = null;
 
        include("produto.php")
      
?>