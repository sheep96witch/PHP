<html>
<h1>2765.Sumando dos conjuntos</h1>

<style>
      h1{

    font-weight: normal; font-weight: normal; font-weight: normal; font-weight: normal;/* Hacer que el título no esté en negrita */
      }
      body {
            background-color: white; /* Color de fondo de la página */
            font-family: Arial, sans-serif; /* Fuente del texto */
        margin-left: 400px; /* Mover el contenido hacia arriba */
           
             /* Mueve el contenido hacia arriba */
            
        }
     .SumandodosConjunros{
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
<table border="1" cellspacing="3" cellpading="3" class="ejemplos">
<tr>
<td><strong>puntos</strong></td><td>9.96</td><strong>
<td>Limite de memoria</td></strong><td>32<br>MiB</td>
</tr>
<tr>
<td><strong>Limite de tiempo (caso)</strong></td><td>1s</td>
<td><strong>Limite de tiempo (total)</strong></td><td>1m0s</td>
<tr>
<td><strong>tamaño limite de entrada (bytes)</strong></td><td>10<br>KiB</td>
</tr>
</table>
<h1>Descripcion</h1>
<h4>Dados dos conjuntos de enteros de tamaño N,
    imprimir el resultado de sumarlos. 1<=N<=100. Por ejemplo, sea N=4:

2 3 4 5

6 7 1 3

El resultado de sumarlos es:

8 10 5 8</h4>
<h1>Entrada</h1>
<h4>En la primera línea el entero N. En la segunda línea, 
    separados por un espacio, los números del primer conjunto. 
    En la tercera línea también separados por un espacio, 
    los números del segundo conjunto.</h4>
    <h1>Salida</h1>
    <h4>Los números resultantes de sumar ambos conjuntos, 
        separados por un espacio.</h4>
        <h1>Ejemplos</h1>  
        <h2>Entrada <span> salida </span> Descripcion</h2>
    <table class="numeros" border="1" cellspacing="3" cellspading="3" >
     <tr>
    <td>4<br>2 3 4 5<br>6 7 1 3</td><td>8 10 5 8</td><td>2+6, 3+7, 4+1, 5+3.</td>
</tr>
</table>




<!DOCTYPE html> <!-- Inicia el documento HTML -->
<html lang="es"> <!-- Especifica el idioma de la página -->
<head>
<meta charset="UTF-8"> <!-- Especifica la codificación de caracteres -->
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Establece la configuración de la vista en dispositivos móviles -->
<title>Suma de Conjuntos</title> <!-- Establece el título de la página -->
</head>
<body>
<h2>Suma de Conjuntos</h2> <!-- Encabezado -->

<!-- Formulario para ingresar los conjuntos -->
<form method="post" action="">
  <label for="conjunto1">Conjunto 1:</label> <!-- Etiqueta para el primer conjunto -->
  <input type="text" id="conjunto1" name="conjunto1" placeholder="Ej. 2 3 4 5"><br><br> <!-- Campo de entrada para el primer conjunto -->

  <label for="conjunto2">Conjunto 2:</label> <!-- Etiqueta para el segundo conjunto -->
  <input type="text" id="conjunto2" name="conjunto2" placeholder="Ej. 6 7 1 3"><br><br> <!-- Campo de entrada para el segundo conjunto -->

  <!-- Botón para enviar el formulario -->
  <button type="submit" name="sumar">Sumar Conjuntos</button> <!-- Botón de envío -->
</form>

<?php
// Verificar si se ha enviado el formulario
if (isset($_POST['sumar'])) { // Comprueba si el formulario se ha enviado
    // Obtener los conjuntos ingresados por el usuario y convertirlos en arrays de números enteros
    $conjunto1 = array_map('intval', explode(' ', trim($_POST['conjunto1']))); // Obtiene y convierte el primer conjunto
    $conjunto2 = array_map('intval', explode(' ', trim($_POST['conjunto2']))); // Obtiene y convierte el segundo conjunto

    // Verificar que los conjuntos tengan la misma cantidad de elementos
    if (count($conjunto1) !== count($conjunto2)) { // Comprueba si los conjuntos tienen la misma cantidad de elementos
        // Mostrar un mensaje de error si los conjuntos tienen diferente cantidad de elementos
        echo "<p>Los conjuntos deben tener la misma cantidad de elementos.</p>"; // Muestra un mensaje de error
    } else {
        // Sumar los elementos correspondientes de ambos conjuntos
        $resultado = array(); // Inicializa un array para almacenar los resultados de la suma
        for ($i = 0; $i < count($conjunto1); $i++) { // Itera sobre los elementos de los conjuntos
            $resultado[] = $conjunto1[$i] + $conjunto2[$i]; // Realiza la suma de los elementos y los agrega al array de resultados
        }

        // Mostrar el resultado
        echo "<p>Resultado: " . implode(" ", $resultado) . "</p>"; // Muestra el resultado de la suma
    }
}
?>

</body>
</html>
