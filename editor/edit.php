
<?php
session_start(); 

require("config.php");

$pswdcode=isset($_SESSION['pswdcode']) ? $_SESSION['pswdcode'] : "";
if($pswdcode!="alquisira"){
    header('Location: index.php');
}
?>
<!doctype html>
<html>
<head>
<?php

$paginacargada=isset($_GET['targetpage']) ? $_GET['targetpage'] : "";

?>
<meta charset="utf-8">
<title>Editor</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
     <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

      <link href="bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">


<script src="codemirror-4.7/lib/codemirror.js"></script>
<link rel="stylesheet" href="codemirror-4.7/lib/codemirror.css">
<script src="codemirror-4.7/mode/javascript/javascript.js"></script>

<link rel="stylesheet" href="codemirror-4.7/theme/3024-day.css">
<link rel="stylesheet" href="codemirror-4.7/theme/3024-night.css">
<link rel="stylesheet" href="codemirror-4.7/theme/ambiance.css">
<link rel="stylesheet" href="codemirror-4.7/theme/base16-dark.css">
<link rel="stylesheet" href="codemirror-4.7/theme/base16-light.css">
<link rel="stylesheet" href="codemirror-4.7/theme/blackboard.css">
<link rel="stylesheet" href="codemirror-4.7/theme/cobalt.css">
<link rel="stylesheet" href="codemirror-4.7/theme/eclipse.css">
<link rel="stylesheet" href="codemirror-4.7/theme/elegant.css">
<link rel="stylesheet" href="codemirror-4.7/theme/erlang-dark.css">
<link rel="stylesheet" href="codemirror-4.7/theme/lesser-dark.css">
<link rel="stylesheet" href="codemirror-4.7/theme/mbo.css">
<link rel="stylesheet" href="codemirror-4.7/theme/mdn-like.css">
<link rel="stylesheet" href="codemirror-4.7/theme/midnight.css">
<link rel="stylesheet" href="codemirror-4.7/theme/monokai.css">
<link rel="stylesheet" href="codemirror-4.7/theme/neat.css">
<link rel="stylesheet" href="codemirror-4.7/theme/neo.css">
<link rel="stylesheet" href="codemirror-4.7/theme/night.css">
<link rel="stylesheet" href="codemirror-4.7/theme/paraiso-dark.css">
<link rel="stylesheet" href="codemirror-4.7/theme/paraiso-light.css">
<link rel="stylesheet" href="codemirror-4.7/theme/pastel-on-dark.css">
<link rel="stylesheet" href="codemirror-4.7/theme/rubyblue.css">
<link rel="stylesheet" href="codemirror-4.7/theme/solarized.css">
<link rel="stylesheet" href="codemirror-4.7/theme/the-matrix.css">
<link rel="stylesheet" href="codemirror-4.7/theme/tomorrow-night-eighties.css">
<link rel="stylesheet" href="codemirror-4.7/theme/twilight.css">
<link rel="stylesheet" href="codemirror-4.7/theme/vibrant-ink.css">
<link rel="stylesheet" href="codemirror-4.7/theme/xq-dark.css">
<link rel="stylesheet" href="codemirror-4.7/theme/xq-light.css">




  
  <style type="text/css" media="screen">


    #editor { 
        position: absolute;
        top: 10;
        right: 0;
        bottom: 0;
        left: 0;
        height: 90%;
    }

    .CodeMirror {
  border: 1px solid #eee;
  height: auto;
}
.CodeMirror-scroll {
  overflow-y: hidden;
  overflow-x: auto;
}

    html, body {
    height: 100%;
}




</style>

</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">


        <div class="col-sm-3">
        <h3 style="margin-left:50px;"><span class="glyphicon glyphicon-headphones"></span> Lets <small>Code - <em>by Humberto Alquisira</em></small></h3>
        </div>

        <div class="col-sm-9" style="margin-top:25px;">
            <form name="frmload" action="edit.php" method="get" class="form-inline">
                <button type="button" id="guardar" class="btn-link"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>&nbsp &nbsp &nbsp / &nbsp &nbsp &nbsp
                <!-- <a href="<?php echo($dominio."/".$ruta.$paginacargada); ?>" target="new"><span class="glyphicon glyphicon-eye-open"></span> Ver</a>&nbsp &nbsp &nbsp / &nbsp &nbsp &nbsp -->
                <a href="mvc.php?targetget=salir"><span class="glyphicon glyphicon-log-out"></span> Salir</a>&nbsp &nbsp &nbsp / &nbsp &nbsp &nbsp


<select onchange="selectTheme()" id="select">
    <option selected>Tema</option>
    <option>3024-day</option>
    <option>3024-night</option>
    <option>ambiance</option>
    <option>base16-dark</option>
    <option>base16-light</option>
    <option>blackboard</option>
    <option>cobalt</option>
    <option>eclipse</option>
    <option>elegant</option>
    <option>erlang-dark</option>
    <option>lesser-dark</option>
    <option>mbo</option>
    <option>mdn-like</option>
    <option>midnight</option>
    <option>monokai</option>
    <option>neat</option>
    <option>neo</option>
    <option>night</option>
    <option>paraiso-dark</option>
    <option>paraiso-light</option>
    <option>pastel-on-dark</option>
    <option>rubyblue</option>
    <option>solarized dark</option>
    <option>solarized light</option>
    <option>the-matrix</option>
    <option>tomorrow-night-eighties</option>
    <option>twilight</option>
    <option>vibrant-ink</option>
    <option>xq-dark</option>
    <option>xq-light</option>
</select>

&nbsp &nbsp &nbsp / &nbsp &nbsp &nbsp

            <button type="submit" class="btn-link"><span class="glyphicon glyphicon-cloud-download"></span> Cargar: &nbsp <?php echo($ruta); ?></button><input type="text" id="targetpage" name="targetpage" style="width:450px;" placeholder="ejemplo.php" value="<?php echo $paginacargada; ?>" />
            </form>

        </div>

<div class="col-sm-12">
<?php
if ($paginacargada!=""){
?>
<h4>Estas editando: <small style="color:red"><?php echo($paginacargada); ?></small></h4>
<input type="hidden" id="ruta" name="ruta" value="<?php echo($paginacargada); ?>" />
<?php
}
?>

</div>



</nav>




<div id="editor">

<textarea id="code" style="width:100%;" rows="60">

<?php
$file = fopen("../".$ruta.$paginacargada, "r") or exit("Indique una ruta!");
//Output a line of the file until the end is reached
while(!feof($file))
{
echo htmlspecialchars(fgets($file));
}
fclose($file);
?>
</textarea>



</div>







<script type="text/javascript">


  var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
    lineNumbers: true,
    styleActiveLine: true,
    theme: "mbo",
    matchBrackets: true,
    mode: 'javascript'
  });

  

  var input = document.getElementById("select");
  function selectTheme() {
    var theme = input.options[input.selectedIndex].innerHTML;
    editor.setOption("theme", theme);
  }
  var choice = document.location.search &&
               decodeURIComponent(document.location.search.slice(1));
  if (choice) {
    input.value = choice;
    editor.setOption("theme", choice);
  }
editor.setOption("theme", "eclipse");


$("#guardar").click(function(){

var textxs = editor.getValue();
    
          $.ajax({

                url: "mvc.php",
                type: "POST",
                data: {target: "save", ruta: $("#ruta").val(), texto: textxs },
                success: function(response){
                    alert("Guardado!");
                },
                error: function(jqXHR,textStatus,errorThrown){

                }


        })

});

</script>



<script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>

</body>
</html>
