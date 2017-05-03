<?php if (isset($_SESSION[ 'user'])){ redirect( 'usuario'); } ?>

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
<style type="text/css">
</style>

<body>





    <div>
        <h1>Bienvenido!</h1>

        <p>Pagina principal de administrador</p>




        <ul class="list-inline intro-social-buttons">
            <li>

                <a href="crearEmpleado" class="btn btn-default btn-lg">
                    </i> <span class="network-name">Crear Empleados</span>
                </a>
            </li>
            <li>

                <a href="ModificarEmpleado" class="btn btn-default btn-lg">
                    </i> <span class="network-name">Modificar Empleados</span>
                </a>
            </li>
            <li>

                <a href="<?php echo site_url('user/eliminarmostar'); ?>" class="btn btn-default btn-lg">
                    </i> <span class="network-name">Eliminar Empleado</span>
                </a>
            </li>
        </ul>


        <br>




        <br>

        <ul class="list-inline intro-social-buttons">



            <li>

                <a href="crearcliente" class="btn btn-default btn-lg">
                    </i> <span class="network-name">Crear Cliente</span>
                </a>
            </li>
            <li>

                <a href="<?php echo site_url('user/VistaModificarCliente'); ?>" class="btn btn-default btn-lg">
                    </i> <span class="network-name">Modificar Clientes</span>
                </a>
            </li>
            <li>

                <a href="eliminarclientemostar" class="btn btn-default btn-lg">
                    </i> <span class="network-name">Eliminar Clientes</span>
                </a>
            </li>
        </ul>




        <br>
        <br>
        <ul class="list-inline intro-social-buttons">



            <li>

                <a href="crearProductos" class="btn btn-default btn-lg">
                    </i> <span class="network-name">Crear Producto</span>
                </a>
            </li>
            <li>

                <a href="AgregarProductos" class="btn btn-default btn-lg">
                    </i> <span class="network-name">agregar Productos</span>
                </a>
            </li>

        </ul>



        <br>
        <br>


        <ul class="list-inline intro-social-buttons">



            <li>

                <a href="<?php echo site_url('user/Reportes') ?>" class="btn btn-default btn-lg">
                    </i> <span class="network-name">ver Reportes</span>
                </a>
            </li>
            <li>

                <a href="<?php echo site_url('user/index') ?>" class="btn btn-default btn-lg">
                    </i> <span class="network-name">Salir</span>
                </a>
            </li>

        </ul>





</body>

</html>