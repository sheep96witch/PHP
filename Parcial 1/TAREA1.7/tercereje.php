<!DOCTYPE html>
<html>
<body>
<div class="margen"></div>
    <link rel="stylesheet" href="estilo.css">
<link rel="stylesheet" href="estilo.css">


<h1 class="titulounu">7093. El lado más corto</h1>
<table class="tableuwu" cellspacing="3" cellpadding="3">
<td><strong>Puntos</strong></td><td>8.69</td>
<td><strong>Límite de memoria</strong></td><td>32<br>MiB</td>
</tr>
<tr>
<td><strong>Límite de tiempo (caso)</strong></td><td>1s</td>
<td><strong>Límite de tiempo <br>(total)</strong></td><td>1m0s</td>
</tr>
<tr>
<td><strong>TAmaño de entrada (bytes)</strong></td><td>10<br>KiB</td>
</tr>
</table>
<h2>Descripción</h2>
<p>Escribe un programa que, dadas las coordenadas de los vértices 
    de un cuadrilátero, calcule la longitud de su lado más corto.</p>
<img src="imagenes/imagenmate.png" alt=".">

<h2>Entrada</h2>
<p>Ocho reales x1, y1, x2, y2, x3, y3, x4, y4. Puedes suponer que 
   0 ≤  x1, y1 ≤ 100 y que los vértices se listan ordenados en el 
   sentido de las manecillas del reloj.</p>
    
   <h2>Salida</h2>
   <p>Un real que sea la longitud del lado más corto del cuadrilátero. 
    Tu programa se considerará correcto si el valor calculado es 
    razonablemente cercano a la respuesta exacta.</p>
    
    <h2>Ejemplo</h2>
    <h2>Entrada Salida</h2>
    <table class="tableuwu" cellspading="3" cellpadding="3">
    <td>10.1 10.2<br>20.2 10.3<br>22.3 4.1<br>7.5 0.9</td>
    <td>6.545991</td>

    </table>

    <?php
    if(isset($_POST['NumX1']) && isset($_POST['NumY1']) && isset($_POST['NumX2']) && isset($_POST['NumY2']) && isset($_POST['NumX3']) && isset($_POST['NumY3']) && isset($_POST['NumX4']) && isset($_POST['NumY4'])) {
        $numX1 = $_POST['NumX1'];
        $numY1 = $_POST['NumY1'];
        $numX2 = $_POST['NumX2'];
        $numY2 = $_POST['NumY2'];
        $numX3 = $_POST['NumX3'];
        $numY3 = $_POST['NumY3'];
        $numX4 = $_POST['NumX4'];
        $numY4 = $_POST['NumY4'];

        // Calcula la longitud de cada lado
        $lado1 = sqrt(pow($numX2 - $numX1, 2) + pow($numY2 - $numY1, 2));
        $lado2 = sqrt(pow($numX3 - $numX2, 2) + pow($numY3 - $numY2, 2));
        $lado3 = sqrt(pow($numX4 - $numX3, 2) + pow($numY4 - $numY3, 2));
        $lado4 = sqrt(pow($numX1 - $numX4, 2) + pow($numY1 - $numY4, 2));

        // Encuentra el lado más corto
        $lado_mas_corto = min($lado1, $lado2, $lado3, $lado4);

        echo "Longitud del lado más corto: " . round($lado_mas_corto, 6);
    }
    ?>

    <form method="post">
        <label for="NumX1">X1:</label>
        <input type="text" id="NumX1" name="NumX1" pattern="[0-9]+(\.[0-9]+)?" title="Número decimal" required>
        <label for="NumY1">Y1:</label>
        <input type="text" id="NumY1" name="NumY1" pattern="[0-9]+(\.[0-9]+)?" title="Número decimal" required><br>

        <label for="NumX2">X2:</label>
        <input type="text" id="NumX2" name="NumX2" pattern="[0-9]+(\.[0-9]+)?" title="Número decimal" required>
        <label for="NumY2">Y2:</label>
        <input type="text" id="NumY2" name="NumY2" pattern="[0-9]+(\.[0-9]+)?" title="Número decimal" required><br>

        <label for="NumX3">X3:</label>
        <input type="text" id="NumX3" name="NumX3" pattern="[0-9]+(\.[0-9]+)?" title="Número decimal" required>
        <label for="NumY3">Y3:</label>
        <input type="text" id="NumY3" name="NumY3" pattern="[0-9]+(\.[0-9]+)?" title="Número decimal" required><br>

        <label for="NumX4">X4:</label>
        <input type="text" id="NumX4" name="NumX4" pattern="[0-9]+(\.[0-9]+)?" title="Número decimal" required>
        <label for="NumY4">Y4:</label>
        <input type="text" id="NumY4" name="NumY4" pattern="[0-9]+(\.[0-9]+)?" title="Número decimal" required><br>

        <button type="submit">Calcular lado más corto</button>
    </form>
</body>
</html>