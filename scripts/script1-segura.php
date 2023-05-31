<?php
/**
 * Descripción del script:
 * Este script contiene dos funciones para realizar operaciones de suma y resta.
 * Autor/a:Marina Segura
 * Versión: 1.5.3
 *
 * Etiquetas:
 * @category Scripts
 * @license  MIT
 */

/**
 * Función para sumar dos números.
 *
 * @param float $num1 El primer número.
 * @param float $num2 El segundo número.
 * @return float El resultado de la suma.
 *
 * Etiquetas:
 * @parametro
 * @resultado
 * @version 1.0.0
 */
function sumar($num1, $num2) {
    $resultado = $num1 + $num2;
    return $resultado;
}

/**
 * Función para restar dos números.
 *
 * @param float $num1 El primer número.
 * @param float $num2 El segundo número.
 * @return float El resultado de la resta.
 *
 * Etiquetas:
 * @parametro
 * @resultado
 * @version 1.0.0
 */
function restar($num1, $num2) {
    $resultado = $num1 - $num2;
    return $resultado;
}

// Ejemplo de uso de las funciones:
$numero1 = 10;
$numero2 = 5;

$resultadoSuma = sumar($numero1, $numero2);
echo "La suma de $numero1 y $numero2 es: $resultadoSuma<br>";

$resultadoResta = restar($numero1, $numero2);
echo "La resta de $numero1 y $numero2 es: $resultadoResta<br>";
?>
