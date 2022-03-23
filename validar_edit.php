<?php

include_once "conexao.php";

//Vai pegar os dados do formulario de edição para o update
$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
$nome = filter_var($_POST['nome']);
$cor = filter_var($_POST['cor']);
$idpre = filter_var($_POST['idpre'], FILTER_SANITIZE_NUMBER_INT);

$preco = filter_var($_POST['preco']);

//Fará o update dos dados do produto
$query_prod = "UPDATE produtos set nome = :nome, cor = :cor WHERE idprod = :id";
$update = $conectar->prepare($query_prod);
$update->bindParam(':nome', $nome);
$update->bindParam(':cor', $cor);
$update->bindParam(":id", $id);
$update->execute();

echo $nome . "<br>";
echo $cor . "<br>";

echo $id_produto = $conectar->lastInsertId();

//O codigo abaixo fará o desconto do preço do produto, referente a sua cor e relaizar o novo desconto

if($cor == 'azul' or $cor == 'vermelho'){
	$preco_atual = $preco * 0.20;
	$preco_total = $preco - $preco_atual;
	echo $nome . "<br>"; 
    echo $cor . "<br>";
    echo "Preço antigo".$preco . "<br>";
    echo "Preço Final".$preco_total . "<br>";
}elseif($cor == 'vermelho' and $preco > 50.00 ){
	$preco_atual = $preco * 0.5;
	$preco_total = $preco - $preco_atual;
	echo $nome . "<br>"; 
    echo $cor . "<br>";
    echo "Preço antigo".$preco . "<br>";
    echo "Preço Final".$preco_total . "<br>";
}elseif($cor == 'amarelo' || $cor == 'verde'){
	$preco_atual = $preco * 0.10;
	$preco_total = $preco - $preco_atual;
	echo $nome . "<br>"; 
    echo $cor . "<br>";
    echo "Preço antigo".$preco . "<br>";
    echo "Preço Final".$preco_total . "<br>";
}

// var_dump($id_produto)

//O codigo abaixo vai fazer a inserção na tabela preços e já vai alterar o preço já com o  novo desconto na tabela

$query_valor = "UPDATE precos set preco = :preco, produto_id, :produto_id WHERE idpreco = :idpre";
$update_valor = $conectar->prepare($query_valor);
$update_valor->bindParam(':preco', $preco_total);
$update_valor->bindParam(':produto_id', $id_produto);
$update_valor->bindParam(":idpreco", $idpre);
$update_valor->execute();

//Fará o redirecionamento para a listagem
header("Location:listar_produtos.php");
?>