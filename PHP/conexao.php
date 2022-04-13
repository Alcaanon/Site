<?php

    define("HOSTNAME", "ec2-52-73-155-171.compute-1.amazonaws.com");
    define("USERNAME", "tdwlomwprpiqet");
    define("PASSWORD", "713b0b27dd367af35eded4a09a91556db42cacb8b75dfa2bbf1e23a2d7d8b340");
    define("SCHEMA", "dblefl82j2q8vf");
    define("PORT", 5432);

    function getConnection()
    {
        try
        {
            $key = "strval";
            $con = new PDO("pgsql:host={$key(HOSTNAME)};dbname={$key(SCHEMA)};port={$key(PORT)}", USERNAME, PASSWORD);
            $con ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $con;
        }
        catch (PDOException $error)
        {
            echo "Erro ao conectar ao banco de dados. Erro: {$error->getMessage()}";
            exit;
        }
    }


