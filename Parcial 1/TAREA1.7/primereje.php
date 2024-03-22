<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<div class="margen"></div>

<div  class="tableuwu"></div>

<h1 class="titulounu">7050. Cálculos condicionales</h1>
<table cellspacing="3" cellspadding="3" class="tableuwu">
<tr>
<td><strong>Puntos</strong></td><td>8.5</td>
<td><strong>Límite de memoria</strong></td><td>32<br>MiB</td>
</tr>
<tr>
<td><strong>Límite de tiempo (caso)</strong></td><td>1s</td>
<td><strong>Límite de tiempo (total)</strong></td><td>1m0s</td>
</tr>
<tr>
 <td><strong>Tamaño límite de entrada de (bytes)</strong></td>
 <td>10<br>KiB</td>
</table>
</div>

<h2>Descripción</h2>
<p>Eres muy bueno evaluando fórmulas y realizando cálculos directos, pero te
   cuesta trabajo decidir en qué situaciones se deben hacer qué operaciones.
   Un compañero te sugirió un ejercicio de cálculo mental que consiste en, 
   dado un número inicial N, realizar las siguientes operaciones en el orden 
   indicado y con aritmética entera:
    
    Si el valor actual de N es par, divídelo entre 2. En caso contrario, súmale 1.
    Si el valor actual de N tiene tres o más cifras, divídelo entre 100.
    Pero si tiene exactamente dos cifras, divídelo entre 10.
    Si el valor actual de N es un múltiplo de tres, réstale uno.
    Escribe un programa que te ayude a calcular el valor final de 
    N y el número de veces que N fue modificado.
</p>

<h2>Entrada</h2>
<p>Un entero N. Puedes suponer que 1 < N < 1000.</p>
<h2>Salida</h2>
<p>Dos enteros que correspondan con el valor final de 
    y el número de veces que 
    fue modificado respectivamente.</p> 
<h2 class="ejemplo">Ejemplo</h2>
<h2>entrada <span> Salida</span></h2>
<table cellspacing="3" cellspading="3" class="ejemplo">
<td>7</td><td>8 1</td>
</table>
<?php
    if($_POST)
    {
       $NumN=$_POST['NumN'];
       echo "Numero dado: " . $NumN . "<br>";
       $Num_Cadena=(string)$NumN;
       $cifras=strlen($Num_Cadena);
       $cont=0;
       #SI es par
       if($NumN%2==0)
       {
        $NumN=$NumN/2;
        $cont++;
        if($cifras>=3)
        {
            $NumN=$NumN/100;
            $cont++;
            if($NumN%3==0)
            {
                $NumN--;
                $cont++;
            }
        }
        elseif($cifras==2)
        {
            $NumN=$NumN/10;
            $cont++;
            if($NumN%3==0)
            {
                $NumN--;
                $cont++;
            }
        }
       }

       #SI es impar
       else
       {
        $NumN++;
        $cont++;
        if($cifras>=3)
        {
            $NumN=$NumN/100;
            $cont++;
            if($NumN%3==0)
            {
                $NumN--;
                $cont++;
            }
        }
        elseif($cifras==2)
        {
            $NumN=$NumN/10;
            $cont++;
            if($NumN%3==0)
            {
                $NumN--;
                $cont++;
            }
        }
       }
       #Resultados
       if($cont==1)
       {
            echo $NumN . " " .$cont;
       }
       elseif($cont==2)
       {
            echo $NumN . " " .$cont;
       }
       elseif($cont==3)
       {
            echo $NumN . " " .$cont;
       }
       else
       {
            echo $NumN .  " " .$cont;
       }
       
    }
?>


<form method="post">
    <label for="NumN">Ingrese un número N:</label>
    <input type="number" id="NumN" name="NumN" min="2" max="999" required>
    <button type="submit">Calcular</button>
</form>
</body>
</html>
