<?php
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $genero = $_POST['genero'];
    $data_nascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $pronome = '';
    if($genero == 1) {
        $pronome = "Sra.";
    } else if($genero == 2) {
        $pronome = "Sr.";
    }

    try {
        include_once('conexao.php');
        // A variável $pdo, usada a seguir, está vindo do conexao.php

        $consulta = $pdo->prepare("INSERT INTO aluno
        (nome, sobrenome, nascimento, cpf, telefone, email, genero_id)
        VALUES
        (:nome, :sobrenome, :nascimento, :cpf, :telefone, :email, :genero_id)");
        
        $consulta->bindValue(":nome", $nome);
        $consulta->bindValue(":sobrenome", $sobrenome);
        $consulta->bindValue(":nascimento", $data_nascimento);
        $consulta->bindValue(":cpf", $cpf);
        $consulta->bindValue(":telefone", $telefone);
        $consulta->bindValue(":email", $email);
        $consulta->bindValue(":genero_id", $genero);

        $consulta->execute();

    } catch(Exception $e) {
        die("Erro de banco de dados: " . $e->getMessage());
    }

    header('location: index.php?resultado=sucesso');
?>