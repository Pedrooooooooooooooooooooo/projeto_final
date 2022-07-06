<?php
require "config/Conexao.php";
class ProdutoModel{
    private $conexao;

    function __construct(){
        $this->conexao = Conexao::getConnection();
    }

    function inserir($nome, $descricao, $preco, $marca, $foto, $idcategoria){
        $sql = "INSERT INTO produto (nome) VALUES (?, ?, ?, ?, ?, ?)";
        $comando = $this->conexao->prepare($sql);
        $comando->bind_param("ssdssi", $nome, $descricao, $preco, $marca, $foto, $idcategoria);
        $comando->execute();
    }

    function excluir($id){
        $sql = "DELETE FROM produto WHERE idcategoria = ?";
        $comando = $this->conexao->prepare($sql);
        $comando->bind_param("i", $id);
        return $comando->execute();
    }

    function atualizar($id, $nome, $descricao, $preco, $marca, $foto, $idcategoria){
        $sql = "UPDATE produto SET nome = ?, descricao=?, proco=?, marca=?, foto=?, idcategoria=? WHERE idcategoria = ?";
        $comando = $this->conexao->prepare($sql);
        $comando->bind_param("ssdssi", $nome, $descricao, $preco, $marca, $foto, $idcategoria, $id);
        return $comando->execute();
    }

    function buscarPorId($id){
        $sql = "SELECT * FROM produto WHERE idproduto = ?";
        $comando = $this->conexao->prepare($sql);
        $comando->bind_param("i", $id);
        if($comando->execute()){
            $resultados = $comando->get_result();
            return $resultados->fetch_assoc();
        }
        return null;
    }

    function buscarTudo(){
        $sql = "SELECT * FROM produto";
        $comando = $this->conexao->prepare($sql);
        if($comando->execute()){
            $resultados = $comando->get_result();
            return $resultados->fetch_all(MYSQLI_ASSOC);
        }
        return null;
    }

}

?>