
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller

	{

	// carga de vistas login


	public function index()
		{

		// carga la vista user index

		$this->load->view('login/index.php');
		}


////craga reportes

	public function Reportes()
		{




		$r = $this->User_model->ObtenerFactura();


		$data['datos'] = $r;


		$this->load->view('factura/Reportes.php',$data);


		}
		////craga vista

	public function VistaFactura()
		{
		$usuarios = $this->User_model->obtenerclientes();
		$data1['usuarios'] = $usuarios;
		$Productos = $this->User_model->obtenerProducto();
		$data2['productos'] = $Productos;
		$this->load->view("factura/factura.php", $data1, $data2);
		}


		////guarda factura

	public function saveFactura()
		{
		$Codigo = $this->input->post('Codigo');
		$Cliente = $this->input->post('Cliente');
		$CodigoProducto = $this->input->post('CodigoProducto');
		$cantidad = $this->input->post('cantidad');
		$r = $this->User_model->saveFactura($Codigo, $Cliente, $CodigoProducto, $cantidad);
		if (sizeof($r) > 0)
			{
			echo "Datos actualizados";
			$this->load->view('user/Empleado.php');
			}
		  else
			{
			echo "intente Nuevamente";
			$this->load->view('factura/factura.php');
			}
		}


		/////vista agragrar producto

	public function AgregarProductos()
		{
		$this->load->view('Productos/AgregarProductos.php');
		}


		/////craer cliente

	public function crearCliente()
		{
		$this->load->view('Cliente/RegistrarCliente.php');
		}
/////craer producto
	public function crearProductos()
		{
		$this->load->view('Productos/InsertarProductos.php');
		}
/////guardar cliente
	public function saveCliente()
		{

		// objener valores

		$nombre = $this->input->post('Nombre');
		$Edad = $this->input->post('Edad');
		$Dirrecion = $this->input->post('Dirrecion');
		$Telefono = $this->input->post('Telefono');
		$Cliente = array(
			'Nombre' => $nombre,
			'Edad' => $Edad,
			'Dirrecion' => $Dirrecion,
			'Telefono' => $Telefono
		);
		$r = $this->User_model->savecliente($Cliente);
		if ($r)
			{
			$this->session->set_flashdata('message', 'User saved');
			redirect('User/ADMIN');
			}
		  else
			{
			$this->session->set_flashdata('message', 'There was an error saving the user');
			redirect('Cliente/RegistrarCliente');
			}
		}
/////actualizarProductos
	public function actualizarProductos()
		{

		// objener valores

		$codigo = $this->input->post('codigo');
		$cantidad = $this->input->post('cantidad');
		$canti = $this->User_model->ObtenerCantidadInvetrio($codigo);
		$numero = $canti[0]->cantidad;
		$cantidad = $cantidad + $numero;
		$r = $this->User_model->actualizarProductos($codigo, $cantidad);
		if (sizeof($r) > 0)
			{
			echo "Datos actualizados";
			$this->load->view('user/Admin.php');
			}
		  else
			{
			echo "intente Nuevamente";
			$this->load->view('Cliente/EliminarCliente.php');
			}
		}

////guardarproductos

	public function saveProductos()
		{

		// objener valores

		$codigo = $this->input->post('codigo');
		$Nombre = $this->input->post('Nombre');
		$cantidad = $this->input->post('cantidad');
		$precio = $this->input->post('precio');
		$Productos = array(
			'codigo' => $codigo,
			'Nombre' => $Nombre,
			'cantidad' => $cantidad,
			'precio' => $precio
		);
		$r = $this->User_model->saveProductos($Productos);
		if ($r)
			{
			$this->session->set_flashdata('message', 'User saved');
			redirect('User/ADMIN');
			}
		  else
			{
			$this->session->set_flashdata('message', 'There was an error saving the user');
			redirect('Cliente/InsetarProductos');
			}
		}
		////ModificarEmpelado


	public function ModificarEmpelado()
		{
		$editar = $this->input->post('editar');
		$usuarios = $this->User_model->obtenerContacto($editar); //llamamos a la función getData() del modelo creado anteriormente.
		$data['usuarios'] = $usuarios;
		$this->load->view('user/edit.php', $data);
		}

		////Modificarclientes

	public function ModificarCliente()
		{
		$editar = $this->input->post('editar');
		$usuarios = $this->User_model->obtenercliente($editar); //llamamos a la función getData() del modelo creado anteriormente.
		$data['usuarios'] = $usuarios;
		$this->load->view('Cliente/editClientes.php', $data);
		}
////edita
	public function editar()
		{
		$nombre = $this->input->post('txtnombre');
		$contrasena = $this->input->post('txtcontrasena');
		$tipo = $this->input->post('txtTipo');
		$id = $this->input->post('txtid');
		$data = array(
			'nombre' => $nombre,
			'contrasena' => $contrasena,
			'tipo' => $tipo,
			'id' => $id
		);

		// recogemos los datos por POST

		$this->User_model->update($nombre, $contrasena, $tipo, $id);
		$this->load->view('user/Admin.php');
		}



////editarclientes
	public function editarCliente()
		{
		$nombre = $this->input->post('txtnombre');
		$edad = $this->input->post('txtedad');
		$dirrecion = $this->input->post('txtdirrecion');
		$telefono = $this->input->post('txttelefono');
		$id = $this->input->post('txtid');

		// recogemos los datos por POST

		$this->User_model->updateCliente($nombre, $edad, $dirrecion, $telefono, $id);
		$this->load->view('user/Admin.php');
		}
///modifica
	public function Modificar()
		{
		$Nombre = $this->input->post('Nombre');
		$usuarios = $this->User_model->obtener($Nombre); //llamamos a la función getData() del modelo creado anteriormente.
		$data['usuarios'] = $usuarios;

		// load de vistas

		$this->load->view('user/Modificar.php', $data); //llamada a la vista, que crearemos posteriorme
		}
///cargalogin

	public function login()
		{
		$this->load->view('login/index.php');
		}
		////eliminar

	public function eliminarmostar()
		{
		$this->load->view('user/EliminarEmpleados.php');



	
		}



	////eliminarcliientemostar


	public function eliminarclientemostar()
		{
		$this->load->view('Cliente/EliminarCliente.php');
		}



		////eliminarcliente

	public function eliminarCliente()
		{
		$nombre = $this->input->post('Nombre');

		// consultar BD<

		$r = $this->User_model->eliminarCliente($nombre);
		if (sizeof($r) > 0)
			{
			echo "Datos Eliminados";
			$this->load->view('user/Admin.php');
			}
		  else
			{
			echo "intente Nuevamente";
			$this->load->view('Cliente/EliminarCliente.php');
			}
		}

		/////vista cliente

	public function VistaModificarCliente()
		{
		$usuarios = $this->User_model->obtenerclientes();
		$data['usuarios'] = $usuarios;
		$this->load->view('Cliente/ModificarClientes.php', $data);
		}


///eliminar
	public function eliminar()
		{
		$nombre = $this->input->post('Nombre');

		// consultar BD<

		$r = $this->User_model->eliminar($nombre);
		if (sizeof($r) > 0)
			{
			echo "Datos Eliminados";
			$this->load->view('user/Admin.php');
			}
		  else
			{
			echo "intente Nuevamente";
			$this->load->view('user/EliminarEmpleados.php');
			}
		}



///crearempleado
	public function crearEmpleado()
		{
		$this->load->view('user/crearEmpleado.php');
		}

		///funcion admin

	public function ADMIN()
		{
		$this->load->view('user/Admin.php');
		}

		///funcion modificarempleado

	public function ModificarEmpleado()
		{
		$this->load->view('user/ModificarEmpleados.php');
		}
///funcion obtener
	public function obtener()
		{
		$nombre = $this->input->post('Nombre');

		// consultar BD<

		return $this->User_model->obtener($nombre);
		}

	// carga de la base de datos
	// autenticar usuario

	public function autenticar()
		{

		// obtener valores

		$email = $this->input->post('email');
		$pass = ($this->input->post('pass')); //md5

		// consultar BD<

		$r = $this->User_model->autenticar($email, $pass);

		// validar si el usuario existe o no

		if (sizeof($r) > 0)
			{
			$name = $r[0]->nombre;
			$tipo = $r[0]->tipo;
			if ($tipo == "Administrador")
				{
					echo "	USUARIO : $name ";
				$this->load->view('user/Admin.php');
				}
			  else if ($tipo == "Empleado")
				{
					echo "	USUARIO : $name ";
				$this->load->view('user/Empleado.php');
				}


			}
		  else
			{
			echo "usuario invalido";

				$this->load->view('login/index.php');

			}
		}
//// guardar
	public function save()
		{

		// objener valores

		$nombre = $this->input->post('Nombre');
		$contrasena = $this->input->post('contraseña');
		$tipo = $this->input->post('tipo');
		$user = array(
			'nombre' => $nombre,
			'contrasena' => $contrasena,
			'tipo' => $tipo
		);
		echo "a";
		$r = $this->User_model->save($user);
		if ($r)
			{
			$this->session->set_flashdata('message', 'User saved');
			redirect('User/ADMIN');
			}
		  else
			{
			$this->session->set_flashdata('message', 'There was an error saving the user');
			redirect('User/crearEmpleado');
			}
		}
	}

