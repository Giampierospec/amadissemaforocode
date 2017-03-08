<?php
if($_POST){
  file_put_contents('config.txt', json_encode($_POST));
}
else{
$datos = json_decode(file_get_contents('config.txt'),true);
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Configuracion</title>
  </head>
  <body>
  <form  method="post">
    Tiempo en verde: <input type="text" name="verde" value="<?php echo $datos['verde'];?>" >
    Tiempo en rojo: <input type="text" name="rojo" value="<?php echo $datos['rojo'];?>">
    <button type="submit" name="button">Guardar</button>

  </form>
  </body>
</html>
