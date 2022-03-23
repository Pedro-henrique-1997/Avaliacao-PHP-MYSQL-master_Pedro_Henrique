<?php


require_once("conexao.php");
//A linha acima faz a inserção do arquivo para conectar-se ao banco de dados

try{
   

	 $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
     //Vai pegar o id do produto via url para ser deletado

	$delete = $conectar->prepare("DELETE FROM produtos  WHERE idprod = :id");
	//Ira buscar o produto selecionado a ser deletado

	$delete->bindParam(":id", $id);	
	$delete->execute();

	header("Location: listar_produtos.php");
    //Depois de deletar, vai redirecionar para a lista de produtos

}catch(PDOException $e){
	echo "Erro ao deletar: " . $e->getMessage();
}



?>