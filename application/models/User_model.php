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



 function eliminar($nombre) {

    

$this->db->where('nombre',$nombre);
    return $this->db->delete('usuario');




  }



  





   function save($user)
  {
    $r = $this->db->insert('usuario', $user);
    return $r;
  }

}