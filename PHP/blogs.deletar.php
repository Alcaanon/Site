<?php
    require_once("Site.crud.php");

    $id = $_GET['id'];  
    if(apagarBlogs($id))
    {
        header('Location: ../index.php');
        exit;
    }
    header('Location: blogs.list.php?error=true');
    exit;