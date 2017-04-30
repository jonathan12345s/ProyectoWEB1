<?php
class User_model extends CI_Model {

  function autenticar($email, $pass) {

    $query = $this->db->get_where('usuario',
      array('nombre' => $email, 'contrasena' => $pass));

	  return $query->result_object();
  }





   function save($user)
  {
    $r = $this->db->insert('usuario', $user);
    return $r;
  }

}