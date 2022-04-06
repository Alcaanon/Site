<?php
    require_once("Site.crud.php");

    $id = filter_input(INPUT_POST, 'inputId', FILTER_SANITIZE_NUMBER_INT);
    $classe = filter_input(INPUT_POST, 'inputClasse', FILTER_SANITIZE_SPECIAL_CHARS);
    $titulo = filter_input(INPUT_POST, 'inputTitulo', FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = filter_input(INPUT_POST, 'inputDescricao', FILTER_SANITIZE_SPECIAL_CHARS);
    $nome = filter_input(INPUT_POST, 'inputNome', FILTER_SANITIZE_SPECIAL_CHARS);
    $data = filter_input(INPUT_POST, 'inputData', FILTER_SANITIZE_SPECIAL_CHARS);
    
    if(atualizarBlogs($id, $classe, $titulo, $descricao, $nome, $data))
    {
        header('Location: ../index.php');
        exit;
    }
    header('Location: blogs.form.editar.php?error=true');
    exit;
    