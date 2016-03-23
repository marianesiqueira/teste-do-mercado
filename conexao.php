<?php
//conexao com o sql
    $host = "localhost";
    $user = "root";
    $pass = "";
    $banco = "teste_de_mercado";
    $conexao = mssql_connect($host, $user, $pass) or die(mssql_get_last_message());
    mssql_select_db($banco) or die (mssql_get_last_message());
?>
 
<?php 
//
    $codigoMercadoria = $_POST['codigoMercadoria'];
    $tipoMercadoria = $_POST['tipoMercadoria'];
    $nomeMercadoria = $_POST['nomeMercadoria'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $tipoNegociacao = $_POST['tipoNegociacao'];
    $sql = mssql_query("INSERT INTO operacoes(codigoMercadoria, tipoMercadoria, nomeMercadoria, quantidade, preco, tipoNegociacao) VALUES('$codgoMercadoria', '$tipoMercadoria', '$nomeMercadoria', '$quantidade', '$preco', '$tipoNegociacao')");
    echo "Cadastro efetuado com sucesso";*/
?>