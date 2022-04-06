<?php
    require_once("Site.crud.php");

    $classe = filter_input(INPUT_POST, 'inputClasse', FILTER_SANITIZE_SPECIAL_CHARS);
    $titulo = filter_input(INPUT_POST, 'inputTitulo', FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = filter_input(INPUT_POST, 'inputDescricao', FILTER_SANITIZE_SPECIAL_CHARS);
    $nome = filter_input(INPUT_POST, 'inputNome', FILTER_SANITIZE_SPECIAL_CHARS);
    $data = filter_input(INPUT_POST, 'inputData', FILTER_SANITIZE_SPECIAL_CHARS);

    if(cadastrarBlogs($classe, $titulo, $descricao, $nome, $data))
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: blogs.form.php?error=true');
    exit;