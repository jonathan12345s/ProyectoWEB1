<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	//carga de vistas
	public function index()
	{
		//carga la vista user index
		$this->load->view('user/index.php');
		
	}









public function crearCliente()
	{
		$this->load->view('Cliente/RegistrarCliente.php');
	}

	public function crearProductos()
	{
		$this->load->view('Productos/InsertarProductos.php');
	}

		public function saveCliente() {
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

	if($r) {
      $this->session->set_flashdata('message','User saved');
			redirect('User/ADMIN');
		} else {
      $this->session->set_flashdata('message','There was an error saving the user');
			redirect('Cliente/RegistrarCliente');
		}



}




		public function saveProductos() {
		// objener valores
    $codigo = $this->input->post('codigo');
		$Nombre = $this->input->post('Nombre');
		$cantidad = $this->input->post('cantidad');
			

		
    $Productos = array(
        'codigo' => $codigo,
        'Nombre' => $Nombre,
        'cantidad' => $cantidad
 		

      );


     $r = $this->User_model->saveProductos($Productos);

	if($r) {
      $this->session->set_flashdata('message','User saved');
			redirect('User/ADMIN');
		} else {
      $this->session->set_flashdata('message','There was an error saving the user');
			redirect('Cliente/InsetarProductos');
		}



}






		public function Modificar()
	{
		$data= $this->obtener();




		 $data = array();
  		 $data['lista'] = $this->lista;
		

		$this->load->view('user/Modificar.php',$data);



	}
		//carga el login
	public function login()
	{
		$this->load->view('login/index.php');
	}

	public function eliminarmostar()
	{
		$this->load->view('user/EliminarEmpleados.php');
	}
	public function eliminarclientemostar()
	{
		$this->load->view('Cliente/EliminarCliente.php');
	}







public function eliminarCliente(){

$nombre = $this->input->post('Nombre');
	// consultar BD<
	$r = $this->User_model->eliminarCliente($nombre);

	if(sizeof($r) > 0) {


			echo "Datos Eliminados";

				  				  	$this->load->view('user/Admin.php');

				  				  }
				  				  else{



			      echo "intente Nuevamente";
				  				  	$this->load->view('Cliente/EliminarCliente.php');

				  				  }



		  	

		}

public function eliminar(){

$nombre = $this->input->post('Nombre');
	// consultar BD<
	$r = $this->User_model->eliminar($nombre);

	if(sizeof($r) > 0) {


			echo "Datos Eliminados";

				  				  	$this->load->view('user/Admin.php');

				  				  }
				  				  else{



			      echo "intente Nuevamente";
				  				  	$this->load->view('user/EliminarEmpleados.php');

				  				  }



		  	

		}





public function crearEmpleado()
	{
		$this->load->view('user/crearEmpleado.php');
	}
	public function ADMIN()
	{
	
				  				  	$this->load->view('user/Admin.php');
	}
public function ModificarEmpleado(){


	$this->load->view('user/ModificarEmpleados.php');
}




public function obtener(){


	$nombre = $this->input->post('Nombre');
	// consultar BD<
	return $this->User_model->obtener($nombre);

}

	//carga de la base de datos
	//autenticar usuario
	public function autenticar()
	{
		// obtener valores
		$email = $this->input->post('email');
		$pass = ($this->input->post('pass')); //md5

 		// consultar BD<
		$r = $this->User_model->autenticar($email, $pass);
		//validar si el usuario existe o no


		if(sizeof($r) > 0) {


				  $name = $r[0]->nombre;

				  				  $tipo = $r[0]->tipo;

				  				  if($tipo=="a"){

				  				  	$this->load->view('user/Admin.php');

				  				  }
				  				  else{



				  				  	$this->load->view('user/Empleado.php');

				  				  }

			      echo "Hello $tipo";




		///	$this->session->set_userdata('usuario', $r[0]);
		  	

		}else{



	   echo "usuario invalido";
		}
		

	}

		public function save() {
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

	if($r) {
      $this->session->set_flashdata('message','User saved');
			redirect('User/ADMIN');
		} else {
      $this->session->set_flashdata('message','There was an error saving the user');
			redirect('User/crearEmpleado');
		}


	

		



}
}