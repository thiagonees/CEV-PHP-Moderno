<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos primitivos de PHP</title>
</head>
<body>
  <h1>Teste de tipos primitivos</h1>
   <?php 
  //   0x = hexadecimal 0b = binaário e 0 = Octal
  //   $num = 010;
  //   echo "O valor da variável é $num";

    // $v = "Gustavo";
    // var_dump($v);

    //  $num = 3e2; // 3x 10(2)
    // echo "O valor é $num";
    // var_dump($num);

    // $num = (int) "950";
    // var_dump($num);


    // $casado = true;
    // // var_dump ($casdo);
    // print "O valor para casado é $casado";

    // $vet = [6, 7, 8, 3, 5];
    // var_dump($vet);

    class Pessoa {
      private string $nome;
    }
    
    $p = new Pessoa();
    var_dump($p);
   ?>
</body>
</html>