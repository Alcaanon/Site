<?php
require_once("conexao.php");

// Funções de Criar
function cadastrarServicos($classe, $titulo, $descricao) 
{
    $link = getConnection();
    $sql = "insert into servicos (classe, titulo, descricao) values ('{$classe}', '{$titulo}', '{$descricao}')";
    $result = mysqli_query($link, $sql);
    mysqli_close($link);
    if($result)
        return true;
    return false;
}
function cadastrarBlogs($classe, $titulo, $descricao, $nome, $data) 
{
    $link = getConnection();
    $sql = "insert into blogs (classe, titulo, descricao, nome, data) values ('{$classe}', '{$titulo}', '{$descricao}', '{$nome}', '{$data}')";
    $result = mysqli_query($link, $sql);
    mysqli_close($link);
    if($result)
        return true;
    return false;
}

// Funções de Listar
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

// Funções de Atualizar
function atualizarServicos($id, $classe, $titulo, $descricao) 
{
    $link = getConnection();
    $sql = "UPDATE servicos SET classe ='{$classe}', titulo ='{$titulo}', descricao ='{$descricao}' WHERE id={$id}";
    $result = mysqli_query($link, $sql);
    mysqli_close($link);
    if($result)
        return true;
    return false;
}
function atualizarBlogs($id, $classe, $titulo, $descricao, $nome, $data) 
{
    $link = getConnection();
    $sql = "UPDATE blogs SET classe ='{$classe}', titulo ='{$titulo}', descricao ='{$descricao}', nome = '{$nome}', data = '{$data}' WHERE id={$id}";
    $result = mysqli_query($link, $sql);
    mysqli_close($link);
    if($result)
        return true;
    return false;
}

// Funções de Deletar
function apagarServicos($id) 
{
    $link = getConnection();
    $sql = "delete from servicos where id = {$id}";
    $result = mysqli_query($link, $sql);
    mysqli_close($link);
    if($result)
        return true;
    return false;
}
function apagarBlogs($id) 
{
    $link = getConnection();
    $sql = "delete from blogs where id = {$id}";
    $result = mysqli_query($link, $sql);
    mysqli_close($link);
    if($result)
        return true;
    return false;
}

// Funções de Localizar
function localizaServicosPeloID($id)
{
    $link = getConnection();
    $sql = "select * from servicos where id = {$id}";
    $servico = mysqli_fetch_object(mysqli_query($link, $sql));
    mysqli_close($link);
    return $servico;
}
function localizaBlogsPeloID($id)
{
    $link = getConnection();
    $sql = "select * from blogs where id = {$id}";
    $servico = mysqli_fetch_object(mysqli_query($link, $sql));
    mysqli_close($link);
    return $servico;
}