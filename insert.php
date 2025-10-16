<?php

    include 'conexao.php'; // Traz a conexão com o banco de dados

    session_start(); // Iniciando uma sessão
    $nome = $_POST ['name']; // Puxa o valor do campo name do formulário
    $email = $_POST ['email']; 
    $mensagem = $_POST ['mensagem'];

    $_SESSION['nome'] = $nome;

    try { // Tenta executar
        $sql = "INSERT INTO tbFeedback (nome, email, mensagem) VALUES (:nome, :email, :mensagem)";
        $stmt = $conn->prepare($sql);

        // Faz a ligação dos parâmetros
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mensagem', $mensagem);

        // Executa o comando
        $stmt->execute();

        header("Location: confirma.php"); // Redireciona para a página de confirmação
    } catch(PDOException $e) { // Se o try falhar, acontece o catch
        echo "Erro ao inserir: " . $e->getMessage(); // Mensagem de erro
    }

?>