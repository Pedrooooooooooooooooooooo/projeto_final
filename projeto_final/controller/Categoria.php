<?php

require_once "model/CategoriaModel.php";

class Categoria{

    function __construct(){
        $this->modelo = new CategoriaModel();
    }

    function index(){
        $categorias = $this->modelo->buscarTudo();
        include "view/template/cabecalho.php";
        include "view/template/menu.php";
        include "view/categoria/listagem.php";
        include "view/template/rodape.php";
    }

    function add(){
        $categorias = $this->modelo->buscarTudo();
        include "view/template/cabecalho.php";
        include "view/template/menu.php";
        include "view/categoria/form.php";
        include "view/template/rodape.php";
    }

    function excluir($id){
       $this->modelo->excluir($id);
       header('Location: ?c=categoria');
    }

    function salvar(){
        if(isset($_POST['categoria']) && !empty($_POST['categoria'])){
            if(empty($_POST['idcategoria'])){
                $this->modelo->inserir($_POST['categoria']);
            }else{
                $this->modelo->atualizar($_POST['categoria'], $_POST['idcategoria']);
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

//
//$categoria->inserir("SmartTV");
//$categoria->excluir(1);
//$categoria->atualizar(4, "SmartPhone");
//var_dump($categoria->buscarPorId(3));
//var_dump($categoria->buscarTudo());

