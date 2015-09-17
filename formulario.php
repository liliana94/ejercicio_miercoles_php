

<?php

INCLUDE('Ejercicio_de_eve.php');

if (isset($_GET['nombre'])&& isset($_GET['apellido'])) {

	$nombre = $_GET['nombre'];
	$apellido = $_GET['apellido'];
	$documento = $_GET['documento'];
	$resultado = "bienvenido ". $nombre." " .$apellido ;


 $Grado = $_REQUEST['selectGrado'];

 $arrayprimeroA = array ('danzas','teatro','dibujo');
 $arrayprimeroB = array ('danzas','musica');
 $arrayprimeroC = array ('dibujo','teatro','musica');

 
 $arraysegundoA = array ('teatro','dibujo');
 $arraysegundoB = array ('teatro','musica');

 $arrRecorrer;
 $miSelect ="";
 if ($Grado == 'primero'){
 	 $arrRecorrer = $arrayprimeroA;

 }else if ($Grado == 'segundo'){
 	 $arrRecorrer = $arraysegundoA;
 }else{
 	$arrRecorrer = $arraysegundoA;
 }



 	$resultado .= "<select id='materia' name='materia'>";

 	foreach ($arrRecorrer as $nombre){
 		$resultado .= "<option value =".$nombre." >".$nombre." </option>";

 	}

 	$resultado .= "</select>";
 	echo $resultado;

}
	

 ?>