<?php

include_once "conexao.php";

//Está pegando os dados via formulario
$nome = filter_var($_POST['nome']);
$cor = filter_var($_POST['cor']);
$preco = filter_var($_POST['preco']);

//Está inserindo o produto na tabela e executando o comando
$query_prod = "INSERT INTO produtos(nome, cor) VALUES(:nome, :cor)";
$insert_prod = $conectar->prepare($query_prod);
$insert_prod->bindParam(':nome', $nome);
$insert_prod->bindParam(':cor', $cor);
$insert_prod->execute();

//vai pegar o ultimo id a ser criando e instanciar nesta variavel
echo $id_produto = $conectar->lastInsertId();

//O codigo abaixo fará o desconto do preço do produto, referente a sua cor
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

//O codigo abaixo vai fazer a inserção na tabela preços e já vai inserir o preço já co desconto na tabela
$query_valor = "INSERT INTO precos(preco, produto_id) VALUES(:preco, :produto_id)";
$insert_preco = $conectar->prepare($query_valor);
$insert_preco->bindParam(':preco', $preco_total);
$insert_preco->bindParam(':produto_id', $id_produto);
$insert_preco->execute();


header("Location:listar_produtos.php");
?>