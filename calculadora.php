<?php
function calcular($numero1, $numero2, $operacion) {
    switch ($operacion) {
        case "suma":
            return $numero1 + $numero2;
        case "resta":
            return $numero1 - $numero2;
        case "multiplicacion":
            return $numero1 * $numero2;
        case "division":
            if ($numero2 == 0) {
                return "Error: no se puede dividir entre cero";
            }
            return $numero1 / $numero2;

        default:
            return "Error: operación no válida";
    }
}
$operacion = $_POST['operacion'];
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

$resultado = calcular($numero1, $numero2, $operacion);

echo $resultado;
?>
