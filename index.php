<?php
if(!isset($_GET['calle'])){
  header("Location:elegir.php");
}
$calle = $_GET['calle'];
$datos = json_decode(file_get_contents('config.txt'),true);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title> El Semaforo</title>
    <style>
      .luz{
          display:block;
          height: 50%;
          width: 40%;
          border-radius: 50%;
      }
    </style>
  </head>
  <body>
    <h3 text-center>Respeta <?php echo $_GET['calle'] ?></h3>
    <div id="rojo"class="row">
      <div class="col-sm-4 label-danger luz">

      </div>
    </div>
    <div id="amarillo" class="row">
      <div class="col-sm-4 label-warning luz">

      </div>
    </div>

    <div id="verde" class="row">
      <div class="col-sm-4 label-success luz">

      </div>
    </div>



    </div>
    <?php  if($calle == 'A'): ?>
    <script src="js/semaforoa.js"></script>
    <?php  endif;?>
    <?php if($calle == 'B'): ?>
    <script src="js/semaforob.js"></script>
  <?php endif; ?>
  </body>
</html>
