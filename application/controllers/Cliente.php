<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {





public function crearCliente()
	{
		$this->load->view('Cliente/RegistrarCliente.php');
	}

		public function save() {
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


     $r = $this->Cliente_model->save($Cliente);

	if($r) {
      $this->session->set_flashdata('message','User saved');
			redirect('User/ADMIN');
		} else {
      $this->session->set_flashdata('message','There was an error saving the user');
			redirect('Cliente/RegistrarCliente');
		}


	

		



}
}