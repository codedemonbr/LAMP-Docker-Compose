<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Meus Testes</title>
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
</head>
<body>

  <h1>Minha pagina de testes javascript</h1>
  <?php
    $a = 9;
    $b = 3;
    $c = $a + $b;
    echo "<h3>Soma  $a + $b = $c</h3>";
  ?>
  <script>
    var nome = 'Hello world!';
    console.log(nome);

    console.log(nome.length);

    console.log('Abacate'.length);

    console.log(nome.toUpperCase());

    console.log(nome.toLowerCase());

    console.log(nome.indexOf('ll'));

    console.log(nome.indexOf('teste'));

    console.log(nome.replace('world', 'otario'));

    console.log(nome.slice(0, 4));

    var canalYoutube = '    thsantos     ';
    console.log(canalYoutube);

    console.log(canalYoutube.trim());

    var autor = 'Henrique';

    console.log('O canal do Youtube '+ canalYoutube.trim() +' foi criado por ' + autor);
    
  </script>
</body>
</html>