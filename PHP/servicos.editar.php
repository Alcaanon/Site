<?php
    require_once("Site.crud.php");

    $id = filter_input(INPUT_POST, 'inputId', FILTER_SANITIZE_NUMBER_INT);
    $classe = filter_input(INPUT_POST, 'inputClasse', FILTER_SANITIZE_SPECIAL_CHARS);
    $titulo = filter_input(INPUT_POST, 'inputTitulo', FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = filter_input(INPUT_POST, 'inputDescricao', FILTER_SANITIZE_SPECIAL_CHARS);
    
    if(atualizarServicos($id, $classe, $titulo, $descricao))
    {
        header('Location: ../index.php');
        exit;
    }
    header('Location: servicos.form.editar.php?error=true');
    exit;
    