<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Lista de Inscritos</title>
    
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="icon" href="assets/img/icon.png">
    <link rel="stylesheet" href="assets/css/cadastrados.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>    

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#butom"><img src="assets/img/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Curso Básico de FT</a>
    </div>
  </nav>


<section class="rounded">
        <h1 id="h1" >Lista de Alunos Inscritos</h1>
    </section>

    <div class="table-responsive rounded">
    <table class="table table-striped table-bordered table-secondary rounded">
        <thead class="thead-dark" id="title">
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Nascimento</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Email</th>
        </thead>
<?php
    try {
        require('conexao.php');
        // A variável $pdo, usada a seguir, está vindo do conexao.php

        $consulta = $pdo->prepare("SELECT * FROM aluno");
        $consulta->execute();

        $alunos = $consulta->fetchAll();
        
        foreach($alunos as $aluno) {
            echo "<tr>
                    <td>{$aluno["nome"]}</td>
                    <td>{$aluno["sobrenome"]}</td>
                    <td>{$aluno["nascimento"]}</td>
                    <td>{$aluno["cpf"]}</td>
                    <td>{$aluno["telefone"]}</td>
                    <td>{$aluno["email"]}</td>
                </tr>";
        }

    } catch(Exception $e) {
        die("Erro de banco de dados: " . $e->getMessage());
    }    
?>    
        </table>
    </div>

    <div id="butom">
    <a class="btn btn-primary" href="index.php" role="button">Voltar</a>
    </div>

    <script src="vendor/popper.min.js"></script>
    <script src="vendor/jquery-3.3.1.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
