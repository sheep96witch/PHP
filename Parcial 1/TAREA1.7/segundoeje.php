<!DOCTYPE html>
<html lang="es">
<body>
    <div class="margen"></div>
    <meta charset="UTF-8"> <!--define la codificacion de caracteres-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="estilo.css">

<h1 class="titulounu">18710. Formulota</h1>  


<table  class="tableuwu" cellspacing="3" cellpadding="3">

<tr>
<td><strong>Puntos</strong></td><td>17.07</td>
<td><strong>Limite de memoria</strong></td><td>32 MiB</td>
</tr>
<td><strong>Limite de tiempo (caso)</strong></td><td>1s</td>
<td>Limite de tiempo (total)</td><td>1m0s</td>
<td>Tamaño de (bytes)</td><td>10 kiB</td>
</table>

<h2>Descripción</h2>
<p> Diseñar un programa que pregunte los valores de las variables<mi>x</mi><mo>,</mo><mi>y</mi><mo>,</mo><mi>z</mi><mi>y </mi></math>
    evalue la función f(x,y,z).</p>

<math xmlns="http://www.w3.org/1998/Math/MathML" display="block">

      <!-- Inicio de la etiqueta math para la fórmula en MathML -->
    
    <mrow> <!-- Inicio de una fila -->
        <msub> <!-- Subíndice -->
            <mi>f</mi> <!-- La función f -->
            <mrow> <!-- Fila para los subíndices x, y, z -->
                <mi>x</mi> <!-- Subíndice x -->
                <mo>,</mo> <!-- Coma entre subíndices -->
                <mi>y</mi> <!-- Subíndice y -->
                <mo>,</mo> <!-- Coma entre subíndices -->
                <mi>z</mi> <!-- Subíndice z -->
            </mrow>
        </msub>
        <mo>=</mo> <!-- Signo de igual -->
        <mfrac> <!-- Fracción -->
            <mrow> <!-- Numerador -->
                <msub> <!-- Subíndice -->
                    <mi>x</mi> <!-- Subíndice x -->
                    <mrow> <!-- Fila para el subíndice x^3 + y^3 -->
                        <mi>x</mi> <!-- Subíndice x -->
                        <mo>+</mo> <!-- Signo de suma -->
                        <mi>y</mi> <!-- Subíndice y -->
                    </mrow>
                </msub>
                <mo>+</mo> <!-- Signo de suma -->
                <msub> <!-- Subíndice -->
                    <mi>x</mi> <!-- Subíndice x -->
                    <mrow> <!-- Fila para el subíndice x^3 -->
                        <mn>3</mn> <!-- 3 como exponente -->
                    </mrow>
                </msub>
                <mo>+</mo> <!-- Signo de suma -->
                <msub> <!-- Subíndice -->
                    <mi>y</mi> <!-- Subíndice y -->
                    <mrow> <!-- Fila para el subíndice y^3 -->
                        <mn>3</mn> <!-- 3 como exponente -->
                    </mrow>
                </msub>
            </mrow>
            <mrow> <!-- Denominador -->
                <msub> <!-- Subíndice -->
                    <mi>x</mi> <!-- Subíndice x -->
                    <mrow> <!-- Fila para el subíndice x^2 -->
                        <mn>2</mn> <!-- 2 como exponente -->
                    </mrow>
                </msub>
                <mo>+</mo> <!-- Signo de suma -->
                <msub> <!-- Subíndice -->
                    <mi>y</mi> <!-- Subíndice y -->
                    <mrow> <!-- Fila para el subíndice y^2 -->
                        <mn>2</mn> <!-- 2 como exponente -->
                    </mrow>
                </msub>
                <mo>+</mo> <!-- Signo de suma -->
                <msub> <!-- Subíndice -->
                    <mi>z</mi> <!-- Subíndice z -->
                    <mrow> <!-- Fila para el subíndice z^2 -->
                        <mn>2</mn> <!-- 2 como exponente -->
                    </mrow>
                </msub>
            </mrow>
        </mfrac>
    </mrow>
</math> <!-- Fin de la etiqueta math -->

<h2>Entrada</h2>
<p>El programa pedirá tres números, uno por renglón, estos
     podrán ser positivos, negativos o cero, y pudieran tener
     decimales.</p>
<h2>Salida</h2>
<p>La respuesta, o salida a la consola, será el valor de 
    la función f(x,y,z) redondeado a 6 decimales.

    Nota: Se puede usar la función tofixed(numero,decimales)
    para ajustar la salida.</p>

    <h2>Ejemplos</h2>

    <h2>Entrada Salida Descripción</h2>
    <table class="tableuwu" celspacing="3" cellspadding="3">
    <tr>
    <td>1<br>2<br>3</td><td>0.235714</td><td>0.235714285714286</td>
</tr>
<tr>
    <td>4<br>5<br>5</td><td>0.074477</td><td>0.0744773519163764</td>
</tr>
<tr>
    <td>7<br>8<br>9</td><td>0.044525</td><td>0.0445247435713634</td>
</tr>

    </table>

    <?php
    if($_POST and $_POST and $_POST)
    {
        $numX=$_POST['NumX'];
        $numY=$_POST['NumY'];
        $numZ=$_POST['NumZ'];
        $funcion=((($numX+$numY)/(2*$numX)) + ((pow($numX,3)+pow($numY,3))/(pow($numX,2)+pow($numY,2))))/(pow($numX,2)+pow($numY,2)+pow($numZ,2));
        echo "Datos dados: " . $numX . ", " . $numY . ", " . $numZ . "<br>";
        echo "Resultado: " .round($funcion,6);
    }

?>
<form method="post" onsubmit="return validateForm()">
        <label for="NumX">X:</label>
        <input type="text" id="NumX" name="NumX" pattern="[+-]?\d*\.?\d+" title="Número decimal" required><br>

        <label for="NumY">Y:</label>
        <input type="text" id="NumY" name="NumY" pattern="[+-]?\d*\.?\d+" title="Número decimal" required><br>

        <label for="NumZ">Z:</label>
        <input type="text" id="NumZ" name="NumZ" pattern="[+-]?\d*\.?\d+" title="Número decimal" required><br>

        <button type="submit">Calcular</button>
    </form>
    <script>
        function validateForm() {
            var numX = document.getElementById("NumX").value;
            var numY = document.getElementById("NumY").value;
            var numZ = document.getElementById("NumZ").value;

            if (!/^[-+]?\d*\.?\d+$/.test(numX) || !/^[-+]?\d*\.?\d+$/.test(numY) || !/^[-+]?\d*\.?\d+$/.test(numZ)) {
                alert("Por favor, ingrese números válidos en los campos.");
                return false;
            }

            return true;
        }
    </script>


</body>
</html>

</body>
</html>