<?php include '../../../BackEnd/Gestion de Usuarios/verificarpermisos4.php'; ?>

<!DOCTYPE html>
<html>
  <head>
  
    <title> Html Prueba</title>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>

  <body>
  <a href="Formularios.html.php"> Volver</a>
  <form action="../../../BackEnd/Gestion de Usuarios/ModificarCurso.php" method="post"> 

  <div class="container">
	
	  <h1 class="display-4">Modificando Cursos</h1>

	<!-- ####################################################################   -->
	<!-- ######################	    	DATOS		   ######################   -->
	<!-- ####################################################################   -->

	<div class="row"> 
		<div class="col-md-12">
      <br>



  <!-- Codigo -->
  <div class="form-group">
	    <input type="text" name="txtCodigo" id="txtCodigo" class="form-control" placeholder="Codigo">
	</div>

    <!-- Datos a Editar -->
    <div class="form-group">
        <select id="txtDato" name="txtDato" class="form-control" placeholder="Dato a Editar">
            <option value = "documentoInstructor"> Documento Instructor </option>
            <option value = "documentoAlumno"> Documento Alumno </option>
            <option value = "matricula"> Matricula </option>
            <option value = "hora"> Hora </option>
            <option value = "fecha"> Fecha </option>
            <option value = "tipoLibreta"> Tipo Libreta </option>
            <option value = "estado"> Estado </option>
            <option value = "precio"> Precio </option>
            <option value = "resultado"> Resultado </option>
            <option value = "tipo"> Tipo </option>
        </select>
    </div>

  <!-- Campo de texto  -->
  <div class="form-group">
    <input type="text" name="txtNuevo" id="txtNuevo" class="form-control" placeholder="Nuevo Dato">
	</div>

<!-- Tipo -->
<div class="form-group">
    <select id="txtTipo" name="txtTipo" class="form-control" placeholder="Tipo">
        <option value = "clase"> Clase </option>
        <option value = "prueba"> Prueba </option>
    </select>

	<!-- Boton -->
	<div>
		<input type="submit" class="btn btn-primary"> </button>	
	</div>


</form>

</body>

</script>
</html>