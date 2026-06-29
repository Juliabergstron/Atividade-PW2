<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
<title>Etec - Centro Paula Souza</title>
<link href="css.index.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script> 


</head>

<body>

<header class="header-fixo">

  <!-- FAIXA COM LOGO -->
  <div class="topo-logo">
    <img src="../Imagens/logo.jpg" alt="Logo ETEC">
  </div>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">

      <a class="navbar-brand fw-bold" href="index.php">
        <span class="logo-etec">ETEC</span>
      </a>

      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="cursos.php">Cursos</a></li>
          <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
          <li class="nav-item"><a class="nav-link" href="gestao.php">Gestão</a></li>
        </ul>
      </div>

    </div>
  </nav>

</header>

  <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <div class="carousel-inner">

      <!-- SLIDE 1 -->
      <div class="carousel-item active">
        <img src="../imagens/carrosel1.jpg">

        <div class="carousel-caption d-flex flex-column justify-content-center h-100 text-start">
          <h1>Bem-vindo à ETEC</h1>
          <p>Educação de qualidade para transformar o seu futuro.</p>
          <a href="cursos.php" class="btn btn-light">Ver Cursos</a>
        </div>
      </div>

      <!-- SLIDE 2 -->
      <div class="carousel-item">
        <img src="../imagens/carrosel2.jpg">

        <div class="carousel-caption d-flex flex-column justify-content-center h-100 text-start">
          <h1>Cursos Técnicos Gratuitos</h1>
          <p>Aprenda na prática e prepare-se para o mercado de trabalho.</p>
          <a href="cursos.php" class="btn btn-light">Saiba Mais</a>
        </div>
      </div>

      <!-- SLIDE 3 -->
      <div class="carousel-item">
        <img src="../imagens/carrosel3.jpg">

        <div class="carousel-caption d-flex flex-column justify-content-center h-100 text-start">
          <h1>Seu futuro começa aqui</h1>
          <p>Invista no seu conhecimento com ensino público de qualidade.</p>
          <a href="contato.php" class="btn btn-light">Fale Conosco</a>
        </div>
      </div>

    </div>

    <!-- BOTÕES -->
    <button class="carousel-control-prev" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>

  </div>

</section>

<!-- SOBRE -->
<section class="sobre-section">
  <div class="container text-center">
<br><br><br>
    <h1 class="titulo-destaque">Escolas Técnicas Estaduais</h1>

    <div class="linha"></div>

    <p class="texto-sobre">
      A ETEC (Escola Técnica Estadual) é uma instituição pública de ensino mantida pelo Centro Paula Souza, 
      no estado de São Paulo. Seu principal objetivo é oferecer ensino médio integrado ao ensino técnico, 
      preparando os alunos tanto para o mercado de trabalho quanto para a continuidade dos estudos em nível superior.

      As ETECs são reconhecidas pela qualidade de ensino, pois unem teoria e prática em diversas áreas profissionais, 
      como Administração, Informática, Enfermagem, Mecânica, entre outras. Além disso, os alunos desenvolvem habilidades 
      importantes, como responsabilidade, organização e pensamento crítico, que são essenciais para a vida profissional.

      O ingresso nas ETECs acontece por meio de um processo seletivo chamado Vestibulinho, que avalia os conhecimentos 
      dos candidatos. Por ser bastante concorrido, exige dedicação e preparo dos estudantes.

      Dessa forma, a ETEC desempenha um papel importante na formação de jovens, contribuindo para a 
      qualificação profissional e oferecendo oportunidades para um futuro melhor.
          </p>

  </div>
</section>
<section class="diferencial-section">
  <div class="container">

    <h2 class="titulo-diferencial text-center">Por que escolher uma ETEC?</h2>

     <div class="linha"></div>

    <div class="row g-4 mt-5">

      <div class="col-md-4">
        <div class="card minimal-card">
          <span class="numero">01</span>
          <h5>Ensino de Qualidade</h5>
          <p>Professores qualificados e ensino reconhecido.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card minimal-card">
          <span class="numero">02</span>
          <h5>Infraestrutura</h5>
          <p>Laboratórios modernos e ensino prático.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card minimal-card">
          <span class="numero">03</span>
          <h5>Oportunidades</h5>
          <p>Preparação real para o mercado de trabalho.</p>
        </div>
      </div>

    </div>

  </div>
</section>

</section>
<section class="noticias-section">
  <div class="container">

    <h2 class="titulo-noticias mb-5">Últimas Notícias</h2>

     <div class="linha"></div>
     
    <div class="row g-4">

      <!-- NOTÍCIA GRANDE -->
      <div class="col-md-6">
        <div class="noticia-card grande">
          <img src="../imagens/noticias1.png">
          <div class="overlay">
            <h5>ETEC abre inscrições para novos cursos</h5>
            <p>Confira as oportunidades disponíveis para o próximo semestre.</p>
          </div>
        </div>
      </div>

      <!-- NOTÍCIAS MENORES -->
      <div class="col-md-6">

        <div class="row g-4">

          <div class="col-12">
            <div class="noticia-card">
              <img src="../imagens/noticias2.jpg">
              <div class="overlay">
                <h6>Alunos participam de feira tecnológica</h6>
              </div>
            </div>
          </div>

          <div class="col-6">
            <div class="noticia-card">
              <img src="../imagens/noticias3.jpg">
              <div class="overlay">
                <h6>Projeto inovador ganha destaque</h6>
              </div>
            </div>
          </div>

          <div class="col-6">
            <div class="noticia-card">
              <img src="../imagens/noticias4.jpg">
              <div class="overlay">
                <h6>Novos laboratórios inaugurados</h6>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>

  </div>
</section>
<!-- FOOTER MODERNO -->
<footer class="footer-custom pt-5 pb-3">

  <div class="container">

    <div class="row">

      <div class="col-md-4">
        <h5>ETEC</h5>
        <p>Educação pública de qualidade, formando profissionais para o futuro.</p>
      </div>

      <div class="col-md-4">
        <h5>Links</h5>
        <ul class="list-unstyled">
          <li><a href="index.php" class="footer-link">Home</a></li>
          <li><a href="cursos.php" class="footer-link">Cursos</a></li>
          <li><a href="contato.php" class="footer-link">Contato</a></li>
        </ul>
      </div>

      <div class="col-md-4">
        <h5>Contato</h5>
        <p>Email: etec@email.com</p>
        <p>Telefone: (11) 0000-0000</p>
      </div>

    </div>

    <hr>

    <p class="text-center mb-0">© 2026 Centro Paula Souza</p>

  </div>

</footer>
