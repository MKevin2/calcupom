<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "2424";
    $banco = "dbcalcupom";

    try {
    $conn = new PDO("mysql:host=$servidor;dbname=$banco;charset=utf8", $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        die("Erro na conexão: " . $e->getMessage());
    }

?>