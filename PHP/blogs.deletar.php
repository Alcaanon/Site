<?php
    require_once("Site.crud.php");

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);  
    if(apagarBlogs($id))
    {
        header('Location: ../index.php');
        exit;
    }
    header('Location: blogs.list.php?error=true');
    exit;