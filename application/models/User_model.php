<?php
class User_model extends CI_Model {

  function autenticar($email, $pass) {

    $query = $this->db->get_where('usuario',
      array('nombre' => $email, 'contrasena' => $pass));

	  return $query->result_object();
  }




 function obtener($nombre) {

    $query = $this->db->get_where('usuario',array('nombre'));

	  return $query->result_array();

  }

  function savecliente($Cliente)
  {
    $r = $this->db->insert('Cliente ', $Cliente);
    return $r;
  }




 function eliminar($nombre) {

    

$this->db->where('nombre',$nombre);
    return $this->db->delete('usuario');




  }

 function eliminarCliente($Cliente) {

    

$this->db->where('nombre',$Cliente);
    return $this->db->delete('Cliente');




  }




  





   function save($user)
  {
    $r = $this->db->insert('usuario', $user);
    return $r;
  }

}