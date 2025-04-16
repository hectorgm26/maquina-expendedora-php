<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Pedido</title>
</head>
<body>
    <form action="../Controller/ControllerCompra.php" method="POST">

        <table border="1" width="50%" height="300px" align="center">

            <thead>
                <tr align="center" style="background-color: black; color: white;"  height="100px">
                    <td align="center" colspan="2">
                    Realizar Pedido
                    </td>
                </tr>
            </thead>

            <tr>
                <td align="center">Seleccione uno o más productos</td>
                <td align="center">
                    <br>
                    <input type="checkbox" name="producto[]" value="1"> Hamburguesa ($2500)<br><br>
                    <input type="checkbox" name="producto[]" value="2"> Pizza ($3000)<br><br>
                    <input type="checkbox" name="producto[]" value="3"> Sushi ($5000)<br><br>
                    <input type="checkbox" name="producto[]" value="4"> Papas Fritas ($2000)<br><br>
                    <input type="checkbox" name="producto[]" value="5"> Pollo Crispi ($7000)<br><br>
                    <input type="checkbox" name="producto[]" value="6"> Fajitas ($3500)<br><br>
                </td>
            </tr>

            <tr>
                <td align="center">Ingrese su saldo</td>
                <td align="center">
                    <input type="number" name="saldo" id="saldo" placeholder="Ingrese su saldo">
                </td>
            </tr>

            <tr>
                <td align="center">Ingrese su forma de pago</td>
                <td align="center">
                    <br>
                    <input type="radio" name="pago" value="efectivo"> Efectivo<br><br>
                    <input type="radio" name="pago" value="tarjeta"> Tarjeta<br><br>
                    <input type="radio" name="pago" value="transferencia"> Transferencia<br><br>
                </td>
            </tr>

            <tr align="center">
                <td colspan="2" align="center">
                    <br>
                    <button type="submit">Confirmar Pedido</button>
                    <br>
                    <br>
                </td>
            </tr>
        </table>

    </form>
</body>
</html>