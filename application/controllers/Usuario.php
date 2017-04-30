<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	
	
	public function login()
	{
	$this->load->view('usuario/login');	
	}
	public function registrar()
	{

		$contrasena= $this->input->post('contrasena');
		$nombre= $this->input->post('nombre');
		$apellido= $this->input->post('apellido');
		$instrumento= $this->input->post('instrumento');
		$genero= $this->input->post('genero');
		$foto= $this->input->post('foto');
		$direccion= $this->input->post('direccion');
		//dejo el email por fuera, ya que puede poseer caracteres especiales
		$usuario = array('nombre' => $nombre, 'apellido' => $apellido,'contrasena' => $contrasena, 'genero' => $genero, 'foto' => $foto, 'direccion' => $direccion);
		 	
		 	$r=$this->User_model->save($usuario);
		 	if(sizeof($r)>0){
		 		redirect('login');
		 	}
		
	}


	
	public function autenticarse()
	{

		$user = $this->input->post('nombre');
		$pass = $this->input->post('contrasena');

		$r = $this->User_model->autenticarse($user, $pass);
		if (sizeof($r) > 0) {
			
			echo "Hello";
		}else
		{
			echo "Not valid user";
		}
	}
	
	
}

