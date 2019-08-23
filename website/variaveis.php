<!DOCTYPE html>
<html>
<head>
	<title>Variáveis PHP</title>
</head>
<body>
    <?php
        $str = "Olá eu sou uma string";
        echo "String >>> $str<br>";

        $myInt = 666;
        echo "Inteiro >>> $myInt<br>";

        echo "O numero da besta " . $myInt . "!!!<br>";

        $a = 15;
        $b = 6;
        $c = $a + $b;
        echo "O soma de " . $a . " e " . $b . " é igual a " . ($a + $b) . "<br>";
        echo "Soma $c<br>";

        function dentro() {
            global $a;
            echo "Estou dentro da função $a<br>";
        }

        dentro();

        echo "Fora da função $a<br>";

        $x = 8;
        $y = 7;
        function meuTeste() {
            $GLOBALS['x'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        meuTeste();

        echo "Resultado $x<br>";

        function incrementa() {
            static $num = 0;
            echo "$num<br>";
            $num++;
        }

        incrementa();
        incrementa();
        incrementa();
        incrementa();
    ?>
</body>
</html>