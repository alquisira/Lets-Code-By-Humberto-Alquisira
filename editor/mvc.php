<?php 
session_start();
$targetget=isset($_GET['targetget']) ? $_GET['targetget'] : "";
$target=isset($_POST['target']) ? $_POST['target'] : "";

require("config.php");


if($targetget=="salir"){
	$_SESSION['pswdcode']=null;
	header('Location: index.php');
}


if($target=="save"){
$guardafile="../".$ruta.$_POST['ruta'];
$texto=$_POST['texto'];




$file = fopen($guardafile, "w");
fwrite($file, $texto . PHP_EOL);
fclose($file);

echo $texto;

}


?>