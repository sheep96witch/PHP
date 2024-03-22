<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
      
   <style>
      /* Estilos CSS para la página */
      body {
            background-color: white; /* Color de fondo de la página */
            font-family: Arial, sans-serif; /* Fuente del texto */
            margin-left: 400px; /* Mover el contenido hacia arriba */
            margin: 550px; 
            margin-top: 200px; /* Mueve el contenido hacia arriba */
            
        }
        
        h1 {
            font-weight: normal;/* Hacer que el título no esté en negrita */
            margin-left: 220px;  
        }
        table {
            width: 90%; /* Establece el ancho de la tabla al 80% del contenedor */
            border-collapse: collapse; /* Combina los bordes de la tabla */
        }

        th, td{
            padding: 10px; /* Añade un espacio alrededor del contenido de las celdas */
            border: 1px solid #ddd; /* Añade bordes a las celdas */
           
        }
        
        .contenido{
            margin-right: 50px 20px 10px;
        }
        .texto-cursiva {
        font-family: cursive, sans-serif; /* Utiliza la fuente cursiva "cursive", y si no está disponible, utiliza una fuente sans-serif como respaldo */
        opacity: 0.5; /* Hace que el texto sea semi transparente */
    }
    .numeros{
        width: 15%;
        background-color:  #f2f2f2;
    }
    
        </style>
      
        
</head>
<body>

 <table border="1" cellspacing="0"cellpading="3" class="5630.Colegiatura">
  <tr>
    <div class="titulo">
  <h1>5630.Colegiatura</h1>
    </div>
    <ul id="menu">
     <tr>
     
        <td><strong>puntos</strong></td><td>11.64</td><td><strong>Límite de memoria</strong></td><td> 32<br>MiB</td>
         </tr>
         <tr>
             <td><strong>Límite de tiempo (caso)</strong></td><td>1 s</td><td><strong>Límite de tiempo<br>(total)</strong></td><td> 32<br>MiB</td>
         </tr>
         <tr>

         <td><strong>Tamaño límite de entrada<br>(bytes)</strong></td><td>10<br>KiB</td>
         </tr>
         <tr>
    
        </tr>
    </ul>
</table>
<div class="contenido">
<h2>Descripción</h2>
   <td>La mamá de Esteban quiere inscribirlo en la mejor preparatoria 
       de Cuernavaca, pero le preocupa cuánto vaya a<br> pagar, y te pide 
       ayuda para que hagas un programa que le diga cuánto tenga que pagar.
       El esquema que maneja<br> la prepa es este:</td>
<div class="pagos">
<?php
// Texto que deseas imprimir
$texto = "Plan de pagos:";

// Imprime el texto utilizando la clase CSS 'texto-cursiva'
echo '<p class="texto-cursiva">' . $texto . '</p>';
?>
   <td class="plan-pagos">• La colegiatura de los alumnos se determina según el
     número de materias que cursan. El costo de cada<br> una de las materias es de $1600.<br>
     •Se ha establecido un programa para estimular a los alumnos, el cual consiste en 
       o siguiente: si el promedio obtenido por un alumno en el último periodo es mayor 
       o igual que 9, se le hará un descuento del 30% sobre la colegiatura y no se le cobrará
        IVA; si el promedio obtenido es menor que 9 deberá pagar la colegiatura completa, 
        más el IVA del 16%.</td>
        <tr>
        <h2>Entrada</h2>
        <td>El numero de materias <strong>A</strong>
 que Esteban va a cursar. Y un numero con decimales  <strong>B</strong>
 que es el promedio de Esteban.</td>
</tr>
<tr>
        <h2>Salida</h2>
        <td>Un numero entero <strong>C</strong>
 con el precio a pagar. Debe de ir con un $.</td>
</tr>
<tr>
  <h2> Ejemplo</h2>
  <td><h4>Entrada<span> Salida</span> </h4></td>
  </tr>
  <table border="2" callspacing="0" callpading="2" class="numeros">
  <tr>
  
  <div class="numeros">
  <td>5<br>9.6 </td><td>$5600</td>
</tr>
<tr>
  <td>8<br>7.8</td><td>$14848</td>
  </tr>
  <tr>
  <td>2<br>8</td><td>$</td>
  </tr>
</table>
<tr>
  <h2>Límites</h2>
  <td> • 1 < <strong> A </strong>< 20</td><br>
  <td> • 0 < <strong> B </strong>< 11</td>
  </tr>
  <h2> la vaca lola la vac lola tiene cabeza y tiene cola la vac lola la vaca </h2 
    </div>
    </div>
    </div>
    </div>
</body>
</html>