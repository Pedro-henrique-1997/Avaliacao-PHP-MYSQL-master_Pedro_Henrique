<?php
// Irá pegar os seguintes dados para conectar com o banco de dados
try{
	$conectar = new PDO("mysql:host=localhost;port=3306;dbname=loja", "root", "");

}catch(PDOException $e){
	echo "Erro ao conectar" . $e->getMessage();
}

?>