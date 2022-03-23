<?php include_once "conexao.php"; 

//A linha acima faz a inserção do arquivo para conectar-se ao banco de dados
?>

<!DOCTYPE html>
<html>
<head>
  <title>Index</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

  <h1>Lista de Produtos</h1>

  <a href="prod_form.php"><button type="button" class="btn btn-primary">Cadastrar novo Produto</button></a>

  <?php 
//A query abaixo vai selecionar o preço o nome e a cor do produto na tabela produto e o preço da tabela preco

  $query_produtos = "SELECT pre.idpreco, pre.preco AS pre_preco, pre.produto_id, pro.nome AS pro_nome, pre.produto_id, pro.cor AS pro_cor, pre.produto_id, pro.idprod AS pro_idprod
  FROM precos pre
  INNER JOIN produtos AS pro  ON pro.idprod = pre.produto_id";
  
//A query sendo executada
  $result_query = $conectar->prepare($query_produtos);
  $result_query->execute();  
  ?>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Cor</th>
        <th scope="col">Preço</th>
        <th scope="col" style="text-align: left">Ação</th>      
      </tr>
    </thead>
    <tbody>

     <?php
     while ($row_prod = $result_query->fetch(PDO::FETCH_ASSOC)) {
      //O laço de repetição com o array acima vai exibir os dados pra apresentar na index
      echo "<tr>
      <th scope=row1>$row_prod[pro_nome]</th>
      <td>$row_prod[pro_cor]</td>
      <td>$row_prod[pre_preco]</td>
      <td>
      <a href='edit_produto.php?id=$row_prod[pro_idprod]'><button type='button' class='btn btn-warning'>Editar</button></a>
      <a href='del_produto.php?id=$row_prod[pro_idprod]'><button type='button' class='btn btn-danger'>Deletar</button></a>
     
      </<td>      
      </tr>
      ";
    }

    ?>

  </tbody>
</table>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>