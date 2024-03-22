<?php
$calificaciones = [];
$num_elementos = rand(1, 1000);
for ($i = 0; $i < $num_elementos; $i++) {
    $calificaciones[] = rand(0, 10);
}
$promedio = round(array_sum($calificaciones) / count($calificaciones), 2);
$alumnos_aprobados = array_filter($calificaciones, function ($calificacion) use ($promedio) {
    return $calificacion >= $promedio;
});
$cantidad_aprobados = count($alumnos_aprobados);
$cantidad_reprobados = count($calificaciones) - $cantidad_aprobados;
$porcentaje_reprobados = ($cantidad_reprobados / count($calificaciones)) * 100;
$porcentaje_aprobados = 100 - $porcentaje_reprobados;


$desviacion_estandar = round(sqrt(array_sum(array_map(function ($x) use ($promedio) {
    return pow($x - $promedio, 2);
}, $calificaciones)) / count($calificaciones)), 2);


echo "<table border='1' cellpadding='5'>";
$counter = 0;
foreach ($calificaciones as $calificacion) {
    if ($counter % 30 == 0) {
        echo "<tr>";
    }
    echo "<td>$calificacion</td>";
    $counter++;
    if ($counter % 30 == 0) {
        echo "</tr>";
    }
}

echo "</table>";
echo "<p>Promedio: $promedio</p>";
echo "<p>Cantidad de alumnos aprobados: $cantidad_aprobados ($porcentaje_aprobados%)</p>";
echo "<p>Cantidad de alumnos reprobados: $cantidad_reprobados ($porcentaje_reprobados%)</p>";
echo "<p>Desviación estándar: $desviacion_estandar</p>";
echo "holA"
?>
