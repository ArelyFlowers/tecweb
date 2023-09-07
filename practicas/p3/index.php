<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar,  $_7var,  myvar,  $myvar,  $var7,  $_element1, $house*5</p>
    <?php
        //AQUI VA MI CÓDIGO PHP
        $_myvar;
        $_7var;
        //myvar;       // Inválida
        $myvar;
        $var7;
        $_element1;
        //$house*5;     // Invalida

        echo '<ul>';
        echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
        echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
        echo '<li>$myvar es válida porque inicia con una letra.</li>';
        echo '<li>$var7 es válida porque inicia con una letra.</li>';
        echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
        echo '</ul>';

        echo "<h2> Ejercicio 2</h2>";
        echo "<p> Proporcionar los valores de $ a, $ b, $ c como sigue:</p>";
        $a = "ManejadorSQL"; 
        $b = 'MySQL'; 
        $c = &$a;

        echo "<h3> Ahora muestra el contenido de cada variable </h3>";
        echo $a; echo "<br>";
        echo $b; echo "<br>";
        echo $c; 

        
        echo "<h2> Ejercicio 2 b)</h2>";
        echo "<p> Agrega al código actual las siguientes asignaciones: $ a = PHP server;  $ b = & $ a; </p>";
       
        $a = "ManejadorSQL"; 
        $b = 'MySQL'; 
        $c = &$a;
        $a = "PHP server"; 
        $b = &$a;

        echo "<h3> c. vuelve a mostrar el contenido de cada variable </h3>";

        echo ($a = "ManejadorSQL"); echo "<br>";
        echo ($b = "MySQL"); echo "<br>";
        echo ($c);  echo "<br>";
        echo ($a = "PHP Server"); echo "<br>";
        echo ($b); 

        echo "<h3> d. Describe en y muestra en la página obtenida qué ocurrió en el segundo bloque de asignaciones </h3>"; 
        echo "<p>En el segundo bloque ocurrió que la variable c mostró el mismo resultado de la
        variable anterior es decir, el resultado de b(MySQL), pero debió mostrar el resultado
        de a(ManejadorSQL), por otro lado  b mostró el valor de A(php server) y este es correcto (a)  </p>";


    ?>
</body>
</html>