<?php include '../../../BackEnd/Gestion de Usuarios/verificarpermisos4.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Vehículo</title>
</head>

<body>

<a href="Formularios.html.php"> Volver</a>

    <h1>Alta de Vehículo</h1>
    <form action="../../../BackEnd/Gestion de Usuarios/AltaVehiculo.php" method="POST">
        <label for="txtMatricula">Matrícula:</label>
        <input type="text" id="txtMatricula" name="txtMatricula" required><br><br>

        <label for="txtModelo">Modelo:</label>
        <input type="text" id="txtModelo" name="txtModelo" required><br><br>

        <label for="txtMotor">Motor:</label>
        <input type="text" id="txtMotor" name="txtMotor" required><br><br>

        <label for="txtCombustible">Combustible:</label>
        <input type="text" id="txtCombustible" name="txtCombustible" required><br><br>

        <label for="txtMedida">Medida:</label>
        <input type="text" id="txtMedida" name="txtMedida" required><br><br>

        <label for="txtSituacionActual">Situación Actual:</label>
        <input type="text" id="txtSituacionActual" name="txtSituacionActual" required><br><br>

        <label for="txtKilometraje">Kilometraje:</label>
        <input type="number" id="txtKilometraje" name="txtKilometraje" required><br><br>

        <label for="txtCategoria">Categoría:</label>
        <input type="text" id="txtCategoria" name="txtCategoria" required><br><br>

        <input type="submit" value="Registrar Vehículo">
    </form>
</body>

</html>