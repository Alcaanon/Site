<?php
    require_once("Site.crud.php");

    $id = $_GET['id'];  
    $classe = $_POST['inputClasse'];
    $titulo = $_POST['inputTitulo'];
    $descricao = $_POST['inputDescricao'];

    if(atualizarServico($id, $classe, $titulo, $descricao))
    {
        header('Location: index.php');
        exit;
    }

    header('Location: servicos.form.editar.php?error=true');
    exit;
    