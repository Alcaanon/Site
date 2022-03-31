<?php
    require_once("Site.crud.php");

    $classe = $_POST['inputClasse'];
    $titulo = $_POST['inputTitulo'];
    $descricao = $_POST['inputDescricao'];

    if(cadastrarServico($classe, $titulo, $descricao))
    {
        header('Location: index.php');
        exit;
    }

    header('Location: servicos.form.php?error=true');
    exit;