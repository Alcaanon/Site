<?php

    include_once("Site.crud.php");

    session_start();
    
    if(filter_input(INPUT_GET,'id') !== null)
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $_SESSION['blogs_dados'] = localizaBlogsPeloID($id);
    }
    else
    {
        $_SESSION['blogs_lista'] = listaBlogs();
    }

