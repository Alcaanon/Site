<?php
    require_once("Site.crud.php");

    $classe = $_POST['inputClasse'];
    $titulo = $_POST['inputTitulo'];
    $descricao = $_POST['inputDescricao'];
    $nome = $_POST['inputNome'];
    $data = $_POST['inputData'];

    if(cadastrarBlogs($classe, $titulo, $descricao, $nome, $data))
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: blogs.form.php?error=true');
    exit;