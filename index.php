<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Curso Básico de Formatação de Texto</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/img/icon.png">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
</head>

<!-- Corpo da Página -->
<body>

    <!--BARRA DE NAVEGAÇÃO-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#"><img src="assets/img/icon.png" width="35" height="35" class="d-inline-block align-top" alt="">
      Curso Básico de FT</a>
      <button class="navbar-toggler navbar-toggler-right btn btn-primary" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
         <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#curso">Curso</a>
            </li>
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="cadastrados.php">Cadastrados</a>
            </li>
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Sobre</a>
            </li>
          
        </ul>
      </div>
    </div>
  </nav>

<!-- Formulário de Cadastro -->

  <section id="form" class="bg-transparent rounded">
            <h1 id="h1" >Formulário de Inscrição</h1>
            
    <form method="post" action="tratar.php">

        <?php
            if(isset($_GET['resultado']) && $_GET['resultado'] == 'sucesso') :
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Aluno cadastrado com sucesso!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
            endif;
        ?>

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome"  placeholder="Entre com seu nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" class="form-control" id="sobrenome"  placeholder="Entre com seu sobrenome" name="sobrenome">
        </div>       
        <div class="form-group">
            <label for="data_nascimento">Data de Nascimento</label>
            <input type="date" class="form-control" id="data_nascimento"  name="data_nascimento">
        </div>         
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" placeholder="12345678900" name="cpf" size="11" maxlength="11">
        </div>
        <div class="form-group">
            <label for="genero">Gênero</label>
            <select class="form-control" id="genero" name="genero" required>
                <option value="1">Feminino</option>
                <option value="2">Masculino</option>
                <option value="3" selected>Não identificado</option>
            </select>
        </div>        
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="tel" class="form-control" id="telefone"  placeholder="63988880000" name="telefone" size="11" maxlength="11">
        </div>    
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email"  placeholder="fulano@email.com" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </section>

    <div id="curso" class="media bio rounded bg-transparent" >  
            <div class="media-body" >
              <img id="sobre" width="144"; height= "144px" class="mr-3 img-responsive img-thumbnail" src="assets/img/hs.png" alt="Responsive image" style="float: left">
              <h2 id="h2" class="mt-0">Sobre o Curso:</h2>
              <p>Olá, somos alunos do 3° ano A de informática do Instituto Federal do Tocantins. O projeto proposto por nós tem como objetivo levar mentores para a terceira série do curso técnico em agropecuária com o intuito de ensinar os alunos a formatar textos utilizando os softwares de edição existentes (Word/Writer) de acordo com as normas padroẽs da ABNT.</p>
              <p>Formatar um trabalho acadêmico nas normas da ABNT pode ser confuso. Diante do exposto, salienta-se a seguinte pergunta: é desenvolver nos discentes do curso técnico em agropecuária as habilidades mínimas necessárias para formatação de trabalhos técnicos utilizando as normas padrões da ABNT?</p>
              <p>A maioria dos alunos das escolas públicas e privadas nunca tiveram acesso a uma aula de informática básica, ou já formataram um texto, mas não usando a forma que o mercado de trabalho irá exigir, ou seja, usar as normas padrões da ABNT (Associação Brasileira de Normas Técnicas). O presente projeto tem como objetivo principal ensinar os jovens formatar um trabalho utilizando os softwares de edição existentes (Word/Writer) de forma certa, porque se algum dia eles necessitarem de formatar um texto para apresentar a sua empresa ou também apresenta – ló ao seu professor como um trabalho técnico, eles saberão como fazer corretamente.</p>
              <p>Desenvolvedores: Hércules Santana dos Santos e Camile Conceição de Carvalho.<br>
              Professor Orientador: Marcos Dias da Conceição.</p>
            </div>      
        </div>

<!-- Sobre -->
  <section class="page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Desenvolvedores</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="">
            <h4>Hércules Santana</h4>
            <p>Desenvolvedor Front-End<br>(Designer do Website).</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/heraclesjame">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/hercules.santana.5201">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/heraclessantana/">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="assets/img/team/a.jpeg" alt="">
            <h4>Marcos Dias</h4>
            <p>Professor orientador e ministrador<br>da matéria de DSI.</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/timarcosdias?fbclid=IwAR25PRW1Fx7KqlFt1YOM-py6OvSVXLjosfwfJn36CDiGZ-EhkJBgTNCFvC4">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/ti.marcosdias?__tn__=%2CdlC-R-R&eid=ARCh0rAhpCfw_pfYDPXFyI6VCLvWvklwJKVsIwP2XgrJSqoZQ1NRTWAge2xHuPwH3IPvMe9QsAIDr-GP&hc_ref=ARQC8gknkXPM9twKrcONozTjsVJd125KEjTSTpf_frDMvliHtZXQgoA7zCf2ImIVjnI">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/timarcosdias/">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpeg" alt="">
            <h4>Camile Carvalho</h4>
            <p>Desenvolvedora Back-End<br>(Estrutura do website).</p>
            <ul class="list-inline social-buttons">
             <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/camile_car/">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12">
          <span class="copyright">Copyright &copy; HeraclesJame Todos os direitos reservados 2019</span>
        </div>
      </div>
    </div>
  </footer>

    <script src="vendor/popper.min.js"></script>
    <script src="vendor/jquery-3.3.1.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>