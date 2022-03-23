<?php

include_once "conexao.php";

//Vai pegar o id do produto para receber os dados do produto selecionado e exibira todos os seus dados nos campos
$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$consultar_prod = $conectar->query("SELECT * FROM produtos WHERE idprod = '$id' ");

$linha_prod = $consultar_prod->fetch(PDO::FETCH_ASSOC);

//Vai pegar o id do preço referete ao produto e exibirá o id para a edição
$consultar_preco = $conectar->query("SELECT * FROM precos WHERE produto_id = '$id' ");

$linha_pre = $consultar_preco->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edição</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<h1>Edição de Produtos</h1>
	<form action="validar_edit.php" method="post">

		<div class="form-group"><input type="text" name="nome" placeholder="nome" style="height: 50px" value="<?php echo $linha_prod['nome']?>" class="form-control"></div>


		<div class="form-group">

			<select name="cor" value="<?php echo $linha_pro['cor']?>" class="form-control">
				<option name="cor" value="vermelho">Vermelho</option>
				<option name="cor" value="azul">Azul</option>
				<option name="cor" value="verde">Verde</option>
				<option name="cor" value="amarelo">Amarelo</option>
			</select>
		</div>

		<div class="form-group">
			<input type="text" name="preco" placeholder="preco" value="<?php echo $linha_pre['preco']?>" class="form-control">
		</div>
		
		<input type="hidden" name="id" value="<?php echo $linha_prod['idprod']?>">

		<input type="hidden" name="idpre" value="<?php echo $linha_pre['idpreco']?>">

		<input type="submit" class="btn btn-success" value="cadastrar">
	</form>


	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>