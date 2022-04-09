<?php
require_once("conexao.php");

// Funções de Criar
function cadastrarServicos($classe, $titulo, $descricao) 
{
    $con = getConnection();
    $sql = "INSERT INTO servicos (classe, titulo, descricao) VALUES (:classe, :titulo, :descricao)";
    $result = $con->prepare($sql);
    $result->bindParam(":classe", $classe);
    $result->bindParam(":titulo", $titulo);
    $result->bindParam(":descricao", $descricao);
    $execute = $result->execute();
    unset($con);
    unset($result);
    if($execute)
        return true;
    return false;
}
function cadastrarBlogs($classe, $titulo, $descricao, $nome, $data) 
{
    $con = getConnection();
    $sql = "INSERT INTO blogs (classe, titulo, descricao, nome, data) VALUES (:classe, :titulo, :descricao, :nome, :data)";
    $result = $con->prepare($sql);
    $result->bindParam(":classe", $classe);
    $result->bindParam(":titulo", $titulo);
    $result->bindParam(":descricao", $descricao);
    $result->bindParam(":nome", $nome);
    $result->bindParam(":data", $data);
    $execute = $result->execute();
    unset($con);
    unset($result);
    if($execute)
        return true;
    return false;
}

// Funções de Listar
function listaServicos()
{
    $con = getConnection();
    $sql = "SELECT * FROM servicos";
    $result = $con->query($sql);
    $listaServico = array();
    while($servicos = $result->fetch(PDO::FETCH_OBJ))
    {
        array_push($listaServico, $servicos);
    }
    unset($con);
    unset($result);
    return $listaServico;
}
function listaBlogs()
{
    $con = getConnection();
    $sql = "SELECT * FROM blogs";
    $result = $con->query($sql);
    $listaBlogs = array();
    while($blogs = $result -> fetch(PDO::FETCH_OBJ))
    {
        array_push($listaBlogs, $blogs);
    }
    unset($con);
    unset($result);
    return $listaBlogs;
}

// Funções de Atualizar
function atualizarServicos($id, $classe, $titulo, $descricao) 
{
    $con = getConnection();
    $sql = "UPDATE servicos SET classe = :classe, titulo =:titulo, descricao =:descricao WHERE id=:id";
    $result = $con->prepare($sql);
    $result->bindParam(":id", $id);
    $result->bindParam(":classe", $classe);
    $result->bindParam(":titulo", $titulo);
    $result->bindParam(":descricao", $descricao);
    $execute = $result->execute();
    unset($con);
    unset($result);
    if($execute)
        return true;
    return false;
}
function atualizarBlogs($id, $classe, $titulo, $descricao, $nome, $data) 
{
    $con = getConnection();
    $sql = "UPDATE blogs SET classe =:classe, titulo =:titulo, descricao =:descricao, nome =:nome, data =:data WHERE id=:id";
    $result = $con->prepare($sql);
    $result->bindParam(":id", $id);
    $result->bindParam(":classe", $classe);
    $result->bindParam(":titulo", $titulo);
    $result->bindParam(":descricao", $descricao);
    $result->bindParam(":nome", $nome);
    $result->bindParam(":data", $data);
    $execute = $result->execute();
    unset($con);
    unset($result);
    if($execute)
        return true;
    return false;
}

// Funções de Deletar
function apagarServicos($id) 
{
    $con = getConnection();
    $sql = "DELETE FROM servicos WHERE id = :id";
    $result = $con->prepare($sql);
    $result->bindParam(":id", $id);
    $execute = $result->execute();
    unset($con);
    unset($result);
    if($execute)
        return true;
    return false;
}
function apagarBlogs($id) 
{
    $con = getConnection();
    $sql = "DELETE FROM blogs WHERE id = :id";
    $result = $con->prepare($sql);
    $result->bindParam(":id", $id);
    $execute = $result->execute();
    unset($con);
    unset($result);
    if($execute)
        return true;
    return false;
}

// Funções de Localizar
function localizaServicosPeloID($id)
{
    $con = getConnection();
    $sql = "SELECT * FROM servicos WHERE id = :id";
    $result = $con->prepare($sql);
    $result->bindParam(":id", $id);
    $execute = $result->execute();
    $servico = $result->fetch(PDO::FETCH_OBJ);
    unset($con);
    unset($result);
    return $servico;
}
function localizaBlogsPeloID($id)
{
    $con = getConnection();
    $sql = "SELECT * FROM blogs WHERE id = :id";
    $result = $con->prepare($sql);
    $result->bindParam(":id", $id);
    $execute = $result->execute();
    $servico = $result->fetch(PDO::FETCH_OBJ);
    unset($con);
    unset($result);
    return $servico;
}