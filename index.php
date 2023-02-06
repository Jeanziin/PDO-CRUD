<?php
require_once 'vendor/autoload.php';


$produto = new \App\Model\Produto();
$produto->setId(3);
$produto->setNome('PC Gamer');
$produto->setDescricao('i5, 4gb');

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao->delete($produto);
$produtoDao->read($produto);

foreach ($produtoDao->read() as $produto):
	echo $produto['nome']. "<br>".$produto['descricao']. "<hr>";
endforeach; 

