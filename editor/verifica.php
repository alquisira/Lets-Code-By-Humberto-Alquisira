<?php 
session_start();
header('Content-Type: text/html; charset=utf-8'); 

require("config.php");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Token</title>




</script>

</head>

<body>

<?php

$txtemail=$_POST['txtemailx'];
$txtpass=$_POST['txtpassx'];



if($txtpass!==$password){
	echo "<script type='text/javascript'>";
	echo("alert('Password Incorrecto');");	
    echo "window.history.back(-1);";
    echo "</script>";
}else{
	
	echo $txtemail."</br>";
	echo $usuario."</br>";

	if($txtemail==$usuario){
$_SESSION['pswdcode']="alquisira";
header('Location: edit.php');
}

?>

<?php
}
?>

</body>
</html>

