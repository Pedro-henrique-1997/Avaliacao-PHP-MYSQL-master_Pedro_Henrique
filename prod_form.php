<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<h1>Cadastrar Produto</h1>
  <form action="validar.php" method="post">
  	<div class="form-group" style="height: 100px">
  	<input type="text" name="nome" placeholder="nome" class="form-control">
  	</div>

  	<div class="form-group">
	<select name="cor" class="form-control" style="height: 100px">
		<option value="vermelho">Vermelho</option>
		<option value="azul" selected>Azul</option>
		<option value="verde">Verde</option>
		<option value="amarelo">Amarelo</option>
	</select>
	</div>
	<div class="form-group" style="height: 100px">
		<input type="text" name="preco" placeholder="preco" class="form-control">
	</div>
	
	<input type="submit" class="btn btn-success" value="cadastrar">
  </form>
	

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>