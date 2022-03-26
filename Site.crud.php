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