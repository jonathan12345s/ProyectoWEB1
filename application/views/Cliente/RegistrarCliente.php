<!DOCTYPE html>
<html>

<head>

 <link rel="stylesheet" type="text/css" href="<?= base_url()?>Pantilla/css/home.css">
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




    <div id="container">
        <h1>CrearCliente</h1>
        <div id="body">
            <p> Registro de Cliente </p>

        </div>
        <form class="form-inline" action="<?php echo site_url('User/saveCliente'); ?>" method="post">


            Nombre:
            <input type="text" name="Nombre" value="" required pattern="[a-zA-Z]* "required autofocus> Edad:
            <input type="number" name="Edad" value="" required pattern="[a-zA-Z]*"required autofocus> Dirrecion:
            <input type="text" name="Dirrecion" value="" required pattern="[a-zA-Z]*"required autofocus> Telefono:
            <input type="number" name="Telefono" value="" required pattern="[a-zA-Z]*" required autofocus>






                <br>

                <a href="<?=$_SERVER['HTTP_REFERER']?>">Volver </a>

                <br>

            <button type="submit" class="button button-block" />Crear</button>
        </form>
    </div>
    </div>

</body>

</html>









