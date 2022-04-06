<?php 
    session_start();

    include_once('blogs.busca.php');

    header('Location: blogs.form.editar.page.php');
    exit;