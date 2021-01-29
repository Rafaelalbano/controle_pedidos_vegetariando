<?php

    if(count($_POST)>0){
        $nome = $_POST["nome_produto"];
        $qtd = $_POST["qtd_produto"];
        $obs = $_POST["obs_produto"];
        $preco = $_POST["preco_produto"];
    
        $servername = "localhost";
        $username = "root";
        $password = "";
    
        try {
        $conn = new PDO("mysql:host=$servername;dbname=vegetariando_db", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Conexão realizada com sucesso!";
        $sql = "INSERT INTO item_pedido (cod_usuario, nome_produto, observacao, preco_und, quantidade) VALUES (?,?,?,?,?)";
        $stmt= $conn->prepare($sql);
        $stmt->execute([null, $nome, $obs, $preco, $qtd]);
        
             $resultado["msg"] = "Item inserido!";
             $resultado["cod"] = 1;
            
            }
       
        catch(PDOException $e) {
            echo "Insersão falhou: " . $e->getMessage();
            $resultado["msg"] = "Item não inserido!";
            $resultado["cod"] = 0;
        
        }
    }
            $conn = null;
    