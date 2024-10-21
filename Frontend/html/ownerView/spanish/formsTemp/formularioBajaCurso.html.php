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

  <form action="../../../BackEnd/Gestion de Usuarios/BajaCurso.php" method="post"> 

  <div class="container">
	
	  <h1 class="display-4">Eliminando Cursos</h1>

	<!-- ####################################################################   -->
	<!-- ######################	    	DATOS		   ######################   -->
	<!-- ####################################################################   -->

	<div class="row"> 
		<div class="col-md-12">

      <br>
			
	
      <div class="form-group">
        <select id="txtOpcion" name="txtOpcion" class="form-control"> 
          <option value="baja"> Baja </option> 
          <option value="reactivar"> Reactivar </option>
        </select>
      </div>

  <!-- Codigo -->
  <div class="form-group">
	    <input type="text" name="txtCodigo" id="txtCodigo" class="form-control" placeholder="Codigo">
	</div>

	<!-- Boton -->
	<div>
		<input type="submit" class="btn btn-primary"> </button>	
	</div>


</form>

</body>

</script>
</html>