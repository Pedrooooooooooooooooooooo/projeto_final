<?php

  //$base_url = '';

  function base_url(){
    return "http://localhost/Pedro/projeto_final/index.php";
  }
  
$controlador_padrao = 'home';


  $controller = ucfirst($_GET["c"] ?? $controlador_padrao);
  $caminho_controller = "controller/$controller.php";


  if(file_exists($caminho_controller)){
     require $caminho_controller;

     $obj = new $controller();
     $funcao = $_GET['m'] ?? "index";

    if(is_callable(array($obj, $funcao))){
        $id = $_GET["id"] ?? "";
        call_user_func_array(array($obj, $funcao), array($id));
    }
  }

