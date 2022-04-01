<?php
    require_once("Site.crud.php");

    $id = $_POST['inputId'];  
    $classe = $_POST['inputClasse'];
    $titulo = $_POST['inputTitulo'];
    $descricao = $_POST['inputDescricao'];
    $nome = $_POST['inputNome'];
    $data = $_POST['inputData'];
    if(atualizarBlogs($id, $classe, $titulo, $descricao, $nome, $data))
    {
        header('Location: ../index.php');
        exit;
    }
    header('Location: blogs.form.editar.php?error=true');
    exit;
    