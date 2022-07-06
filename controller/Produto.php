<?php

require 'model/ProdutoModel.php';

class Produto{

    function __construct(){
        $this->modelo = new ProdutoModel();
    }

    function index(){
        $produtos = $this->modelo->buscarTudo();
        include "view/template/cabecalho.php";
        include "view/template/menu.php";
        include "view/produto/listagem.php";
        include "view/template/rodape.php";
    }

    function add(){
        $produtos = $this->modelo->buscarTudo();
        include "view/template/cabecalho.php";
        include "view/template/menu.php";
        include "view/produto/form.php";
        include "view/template/rodape.php";
    }

    function excluir($id){
       $this->modelo->excluir($id);
       header('Location: ?c=categoria');
    }

    function salvar(){
        if(isset($_POST['categoria']) && !empty($_POST['categoria'])){
            if(!empty($_POST['idcategoria'])){
                $this->modelo->inserir($_POST['categoria']);
            }else{
                $this->modelo->atualizar($_POST['idcategoria'], $_POST['categoria']);
            }
            header('Location: ?c=categoria');
        }else{
            echo "Ocorreu um erro, pois os dados não foram enviados";
        }
    }

    function editar($id){
        $categorias = $this->modelo->buscarTudo();
        $categoria = $this->modelo->buscarPorId($id);
        include "view/template/cabecalho.php";
        include "view/template/menu.php";
        include "view/categoria/form.php";
        include "view/template/rodape.php";
    }

}