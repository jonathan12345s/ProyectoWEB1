<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	//carga de vistas
	public function index()
	{
		//carga la vista user index
		$this->load->view('user/index.php');
		
	}
		//carga el login
	public function login()
	{
		$this->load->view('login/index.php');
	}

public function crearEmpleado()
	{
		$this->load->view('user/crearEmpleado.php');
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

				  				  	$this->load->view('user/Admin.php',$r[0]);

				  				  }
				  				  else{



				  				  	$this->load->view('user/Empleado.php',$r[0]);

				  				  }

			      echo "Hello $tipo";




		///	$this->session->set_userdata('usuario', $r[0]);
		  	

		}else{



	   echo "usuario invalido";
		}
		

	}

	//Agrega un nuevo usuario a la base de datos
	public function crearUsuario()
	{

		$nombre= $this->input->post('nombre');
		$apellido= $this->input->post('apellido');
		$pass= $this->input->post('pass');
		$email= $this->input->post('email');
		//dejo el email por fuera, ya que puede poseer caracteres especiales
		$usuario = array('nombre' => $nombre, 'apellido' => $apellido,'password' => $pass);
		//recorro el arreglo
		foreach ($usuario as $dato) {
		//pregunto si los datos del arreglo posee algo que no sea alfanumerico
		 if(!ctype_alnum($dato)){

		 	$this->mostrar_msj('**No se permiten caracteres especiales**');
		 }
		 else{
		  $usuario['email']= $email; 
		 	
		 	$r=$this->User_model->crearUsuario($usuario);
		 	if(sizeof($r)>0){
		 		redirect(base_url());
		 	}
		 }
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

		



}
}