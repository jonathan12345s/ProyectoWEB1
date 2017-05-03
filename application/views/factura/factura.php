<?php 
  if (isset($_SESSION['user'])){ 
   redirect('usuario');
} 
 ?>

<!DOCTYPE html>
<html>

 <head>








 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Punto Ferreteria</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

   
    <link href="signin.css" rel="stylesheet">

    
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

 
  </head>
  <body>










      
        <div id="Empleado">
      
          
     <h2>Facturacion</h2>



<form class="form-inline">
  <div class="form-group">

      <label for="email">Codigo Factura:</label>


<?php

$aleatorio=rand(1, 100);



?>

    <input type="text " value= '<?php echo $aleatorio; ?>'  class="form-control" name="Codigo">




 </div>


  <div class="form-group">
    <label for="pwd">id Cliente:</label>
    <input type="number" class="form-control" name="Cliente">
  </div>






  <div class="form-group">
    <label for="pwd">Codigo Producto:</label>
    <input type="number" class="form-control"  name ="CodigoProducto">
  </div>

  <div class="form-group">
    <label for="pwd">cantidad:</label>
    <input type="number" class="form-control"  name ="cantidad">
  </div>


</div>
  <button type="submit" class="btn btn-default">Venta</button>
</form>








       
        <script src="<?php base_url();?> util/js/login/index.js"></script>





  <table border="solid">
 <thead>
 <tr>
 <th>id</th>
 <th>nombre</th>
 <th>edad</th>
 <th>dirrecion</th>
 <th>telefono</th>

 </tr>
 </thead>
 <tbody>
 <?php foreach ($usuarios as $u):?>
 
 <tr>




 <td><?=$u->id?></td>
 <td><?=$u->nombre?></td>
 <td><?=$u->edad?></td>
 <td><?=$u->dirrecion?></td>

  <td><?=$u->telefono?></td>

 </tr>
 
 <?php endforeach;?>
 </tbody>
 </table>









      </body>
    </html>