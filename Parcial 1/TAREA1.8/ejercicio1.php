<!DOCTYPE html>
<html lang="es">
<head>
   <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <img class="semp" src="imagenes/Omega Up Fondo Blanco.png">
    <div class="margin"></div>
    <h1 class="unnu"> Inicia sesión/Registrarte</h1>


    <h1 class="titulo">4352. Bit de paridad</h1>
    <table class="table" border="1" cellpadding="3" cellspacing="3">
        <tr>
            <td><strong>Puntos</strong></td><td>12.69</td>
            <td><strong>Límite de momeria</strong></td><td>32 <br> MiB</td>
        </tr> 
        <tr>
            <td><strong>Límite de tiempo (caso)</strong></td><td>1s</td>
            <td><strong>Límite de tiempo (total)</strong></td><td>1m0s</td>
        </tr>
        <tr>
            <td><strong>Tamaño límite de entrada (bytes)</strong></td> 
            <td>10 <br> KiB</td>
        </tr>
    </table>

    <h2>Descripción</h2>
    <p>Un <strong>bit de paridad</strong>es un dígito binario que indica 
    si el número de bits con un valor de 1 en un conjunto de bits <br>
    es par o impar. Los bits de paridad conforman el método de detección
     de errores más simple. Existen dos varian- <br>
    tes de este método: <br>

    Bit de paridad par <br>
   Bit de paridad impar. <br>
En el caso de la <strong>paridad par</strong>, se cuentan el número de
 unos. Si el total es impar, el bit de paridad se establece en <br>
 uno y por tanto la suma del total anterior con este bit de paridad, 
 daría par. Si el conteo de bits uno es par, en- <br>
  tonces el bit de paridad se deja en 0, pues ya es par. <br>

Escribe un programa que sirva para añadir un bit de paridad par
 a una secuencia de bits.</p>

  <h2>Entrada</h2>
  <p>La entrada consiste de una sola línea con una secuencia de
     siete bits <span class="rojo"> 0 </span> o<span class="rojo"> 1</span></p>


<h2>Salida</h2>
<p>La salida es la misma secuencia de siete bits
     de la entrada más el bit de paridad par. 
    Dicho bit de paridad se agrega al lado derecho.</p>


<h2>Ejemplo</h2>
<h2>Entrada Salida           Descripción</h2>

<table class="table" border="1" cellspacing="3" cellpadding="3">

<tr>
<td>1010001</td> <td>10100011</td> <td>El número de bits con valor de 
1 en la entrada es 3. La salida son los mismos siete bits 
de la entrada y se añade un bit 1 para que en total el númer
o de bits con valor 1 sea par.</td>
</tr>

<tr>
<td>1101001</td> <td>11010010</td> <td>El número de bits con valor 
    de 1 en la entrada es 4. La salida son los mismos siete
     bits de la entrada y se añade un bit 0 para que en total 
     el número de bits con valor 1 se mantenga par./td>
</tr>
</table>


<form method="post" action="">
        <label for="secuencia">Ingrese la secuencia de bits:</label><br>
        <input type="text" id="secuencia" name="secuencia" maxlength="7" minlength="7" pattern="[01]{7}" required><br><br>
        <input type="submit" value="Añadir bit de paridad">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["secuencia"])) {
            $secuencia = $_POST["secuencia"];
            $contador_unos = substr_count($secuencia, "1");
            $bit_paridad = $contador_unos % 2 == 0 ? "0" : "1";
            echo "<p>Secuencia de entrada: $secuencia$bit_paridad</p>";
        } else {
            echo "<p>No se proporcionó ninguna secuencia de bits.</p>";
        }
    }
    ?>
</body>
</html>
