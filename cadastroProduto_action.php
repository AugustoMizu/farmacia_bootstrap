<?php
include "crudEstoque.php";

$nome = $_POST['nomeInput'];
$preco = $_POST['precoInput'];
$quantidade = $_POST['quantidadeInput'];
$categoria = $_POST['categoriaSelect'];
$data_validade = $_POST['dataInput'];

$p = new produtos(null, $nome, $preco, $quantidade, $categoria, $data_validade);

$salva = $p->cadastrarProduto($p);
if ($salva = true) { // caso o retorno de cadastro seja verdadeiro retorna a cadastro
    $cadastrado = true;
    header("Location:cadastroProduto.php?cadastrado" . urlencode($cadastrado));
}
exit();
