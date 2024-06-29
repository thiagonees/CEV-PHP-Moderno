<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Sorteador de números</title>
</head>
<body>
  <main>
  <h1>Trabalhando com números aleatórios</h1>
  <?php 
  $min = 0;
  $max = 100;
  $num = mt_rand($min, $max);

  echo "<p>Gerando um número aleatório entre $min e $max... <br> O valor gerado
  foi <strong>$num</strong></p>"
  ?>

  <button onClick="javascript:document.location.reload()">&#x1F504 Gerar outro</button>
  </main>
</body>
</html>