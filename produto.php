<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
         <form action="cadastrar_produto.php" method="POST">
         <h2>Cadastrar o produto</h2><br/>
         <div class="form-group">
            <label for="nome_produto">Nome do produto:</label>
            <input type="text" class="form-control" name="nome_produto" id="nome_produto" required aria-describedby="nomeHelp" placeholder="Digite o produto">
         </div>
         <div class="form-group">
            <label for="categoria_produto">Categoria:</label>
            <input type="text" class="form-control" name="categoria_produto" id="categoria_produto" required aria-describedby="nomeHelp" placeholder="Digite a categoria">
         </div>
         <div class="form-group">
            <label for="valor_produto">Valor unitário (R$):</label>
            <input type="number" class="form-control" name="valor_produto" id="valor_produto" step=".01" required aria-describedby="nomeHelp" placeholder="Digite o valor">
         </div>
         <div class="form-group">
            <label for="foto_produto">Foto:</label>
            <input type="file" class="form-control" name="foto_produto" id="foto_produto">
        </div>
        <div class="form-group">
            <label for="info_produto">Informações adicionais:</label>
            <textarea class="form-control" name="info_produto"id="info_produto" rows="4" cols="50"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Adicionar produto</button>
         <?php if(isset($resultado)): ?>
               <div class="alert <?=$resultado['style']?>">
                  <?php echo $resultado["msg"]; ?>
               </div> 
            <?php endif; ?>
         </form>
         <table class="table">
            <tr>
               <th>Código</th>
               <th>Foto</th>
               <th>Produto</th>
               <th>Categoria</th>
               <th>Valor</th>
               <th>Info adicionatal</th>
               <th>Data Hora</th>
            </tr>
            <tr>
               <td></td>   
               <td></td> 
               <td></td> 
               <td></td>   
               <td></td> 
               <td></td> 
               <td></td> 
            </tr>   
         </table>   
           

    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>