<!DOCTYPE html>
<head>
<link rel="stylesheet" href="estilo.css">
</head>
 <body>


 <img class="semp" src="imagenes/Omega Up Fondo Blanco.png">
    <div class="margin"></div>
    <h1 class="unnu"> Inicia sesión/Registrarte</h1>
    <div class="margin"></div>
 <h1 class="titulo">4886. Autores</h1>
 <table class="tabla" cellpadding="3" cellspacing="3">
<tr>
<td><strong>Puntos</strong></td> <td>12.45</td> 
<td><strong>Límite de memoria</strong> <td>32 <br> MiB</td>
</tr>
<tr>
<td><strong>Límite de tiempo (caso)</strong></td> <td> 1s</td>
<td><strong>Límite de tiempo <br> (total)</strong></td>
<td>1m0s</td>
</tr>
<td><strong>Tamaño límite de entrada (bytes)</strong></td>
 <td>10  <br> KiB</td>
</table>

<h2>Descripción</h2>
<p>Los grandes descubrimientos científicos a menudo son nombrados
     por los apellidos de los científicos que los hicieron. Por ejemplo,
    el sistema de criptografía asimétrica más popular, RSA fue 
    descubierto por Rivest, Shamir y Adleman. Otro ejemplo notable 
    es el algoritmo de Knuth-Morris-Pratt, nombrado por Knuth, Morris
     y Pratt. La referencia de documentos científicos anteriores 
    funciona mucho y es frecuente que un documento utilice dos 
    convenciones de nomenclatura diferentes: la variación corta 
    (por ejemplo, KMP) utilizando sólo las primeras letras de los
    autores y la larga variación (por ejemplo, Knuth-Morris-Pratt)
    Apellidos completos separados por guiones. Encontramos que
    la mezcla de dos convenciones en un papel es estéticamente 
    desagradable y quisiera que usted escribiera
    un programa que transformara variaciones largas en cortas</p>

<h2>Entrada</h2>
<p>La primera y única línea de entrada contendrá como máximo 100
     caracteres, letras mayúsculas y minúsculas del alfabeto inglés
      y guión ('-' ASCII 45). El primer carácter siempre será una letra
       mayúscula. Los guiones siempre serán seguidos por una 
       letra mayúscula. Todos los demás caracteres serán letras 
       inúsculas.</p>

    <h2>Salida</h2>
    <p>La primera y única línea de salida debe contener
         la variación corta apropiada.</p>

        <h2>Entrada Salida</h2>
        <table class="tabla" cellspacing="3" cellpading="3">
<td>Knuth-Morris-Pratt</td> <td>KMP</td>
<tr>
<td>Mirko-Slavko</td> <td>MS</td>
</tr>
<tr>
<td>Pasko-Patak</td> <td>PP</td>
</tr>
</table>


<form id="autoresForm" onsubmit="return convertirVariacion()" method="post">
        <label for="variacionInput">Ingrese la variación larga:</label><br>
        <input type="text" id="variacionInput" name="variacionInput"><br>
        <input type="submit" value="Convertir a variación corta">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["variacionInput"])) {
            $variacionLarga = $_POST["variacionInput"];
            $palabras = explode("-", $variacionLarga);
            $variacionCorta = "";
            foreach ($palabras as $palabra) {
                $variacionCorta .= strtoupper($palabra[0]);
            }
            echo "<p>La variación corta es: $variacionCorta</p>";
        } else {
            echo "<p>No se proporcionó ninguna variación larga.</p>";
        }
    }
    ?>
</body>
</html>