<?php

$nome = $_POST['nome'];
$email = $_POST['email'];

echo "
<!DOCTYPE html>
<html lang='pt-br'>
<head>
<meta charset='UTF-8'>
<title>Contato Recebido</title>

<style>

body {
  font-family: Arial, sans-serif;
  background: linear-gradient(135deg, #660000, #330000);
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0;
}

.card {
  background: white;
  padding: 40px;
  border-radius: 15px;
  text-align: center;
  max-width: 400px;
  width: 90%;
  box-shadow: 0 15px 40px rgba(0,0,0,0.3);
}

.card h1 {
  color: #660000;
  margin-bottom: 15px;
}

.card p {
  color: #444;
  margin: 10px 0;
  font-size: 16px;
}

.destaque {
  font-weight: bold;
  color: #660000;
}

.botao {
  display: inline-block;
  margin-top: 20px;
  padding: 10px 20px;
  background: #660000;
  color: white;
  text-decoration: none;
  border-radius: 8px;
  transition: 0.3s;
}

.botao:hover {
  background: #990000;
}

</style>

</head>

<body>

<div class='card'>

<h1>Contato Recebido!</h1>

<p>Obrigado <span class='destaque'>$nome</span>, por entrar em contato.</p>

<p>Enviaremos uma mensagem para o e-mail:</p>

<p class='destaque'>$email</p>

<a href='index.php' class='botao'>Voltar ao site</a>

</div>

</body>
</html>
";

?>