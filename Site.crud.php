<?php

require_once("conexao.php");

function listaServicos()
{
    $link = getConnection();

    $sql = "select * from servicos";

    $result = mysqli_query($link, $sql);

    $listaServico = array();

    while($servicos = mysqli_fetch_object($result))
    {
        array_push($listaServico, $servicos);
    }

    mysqli_close($link);
    return $listaServico;
}

function listaBlogs()
{
    $link = getConnection();
    $sql = "select * from blogs";

    $result = mysqli_query($link, $sql);

    $listaBlogs = array();
    while($blogs = mysqli_fetch_object($result))
    {
        array_push($listaBlogs, $blogs);
    }

    mysqli_close($link);
    return $listaBlogs;
}

function cadastrarServico($classe, $titulo, $descricao) 
    {
        $link = getConnection();

        $sql = "insert into servicos (classe, titulo, descricao) values ('{$classe}', '{$titulo}', '{$descricao}')";
        
        $result = mysqli_query($link, $sql);

        mysqli_close($link);

        if($result)
            return true;

        return false;
    }

    function cadastrarBlog($classe, $titulo, $descricao, $nome, $data) 
    {
        $link = getConnection();

        $sql = "insert into blogs (classe, titulo, descricao, nome, data) values ('{$classe}', '{$titulo}', '{$descricao}', '{$nome}', '{$data}')";
        
        $result = mysqli_query($link, $sql);

        mysqli_close($link);

        if($result)
            return true;

        return false;
    }

    
    function atualizarServico($id, $classe, $titulo, $descricao) 
    {
        $link = getConnection();

        $sql = "UPDATE servicos SET classe ='{$classe}', titulo ='{$titulo}', descricao ='{$descricao}' WHERE id={$id}";
        
        $result = mysqli_query($link, $sql);

        mysqli_close($link);

        if($result)
            return true;

        return false;
    }

    function apagarServico($id) 
    {
        $link = getConnection();

        $sql = "delete from servicos where id = {$id}";
        
        $result = mysqli_query($link, $sql);

        mysqli_close($link);

        if($result)
            return true;

        return false;
    }

    function apagarBlog($id) 
    {
        $link = getConnection();

        $sql = "delete from blogs where id = {$id}";
        
        $result = mysqli_query($link, $sql);

        mysqli_close($link);

        if($result)
            return true;

        return false;
    }