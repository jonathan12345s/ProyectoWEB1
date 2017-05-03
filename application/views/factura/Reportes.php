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



    <div id="container">
        <h1>Reportes  de Facturas</h1>
        <div id="body">
            <p> Reportes  </p>

        </div>

    <form name="tabla" action="<?php echo site_url('User/ModificarEmpelado'); ?>" method="POST">



        <table class="table" border="solid">
            <thead>
                <tr>
               
                    <th>codigo</th>
                    <th>idCliente</th>
                    <th>codigoproducto</th>
                    <th>cantidad</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $u):?>




            

                <tr>
                   
                    <td>
                        <?=$u->codigo?></td>
                    <td>
                        <?=$u->idCliente?></td>
                    <td>
                        <?=$u->codigoproducto?></td>

                    <td>
                        <?=$u->cantidad?></td>

                </tr>

                <?php endforeach;?>
            </tbody>
        </table>

          <br>

                <a href="<?=$_SERVER['HTTP_REFERER']?>">Volver </a>

                <br>
        <input type="submit" value="Editar" />
    </form>
    </div>
    </div>

</body>

</html>