<?php

    function conectarBanco(){
        $conexao = new PDO("mysql:host=localhost; dbname=bancophp", "root", "");
        return $conexao;
    }

    function retornarCategorias(){
        try {
            $sql = "SELECT * FROM categoria";
            $conexao = conectarBanco();
            return $conexao->query($sql);
        } catch (Exception $e){
            return 0;
        }
    }