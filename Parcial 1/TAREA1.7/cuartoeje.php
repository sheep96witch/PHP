<!DOCTYPE html>
<html>
<body>
    <div class="margen"></div>
<link rel="stylesheet" href="estilo.css">

  <h1 class="titulounu">11338. Escalera de asteriscos</h1>
  <table class="tableuwu" cellspading="3" cellpadding="3"> 
    <tr>
  <td><strong>Puntos</strong></td><td>9.01</td>
  <td><strong>Límite de memoria</strong></td><td>32<br>MiB</td>
</tr>
<tr>
<td><strong>Límite de tiempo (caso)</strong></td><td>1s</td>
<td><strong>Límite de tiempo (total)</strong></td><td>1m0s</td>
</tr>
<tr>
<td><strong>Tamaño límite de entrada<br>(bytes)</strong></td>
<td>10<br>KiB</td>
  </table>

  <h2>Descripción</h2>
  <p>Inés quiere llegar a su casa, pero accidentalmente, 
    los arquitectos construyeron la puerta demasiado alta.
     Tu misión es ayudar a Inés a subir a su casa construyendo 
     una escalera de longitud y altura <strong>N</strong>
    hecha de asteriscos.</p>

    <h2>Entrada</h2>
    <p>Se te darán como valor de entrada un numero entero <strong>N</strong> 
    el cuál representa la longitud y altura de la escalera.</p>

    <h2>Salida</h2>
    Deberás imprimir como salida una escalera de dimensiones <strong> N </strong> 
 de largo y <strong> N </strong>de alto

 <h2>Ejemplo</h2>
 <h2>Entrada Salida</h2>
 <table class="tableuwu"cellspacing="3" cellpadding="3">
    <tr>
<td>2</td><td>#<br>##</td>
    </tr>
<tr>
<td>5</td><td>#<br>##<br>###<br>####<br>#####</td>
</tr>
<tr>
<td>1</td><td>#</td>
</tr>
<tr>
<td>3</td><td>#<br> ##<br>###</td>
</tr>
 </table>
 
 <form method="post">
    <label for="NumN">Ingresa el valor de N:</label>
    <input type="number" id="NumN" name="NumN" required>
    <button type="submit">Generar escalera</button>
</form>

<?php
    if(isset($_POST['NumN'])) {
        $NumN = $_POST['NumN'];
        echo "<div>";
        for ($i = 1; $i <= $NumN; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "#";
            }
            echo "<br>";
        }
        echo "</div>";
    }
?>
 <script>
        // Limpia el formulario después de enviarlo
        document.getElementById("formulario").addEventListener("submit", function() {
            limpiarFormulario();
        });
    </script>
</body>
</html>