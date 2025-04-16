<?php

$faltan = "";
$noFaltan = "";
$total = 0;

if (empty($_POST['producto'])) {
    $faltan .= "USTED NO SELECCIONO UN PRODUCTO.<br>";
} else {

    $productosSeleccionados = array(
        "1" => "Hamburguesa",
        "2" => "Pizza",
        "3" => "Sushi",
        "4" => "Papas Fritas",
        "5" => "Pollo Crispi",
        "6" => "Fajitas"
    );

    $productos = $_POST['producto'];

    $noFaltan .= "Productos Seleccionados: <br>";
    foreach ($productos as $producto) {
        $noFaltan .= "<ul>" . $productosSeleccionados[$producto] . "</ul>";
    }

    $preciosProductos = array(
        "1" => 2500,
        "2" => 3000,
        "3" => 5000,
        "4" => 2000,
        "5" => 7000,
        "6" => 3500
    );

    foreach ($productos as $producto) {
        $total += $preciosProductos[$producto];
    }

    $noFaltan .= "Total a Pagar: $" . $total . "<br>";
}

$saldo = 0; # Se inicializa la variable saldo en 0 para evitar errores de undefined variable
if (empty($_POST['saldo'])) {
    $faltan .= "USTED NO INGRESO SU SALDO.<br>";
} else {

    if (!is_numeric(($_POST['saldo']))) {
        $faltan .= "USTED INGRESO UN SALDO INVALIDO.<br>";
    } else {
        $saldo = $_POST['saldo'];
        $noFaltan .= "Saldo ingresado: $" . $saldo . "<br>";
    }

    if (!empty($_POST['producto'])) { # Verifica si efectivamente se seleccionó un producto antes de realizar la validación del saldo
        if ($saldo >= $total) {
            echo "<strong>Compra Realizada con éxito!</strong><br>";
            echo "Su vuelto es de: $" . ($saldo - $total) . "<br>";
        } else {
            echo "<strong>SALDO INSUFICIENTE!</strong><br>";
            echo "Su saldo es de: $" . $saldo . " y el total a pagar es de: $" . $total . "<br>";
        }
    }
}

if (empty($_POST['pago'])) {
    $faltan .= "USTED NO SELECCIONO UN METODO DE PAGO.<br>";
} else {
    $formaPago = $_POST['pago'];
    $noFaltan .= "Forma de pago seleccionada: " . $formaPago . "<br>";
}


if ($faltan !="") {
    echo "<br><strong>DATOS INCOMPLETOS: </strong><br>";
    echo $faltan;
}

if ($noFaltan!="") {
    echo "<br><strong>Datos del Pedido confirmados</strong><br><br>";
    echo $noFaltan;
}

?>