<!DOCTYPE html>
<html>
<body>
<html lang="es">
<style>
      h1{

    font-weight: normal; font-weight: normal; font-weight: normal; font-weight: normal;/* Hacer que el título no esté en negrita */
      }
      body {
            background-color: white; /* Color de fondo de la página */
            font-family: Arial, sans-serif; /* Fuente del texto */
            margin-left: 400px; /* Mover el contenido hacia arriba */
            margin: 550px; 
            margin-top: 200px; /* Mueve el contenido hacia arriba */
            
        }
     .EstacionesdelAño{
            width: 60%; 
            border-collapse: collapse; 
        }
        table{
            border-collapse: collapse; 
        }
        
        th, td{
            padding: 10px; 
            border: 1px solid #ddd;
        }
        .contenido{
            margin-right: 50px 20px 10px;
        }
        .numeros{
        width: 15%;
        background-color:  #f2f2f2;
    }
    th, td{
            padding: 10px; /* Añade un espacio alrededor del contenido de las celdas */
            border: 1px solid #ddd; /* Añade bordes a las celdas */
           
        }
    </style>
<table border="1" cellspacing="0"cellpading="3" class="EstacionesdelAño">
  
<h1>13433.Estaciones del Año<h1>

    <ul id="menu">
     <tr>

     <td class ="EstacionesdelAño"><strong>puntos</strong></td><td>23.98</td><td><strong>Límite de memoria</strong></td><td> 32<br>MiB</td>
         </tr>
         <tr>
             <td><strong>Límite de tiempo (caso)</strong></td><td>1s</td><td><strong>Límite de tiempo<br>(total)</strong></td><td> 32<br>MiB</td>
         </tr>
         <tr>

         <td><strong>Límite de entrada<br>(bytes)</strong></td><td>10 KiB<br>KiB</td>
         </tr>
         <tr>
    
        </tr>
    </ul>
</table>


<h2> Descripcion <h2>
<h3>Brithany quiere combinar la programación con el inglés, y se encuentra empezando a usar las estructuras de control selectivas en la programación estructurada, como ejercicio necesita desarrollar un programa que sea capaz de especificar a que estación (su nombre en inglés) del año pertenece una fecha en especifico compuesta por un día 
 y un mes 
 según lo siguiente:

<li>Winter del 21 de diciembre al 20 de marzo<br></li>
<li>Spring del 21 de marzo al 21 de junio<br></li>
<li>Summer del 22 de junio al 22 de septiembre<br></li>
<li>Fall del 23 de septiembre al 20 de diciembre<br></li>
Considerando la siguiente cantidad de días para cada mes:

<li>Enero, Marzo, Mayo, Julio, Agosto, Octubre y Diciembre 31 días<br>
<li>Abril, Junio, Septiembre y Noviembre 30 días<br></li>
Febrero 28 días
Cualquier fecha fuera de estos rangos debe considerarse como no existente
Ayuda a Brithany a crear ese programa usando estructuras de control selectivas.
</h3>
<h2><strong> Ejemplo</strong><h2>
<h3>Dos números enteros y separados por un espacio que corresponden al día y mes de una fecha determinada</h3>
<h2><strong>Salida</strong><h2>
<h3>Dos números enteros y separados por un espacio que corresponden al día y mes de una fecha determinada</h3>
<h3> Entrada <span> salida</sapn><h3>
    
<table border="2" callspacing="0" callpading="2" class="Estaciones del año">
  <tr>
  
  <div class="numeros">
  <td>15  10</td><td>Fall</td>
</tr>
<tr>
  <td>22 3</td><td>Spring</td>
  </tr>
  <tr>
  <td>31 4</td><td>31 4</td>
  </tr>
</table>
<tr>
<?php

$stdin = fopen('php://stdin', 'r');
$input = trim(fgets($stdin));
fclose($stdin);

$fecha = explode(' ', $input);

if (count($fecha) != 2) {
   /* echo "Formato de entrada incorrecto\n";*/
} else {
    $dia = $fecha[0];
    $mes = $fecha[1];

    if ($mes < 1 || $mes > 12 || $dia < 1 || $dia > 31) {
        echo "no existe la fecha\n";
    } else {
        if (($mes == 12 && $dia >= 21) || ($mes <= 3 && $dia <= 20)) {
            echo "Winter\n";
        } else if (($mes == 3 && $dia >= 21) || ($mes == 6 && $dia <= 20) || ($mes == 4) || ($mes == 5)) {
            echo "Spring\n";
        } else if (($mes == 6 && $dia >= 21) || ($mes == 9 && $dia <= 22) || ($mes == 7) || ($mes == 8)) {
            echo "Summer\n";
        } else if (($mes == 9 && $dia >= 23) || ($mes == 12 && $dia <= 20) || ($mes == 10) || ($mes == 11)) {
            echo "Fall\n";
        } else {
            echo "no existe la fecha\n";
        }
    }
}

?>


<h4>--------------------------------------------------------------------------------</h4>
<h1>7294. ¿Cuántos valen 7?</h1>
<tr>
<table border="1" cellspacing="0"cellpading="3" class="5630.Colegiatura">
</tr>
<td><strong> puntos</strong></td><td>10.21</td><td><strong>Límite de memoria</strong><td>32<br> MiB</td>
<tr>
<td><strong>Límite de tiempo (caso)</strong></td><td>1s</td><td><strong>Límite de tiempo (total)</strong><td>1m<br>1m0s</td>
</tr>
<tr>
<td><strong>Tamaño límite de entrada (bytes)</strong></td><td>10<br>KiB</td>
</tr>
</table>

<h2>Descripcion</h2>
<h4>Escribe un programa que lea dos enteros e imprima cuántos de ellos valen <strong> 7 </strong></h4>
<h2>Entrada</h2>
<h4>Dos enteros en el rango de -1000 a + 1000.</h4>
<h2>Salida</h2>
<h4>La cantidad de enteros iguales a <strong> 7</strong></h4>
<h2>Ejemplo<h2>
<h4>Entrada  <span>  Salida</span></h4>
<table border="1" cellspacing="0" cellpading="3" class="entrasali">
<tr>
<div class="numeros">
<td>-3 8</td><td>0</td>
</tr>
<tr>
<td>7 57</td><td>1</td>
</tr>
<tr>
<td>62 7</td><td>1</td>
</tr>
<tr>
<td>7 7</td><td>2</td>
<tr>
</table>
<?php

function contarSietes($num1, $num2) {
    $cantidadSietes = 0;
    if ($num1 == 7) {
        $cantidadSietes++;
    }
    if ($num2 == 7) {
        $cantidadSietes++;
    }
    return $cantidadSietes;
}

$entrada = explode(" ", readline());
$num1 = intval($entrada[0]);
$num2 = intval($entrada[1]);

$resultado = contarSietes($num1, $num2);
echo $resultado;
?>

</div>
<head>
</body>
</html>
<h4>--------------------------------------------------------------------------------</h4>
<h1>7341. El mayor de tres números</h1>
<table border="1" cellspacing="0"cellpading="3" class="5630.Colegiatura">
</tr>
<td><strong> puntos</strong></td><td>10.13</td><td><strong>Límite de memoria</strong><td>32<br> MiB</td>
<tr>
<td><strong>Límite de tiempo (caso)</strong></td><td>1s</td><td><strong>Límite de tiempo (total)</strong><td>1m<br>1m0s</td>
</tr>
<tr>
<td><strong>Tamaño límite de entrada (bytes)</strong></td><td>10<br>KiB</td>
</tr>
</table>
<h2>Descripcion</h2>
<h4>Realiza un problema que imprima el mayor de tres números.</h4>
<h2>Entrada</h2>
<h4>Escribe tres números enteros <strong> a, b</strong>y <strong>c</strong></h4>
<h2>Salida</h2>
<h4>El número entero mayor de los tres números introducidos.</h4>
<h2>Ejemplo<h2>
<h4>Entrada  <span>  Salida</span></h4>
<table border="1" cellspacing="0" cellpading="3" class="entrasali">
<tr>
<div class="numeros">
<td>10<br>8<br>-7</td><td>10</td>
</tr>
<tr>
<td>10<br>81<br>101</td><td>101</td>
</tr>
<tr>
<td>11<br>11<br>11</td><td>11</td>
</tr>
<tr>
<td>10<br>810<br>101</td><td>810</td>
</tr>
</table>
<?php
$numero1=7;
$numero2=54;
$numero3=79;
/*echo"Numeros proporcionados: ", $numero1," ", $numero2," ", $numero3 <br>;
echo"El numero mas grande es :", max($numero1,$numero2,$numero3);*/
?>
</div>
</div>
</div>
</div>
<head>
</body>
</html>