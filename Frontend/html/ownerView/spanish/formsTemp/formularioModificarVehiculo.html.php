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

  <form action="../../../BackEnd/Gestion de Usuarios/ModificarVehiculo.php" method="post"> 

  <div class="container">
	
	  <h1 class="display-4">Modificando Vehiculos</h1>

	<!-- ####################################################################   -->
	<!-- ######################	    	DATOS		   ######################   -->
	<!-- ####################################################################   -->

	<div class="row"> 
		<div class="col-md-12">

      <br>
			

  <!-- Matricula -->
  <div class="form-group">
	    <input type="text" name="txtMatricula" id="txtMatricula" class="form-control" placeholder="Matricula">
	</div>

    <!-- Datos a Editar -->
    <div class="form-group">
        <select id="txtDato" name="txtDato" class="form-control" placeholder="Dato a Editar">
            <option value="modelo"> Modelo </option>
            <option value="motor"> Motor </option>
            <option value="combustible"> Combustible </option>
            <option value="medida"> Medida </option>
            <option value="situacionActual"> Situacion Actual </option>
            <option value="kilometraje"> Kilometraje </option>
            <option value="categoria"> Categoria </option>
        </select>
    </div>

  <!-- Campo de texto  -->
  <div class="form-group">
    <input type="text" name="txtNuevo" id="txtNuevo" class="form-control" placeholder="Nuevo Dato">
	</div>

	<!-- Boton -->
	<div>
		<input type="submit" class="btn btn-primary"> </button>	
	</div>


</form>

</body>

</script>
</html>