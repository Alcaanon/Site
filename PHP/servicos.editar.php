<?php
    require_once("Site.crud.php");

    $id = $_POST['inputId'];  
    $classe = $_POST['inputClasse'];
    $titulo = $_POST['inputTitulo'];
    $descricao = $_POST['inputDescricao'];
    if(atualizarServicos($id, $classe, $titulo, $descricao))
    {
        header('Location: ../index.php');
        exit;
    }
    header('Location: servicos.form.editar.php?error=true');
    exit;
    