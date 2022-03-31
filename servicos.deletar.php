<?php
    require_once("Site.crud.php");

    $id = $_GET['id'];  

    if(apagarServico($id))
    {
        header('Location: index.php');
        exit;
    }

    header('Location: servicos.list.php?error=true');
    exit;