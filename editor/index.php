<?php
require("config.php");
?>
<!doctype html>
<html>
<head>

<meta charset="utf-8">

<title>Acceso Restringido</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


         <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

      <link href="bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">

<style type="text/css">
body {
    background-color: #000000;
	background-image:url(images/cinta.png);
	background-repeat:repeat-x;
	background-size:464px;
}
</style>

</head>

<body>


<image src="images/siren.gif" width="110" />


  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h3 style="margin-left:50px;"><span class="glyphicon glyphicon-headphones"></span> Lets <small>Code - <em>by Humberto Alquisira</em></small></h3>
        </div>

      <div class="modal-body">

                            <div align="left">
                            <form id="form1" name="form1" method="post" action="verifica.php">
                            <small>Usuario</small>
                            <input type="text" name="txtemailx" id="txtemailx" required class="form-control">
                            <small>Password</small>
                            <input type="password" name="txtpassx" id="txtpassx" required class="form-control"></br>
                            <input type="submit" value="A teclear" class="btn btn-sm btn-primary" style="width:100%;" >
                            </form>
                            </div>

      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->



<script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
</body>
</html>