<?php

    if(count($_POST)>0){
        $nome = $_POST["nome_produto"];
        $qtd = $_POST["qtd_produto"];
        $obs = $_POST["obs_produto"];
        $preco = $_POST["preco_produto"];
    
        try {
        include("conexao_db.php");
        //echo "Conexão realizada com sucesso!";
        $sql = "INSERT INTO item_pedido (cod_usuario, nome_produto, observacao, preco_und, quantidade) VALUES (?,?,?,?,?)";
        $stmt= $conn->prepare($sql);
        $stmt->execute([null, $nome, $obs, $preco, $qtd]);
        
             $resultado["msg"] = "Item inserido!";
             $resultado["cod"] = 1;
             $resultado["style"] = "alert-success";
            
            }
       
        catch(PDOException $e) {
            $resultado["msg"] = "Insersão falhou: " . $e->getMessage();
            $resultado["cod"] = 0;
            $resultado["style"] = "alert-danger";
        
        }
    }
            $conn = null;

    include("pedido.php");
    