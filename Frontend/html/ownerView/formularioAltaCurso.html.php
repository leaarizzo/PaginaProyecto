<?php include '../../../BackEnd/Gestion de Usuarios/verificarpermisos4.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Curso</title>
</head>
<body>

<a href="Formularios.html.php"> Volver</a>

    <h1>Alta de Curso</h1>
    <form action="../../../BackEnd/Gestion de Usuarios/AltaCurso.php" method="POST">

        <label for="documentoAlumno">Documento del Alumno:</label>
        <input type="number" id="txtDocumentoAlumno" name="txtDocumentoAlumno" required><br><br>
        
        <label for="documentoInstructor">Documento del Instructor:</label>
        <input type="number" id="txtDocumentoInstructor" name="txtDocumentoInstructor" required><br><br>
                
        <label for="matricula">Matrícula:</label>
        <input type="number" id="txtMatricula" name="txtMatricula" required><br><br>

        <label for="precio">Precio:</label>
        <input type="number" id="txtPrecio" name="txtPrecio"><br><br>
        
        <label for="hora">Hora:</label>
        <input type="time" id="txtHora" name="txtHora" required><br><br>
        
        <label for="fecha">Fecha:</label>
        <input type="date" id="txtFecha" name="txtFecha" required><br><br>
        
        <label for="tipoLibreta">Tipo de Libreta:</label>
        <input type="text" id="txtTipoLibreta" name="txtTipoLibreta" required><br><br>
        
        <label for="resultado">Resultado </label>
        <input type="text" id="txtResultado" name="txtResultado" required><br><br>
         
        <label for="tipo">Tipo de Curso:</label>
        <select name="txtOpcion" id="txtOpcion">
            <option value="clase">Clase</option>
            <option value="prueba">Prueba</option>

        </select><br><br>

        <input type="submit" value="Registrar Curso">
    </form>
</body>
</html>