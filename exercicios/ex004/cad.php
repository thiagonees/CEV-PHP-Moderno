<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Resultado do processamento</h1>
  </header>
  <main>
    <?php 
      $nome = $_GET["nome"] ?? "Nome não enviado!";
      $sobrenome = $_GET["sobrenome"] ?? "Sobrenome não enviado!";
      echo "<p>É um prazer te conhecer, <strong> $nome $sobrenome</strong></>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
  </main>
</body>
</html>