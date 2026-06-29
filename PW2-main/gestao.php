<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Etec - Centro Paula Souza</title>

<link href="css.gestao.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"></script>

</head>

<body>

<!-- HEADER -->
<header class="header-fixo">

  <div class="topo-logo">
    <img src="../Imagens/logo.jpg" alt="Logo ETEC">
  </div>

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
          <li class="nav-item"><a class="nav-link active" href="gestao.php">Gestão</a></li>
        </ul>
      </div>

    </div>
  </nav>

</header>

<!-- HERO -->
<section class="hero">
  <div class="container text-center">
    <h1>Conheça mais sobre a gestão</h1>
    <p>Pessoas preparadas e prontas para te ajudar</p>
 
  </div>
</section>

<!-- MISSÃO VISÃO VALORES -->
<section class="container mt-5">

  <h2 class="titulo-secao">Nossa Base</h2>

  <div class="mvv">

    <div class="bloco-mvv">
      <h2 class="titulo-secao2">Missão</h2>
      <p>Oferecer educação pública de qualidade, integrando ensino médio e técnico, 
        formando cidadãos críticos, éticos e preparados para o mercado de trabalho 
        e para a continuidade dos estudos.</p>
    </div>

    <div class="bloco-mvv">
      <h2 class="titulo-secao2">Visão</h2>
      <p>Ser referência em ensino técnico de qualidade, promovendo inovação e desenvolvimento educacional.Ser 
        reconhecida como uma instituição de excelência no ensino técnico e médio, 
        contribuindo para o desenvolvimento social, econômico e tecnológico da sociedade.</p>
    </div>

    <div class="bloco-mvv">
      <h2 class="titulo-secao2">Valores</h2>
      <p>
       <li> Qualidade no ensino: compromisso com a aprendizagem dos alunos</li>
        <li> Ética: respeito, responsabilidade e integridade em todas as ações</li>
        <li>Inclusão: valorização da diversidade e igualdade de oportunidades</li>
        <li>Inovação: incentivo ao uso de novas tecnologias e metodologias</li>
        <li>Cidadania: formação de indivíduos conscientes e participativos</li>
        <li>Compromisso social: contribuição para o desenvolvimento da comunidade</li>
        </p>
    </div>

  </div>

</section>

<!-- EQUIPE -->
<section class="container mt-5">

  <h2 class="titulo-secao">Nossa Equipe</h2>

  <div class="equipe">

    <div class="membro">
      <img src="../Imagens/diretor.jpg">
      <h6>Diretor</h6>
      <p>Responsável pela gestão geral</p>
    </div>

    <div class="membro">
      <img src="../Imagens/coordenador.jpg">
      <h6>Coordenadora</h6>
      <p>Organização pedagógica</p>
    </div>

    <div class="membro">
      <img src="../Imagens/professor.jpg">
      <h6>Professora</h6>
      <p>Ensino e acompanhamento</p>
    </div>

    <div class="membro">
      <img src="../Imagens/curso.jpg">
      <h6>Coord. Curso</h6>
      <p>Gestão dos cursos técnicos</p>
    </div>

  </div>

</section>
<h2 class="titulo-secao">Calendário Escolar</h2>
<div class="calendario-tabela">

  <table>
    <thead>
      <tr>
        <th>Evento</th>
        <th>Descrição</th>
        <th>Data</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>Início das aulas</td>
        <td>Retorno dos alunos</td>
        <td>05/02</td>
      </tr>

      <tr>
        <td>Período de provas</td>
        <td>Avaliações bimestrais</td>
        <td>Março</td>
      </tr>

      <tr>
        <td>Evento escolar</td>
        <td>Feira e apresentações</td>
        <td>Abril</td>
      </tr>

      <tr>
        <td>Encerramento</td>
        <td>Final do ano letivo</td>
        <td>Dezembro</td>
      </tr>
    </tbody>
  </table>
</div>

<!-- NOTÍCIAS -->
<section class="container mt-5 mb-5 destaque-noticias">

<h2 class="titulo-secao">Fique por Dentro</h2>

<div class="row">

<div class="col-md-6">
<div class="card-noticia">
<h5>🎓 Como ingressar na ETEC</h5>
<p>
O ingresso acontece por meio do vestibulinho, realizado semestralmente.
</p>
<span class="tag">Inscrições em breve</span>
</div>
</div>

<div class="col-md-6">
<div class="card-noticia">
<h5>💼 Vagas e Oportunidades</h5>
<p>
Fique atento às oportunidades de estágio e projetos oferecidos pela escola.
</p>
<span class="tag">Novidades chegando</span>
</div>
</div>

</div>

</section>

<!-- FOOTER -->
<footer class="footer-custom pt-5 pb-3">

  <div class="container">

    <div class="row">

      <div class="col-md-4">
        <h5>ETEC</h5>
        <p>Educação pública de qualidade.</p>
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

</body>
</html>