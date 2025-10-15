<?php

    include 'conexao.php'; // Traz a conexão com o banco de dados

    session_start(); // Iniciando uma sessão
    $nome = $_POST ['name']; // Puxa o valor do campo name do formulário
    $email = $_POST ['email']; 
    $mensagem = $_POST ['mensagem'];

    try { // Tenta executar
        $sql = "INSERT INTO tbFeedback (nome, email, mensagem) VALUES (:nome, :email, :mensagem)";
        $stmt = $conn->prepare($sql);

        // Faz a ligação dos parâmetros
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mensagem', $mensagem);

        // Executa o comando
        $stmt->execute();

        echo "Registro inserido com sucesso!";
    } catch(PDOException $e) { // Se o try falhar, acontece o catch
        echo "Erro ao inserir: " . $e->getMessage(); // Mensagem de erro
    }
?>