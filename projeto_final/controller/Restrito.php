<?php



class Restrito{

    function __construct(){

    }


    function login($id){
       
        include "view/template/cabecalho.php";
        include "view/restrito/form.php";
        include "view/template/rodape.php";
    }


}

//
//$categoria->inserir("SmartTV");
//$categoria->excluir(1);
//$categoria->atualizar(4, "SmartPhone");
//var_dump($categoria->buscarPorId(3));
//var_dump($categoria->buscarTudo());

