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




<form name="tabla" action="<?php echo site_url('User/editarCliente'); ?>"  method="POST">



 

 <tbody>
 <?php foreach ($usuarios as $u):?>

<table>

<tr>
 <td>id: </td><td><input name="txtid" value= <?=$u->id?> type="text" readonly="readonly"/></td>
 </tr>
 <tr>
 <td>Nombre: </td><td><input name="txtnombre" value= <?=$u->nombre?> type="text"/></td>
 </tr>
 <tr>
 <td>edad: </td><td><input name="txtedad" value=<?=$u->edad?> type="text"/></td>
 </tr>
 <tr>
 <td>dirrecion: </td><td><input name="txtdirrecion" value=<?=$u->dirrecion?> type="text"/></td>
 </tr>

 <tr>
 <td>telefono: </td><td><input name="txttelefono" value=<?=$u->telefono?> type="text"/></td>
 </tr>

 </table>



 
 <?php endforeach;?>
 </tbody>
 </table>
 <input type="submit" value="Editar" />
 </form>


      </body>
    </html>