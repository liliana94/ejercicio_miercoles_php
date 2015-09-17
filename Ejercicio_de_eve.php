<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Ejercicio</title>
	<script src="js/jquery-1.11.3.js"></script>
	
</head>
<body>
<tr>

<h1> ¡¡Bienvenido </h1>
<h1> ¡Ingrese los datos del alumno</h1>

<br>
<form  method="GET" action="formulario.php" >
nombre <input type ="text" name="nombre" />
apellido <input type ="text" name="apellido"/ >
documento <input type ="text" name="documento"/ >


<input type="submit">

</br>


<br>
<form  method="GET" action="formulario.php" >
		<strong>Selecciona un grado: </strong>
		<select id="selectGrado" name="selectGrado">
			<option value="">Seleccione</option>
			<option value="primero">primero</option>
			<option value="segundo">segundo</option>

<div id="resultado"></div>
		</select>			
</br>

<br>
<form  method="GET" action="formulario.php" >
		<strong>Selecciona una opcion: </strong>
		<select id="select" name="select">
			<option value="Seleccione">Seleccione</option>
			<option value="a">a</option>
			<option value="b">b</option>
			<option value="c">c</option>
			 
		</select>
</br>

<br>
</form>
<strong>valor base: </strong>

</br>	


<script>
		//Funci
		$("#selectGrado").change(function() {
			var gradoVal = $("#selectGrado").val();
			$.ajax({
				method: "GET",
				url: "procesarAjax.php",
				data: { grado: gradoVal}
			})
			.done(function( msg ) {
				$("#resultado").html(msg);
			});
		});
	</script>


</form>
</tr>

</form>
</tr>

</body>
</html>
