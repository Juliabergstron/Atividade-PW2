<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
<title>Etec - Centro Paula Souza</title>
<link href="css.contato.css" rel="stylesheet">
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
<section class="container mt-5">

<h2 class="titulo-secao text-center mb-5">Fale Conosco</h2>

<br><br><br>
</section>
<form id="formContato" action="processa.php" method="POST" class="form-custom">

    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input id="nome" type="text" name="nome" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Telefone</label>
        <input id="telefone" type="text" name="telefone" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input id="email" type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Assunto</label>
        <select id="assunto" name="assunto" class="form-control">
            <option value="">Selecione</option>
            <option value="suporte">Suporte técnico</option>
            <option value="comercial">Proposta comercial</option>
            <option value="parceria">Parceria</option>
            <option value="outro">Outro</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Mensagem</label>
        <textarea id="mensagem" name="mensagem" class="form-control" rows="5" maxlength="500"></textarea>
        <small id="charCount">0 / 500</small>
    </div>

    <div class="mb-3">
        <input type="checkbox" id="aceite" name="aceite">
        <label for="aceite">Aceito a Política de Privacidade</label>
    </div>

    <button id="submitBtn" type="submit" class="btn btn-enviar w-100">
        Enviar
    </button>

</form>
<br><br><br>
</section>
<script>
document.addEventListener('DOMContentLoaded', () => {

    const form = document.getElementById('formContato');
    const telefone = document.getElementById('telefone');
    const mensagem = document.getElementById('mensagem');
    const charCount = document.getElementById('charCount');
    const submitBtn = document.getElementById('submitBtn');

    const MAX_CHARS = 500;

    mensagem.addEventListener('input', () => {
        charCount.textContent = `${mensagem.value.length} / ${MAX_CHARS}`;
    });

    telefone.addEventListener('input', () => {
        let v = telefone.value.replace(/\D/g, '');

        if (v.length > 11) v = v.slice(0, 11);

        if (v.length > 10)
            v = v.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
        else if (v.length > 6)
            v = v.replace(/^(\d{2})(\d{4})(\d+)$/, '($1) $2-$3');
        else if (v.length > 2)
            v = v.replace(/^(\d{2})(\d+)$/, '($1) $2');

        telefone.value = v;
    });

    form.addEventListener('submit', function(e) {

        const nome = document.getElementById('nome').value.trim();
        const telefone = document.getElementById('telefone').value.trim();
        const email = document.getElementById('email').value.trim();
        const assunto = document.getElementById('assunto').value;
        const mensagem = document.getElementById('mensagem').value.trim();
        const aceite = document.getElementById('aceite').checked;

        if (nome.length < 3) {
            alert('Nome precisa ter pelo menos 3 caracteres.');
            e.preventDefault();
            return;
        }

        if (telefone === '') {
            alert('Telefone é obrigatório.');
            e.preventDefault();
            return;
        }

        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            alert('Digite um email válido.');
            e.preventDefault();
            return;
        }

        if (assunto === '') {
            alert('Selecione um assunto.');
            e.preventDefault();
            return;
        }

        if (mensagem.length < 10) {
            alert('Mensagem deve ter pelo menos 10 caracteres.');
            e.preventDefault();
            return;
        }

        if (!aceite) {
            alert('Aceite a Política de Privacidade.');
            e.preventDefault();
            return;
        }

        submitBtn.disabled = true;
    });

});
</script>
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
