<?php

    if(count($_POST)>0){

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    try {
        include("conexao_db.php");
        //echo "Conexão realizada com sucesso!";
        $stmt = $conn->prepare("SELECT codigo FROM usuario WHERE email=:email AND senha=md5(:senha)");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
        $stmt->execute();
    
    // set the resulting array to associative
        $result = $stmt->fetchAll();
        $qtd_usuarios = count($result);
        if($qtd_usuarios == 1){
            $resultado["msg"] = "Usuário encontrado!";
            $resultado["cod"] = 1;
        }else if($qtd_usuarios == 0){
            $resultado["msg"] =  "E-mail e senha não conferem!";
            $resultado["cod"] = 0;
        }
    }
    catch(PDOException $e) {
        echo "Conexão falhou: " . $e->getMessage();
        }
    }
        $conn = null;
       
        include("index.php");
    
    

?>