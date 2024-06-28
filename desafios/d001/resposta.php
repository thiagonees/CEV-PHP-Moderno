<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <main>
    <h1>Resultado Final</h1>
    <p>
      <?php 
        $number = $_REQUEST['num'] ?? 0;
        $predecessor = $number -1;
        $successor = $number + 1;
        echo "O número escolhido foi <strong>$number</strong>";
        echo "<br> O seu <i>antecessor</i> é o valor de $predecessor";
        echo "<br> O seu <i>sucessor</i> é valor de $successor";
      ?>
    </p>
    <button onClick="javascript:history.go(-1)">Voltar</button>
  </main>
</body>
</html>