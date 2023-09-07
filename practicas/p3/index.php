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


        echo "<h2> Ejercicio 3. </h2>";
        echo "<p>Mestra el contenido de cada variable inmediatamente después de cada asignación, verificar la evolución del tipo de estas variables
         (imprime todos los componentes de los arreglos):</p>";

            $a = "PHP5";
            echo "\$a = \"$a\"; El tipo de dato es: ". gettype($a)."\n";
            echo "<br>";
            $z[] = &$a;
            echo "\$z[] = &\$a; El tipo de dato es: \$z: ". gettype($z).". El tipo de dato es: \$z[0]:". gettype($z[0])."\n";
            echo"<br>";
            $b = "5a version de PHP";
            echo "\$b = \"$b\"; El tipo de dato es: ". gettype($b)."\n";
            echo"<br>";
            @$c = $b * 10;
            echo "\$c = \$b * 10; El tipo de dato es: " . gettype($c) . "\n";
            echo"<br>";
            $a .= $b;
            echo "\$a .= \$b; El tipo de dato es: " . gettype($a)."\n";
            echo"<br>";
            $b *= $c;
            echo "\$b *= \$c; El tipo de dato es: " . gettype($b)."\n";
            echo"<br>";
            $z[0] = "MySQL";
            echo "\$z[0] = \"MySQL\"; El tipo de dato es: \$z[0]: ". gettype($z[0])."\n";


            echo "<h2> Ejercicio 4. </h2>";
            echo "<p> Lee y muestra los valores de las variables del ejercicio anterior, </p>";
            echo "<p>pero ahora con la ayuda de  la matriz $ GLOBALS o del modificador global de PHP. </p>";

            $a = "PHP5"; $GLOBALS['a']=$a;
            echo "\$a = \"$a\"; El tipo de dato es: " .gettype($a)."\n"; 
            echo "<br>";
            $z[] = &$a; $GLOBALS['z']=$z;
            echo "\$z[] = &\$a; El tipo de dato es: \$z: ".gettype($z) . ". 
            El tipo de dato es: \$z[0]:".gettype($z[0])."\n"; 
            echo "<br>";
            $b = "5a version de PHP"; $GLOBALS['b']=$b;
            echo "\$b = \"$b\"; El tipo de dato es: " .gettype($b)."\n"; 
            echo "<br>";
            @$c = $b * 10; $GLOBALS['c']=$c;
            echo "\$c = \$b * 10; El tipo de dato es: ".gettype($c)."\n"; 
            echo "<br>";
            $a .= $b; $GLOBALS['a']=$a;
            echo "\$a .= \$b; El tipo de dato es: ".gettype($a)."\n"; 
            echo "<br>";
            $b *= $c; $GLOBALS['b']=$b;
            echo "\$b *= \$c; El tipo de dato es: ".gettype($b)."\n"; 
            echo "<br>";
            $z[0] = "MySQL"; $GLOBALS['z']=$z;
            echo "\$z[0] = \"MySQL\"; El tipo de dato es: \$z[0]:
             ".gettype($z[0])."\n"; 


            echo "<h2> Ejercicio 5. </h2>";
            echo "<p> Dar el valor de las variables $ a, $ b, $ c al final del siguiente script:  </p>";

            echo "\$a = 7 personas; \n"; echo " El valor de $ a es= 9E3 ";
            echo "<br>";
            echo "\$b = (integer) $ a; \n"; echo " El valor de  $ b es: 7";
            echo "<br>";
            echo "\$c = (double) $ a;  \n"; echo " El valor de $ c es: 9000 ";

            echo "<h2> Ejercicio 6. </h2>";
            echo "<p>  Dar y comprobar el valor booleano de las variables
             $ a, $ b, $ c, $ d, $ e y $ f y muéstralas  usando la función var_dump(<datos>).  </p>";

             $a = "0";
             $b = "TRUE";
             $c = FALSE;
             $d = ($a OR $b);
             $e = ($a AND $c);
             $f = ($a XOR $b); 

             var_dump($a); echo "<br>";
             var_dump($b); echo "<br>";
             var_dump($c); echo "<br>";
             var_dump($d); echo "<br>";
             var_dump($e); echo "<br>";
             var_dump($f); echo "<br>";

             echo "<p> Después investiga una función de PHP que permita transformar el valor
             booleano de $ c y $ e  en uno que se pueda mostrar con un echo: </p>";

             echo var_export($c , true); 
             echo"<br>";
             echo var_export($e, true); 
             echo"<br>";

             echo "<h2> Ejercicio 7. </h2>";
             echo "<p> Usando la variable predefinida $ _SERVER, determina lo siguiente:</p>";
             echo "<p> a. La versión de Apache y PHP  </p>";

             $server_software = ($_SERVER['SERVER_SOFTWARE']);
             $php_version = phpversion();

                echo "La versión de Apache es: $server_software\n"; echo"<br>";
                echo "La versión de PHP es: $php_version\n";

                echo "<p>  b. El nombre del sistema operativo (servidor)</p>";

                $server_os = php_uname('s');
                echo "El nombre del sistema operativo (servidor) es: $server_os\n";

                echo "<p> c. El idioma del navegador (cliente).</p>";

                $idioma_cliente = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
                echo " El idioma del navegador (cliente) es: $idioma_cliente\n";












        


    ?>
</body>
</html>