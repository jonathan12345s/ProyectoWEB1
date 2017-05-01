<?php
class User_model extends CI_Model {

  function autenticar($email, $pass) {

    $query = $this->db->get_where('usuario',
      array('nombre' => $email, 'contrasena' => $pass));

	  return $query->result_object();
  }




 function obtener($nombre) {

    $query = $this->db->get_where('usuario',  array('nombre' => $nombre));

	  return $query->result();

  }

  function savecliente($Cliente)
  {
    $r = $this->db->insert('Cliente ', $Cliente);
    return $r;
  }
    function saveProductos($Productos)
  {
    $r = $this->db->insert('Producto ', $Productos);
    return $r;
  }



  function obtenerContacto($idContacto) {
$this->db->select('nombre, contrasena,tipo,id');
$this->db->from('usuario');
$this->db->where('id = ' . $idContacto);
$contacto = $this->db->get();
return $contacto->result();
}






function update($nombre,$contrasena ,$tipo ,$id ) {


 $this->db->set('nombre', $nombre);
 $this->db->set('contrasena',$contrasena);
 $this->db->set('tipo', $tipo);
 
 $this->db->where('id', $id );
 $this->db->update('usuario');

 }





 function eliminar($nombre) {

    

$this->db->where('nombre',$nombre);
    return $this->db->delete('usuario');




  }

 function eliminarCliente($Cliente) {

    

$this->db->where('nombre',$Cliente);
    return $this->db->delete('Cliente');




  }



 function actualizarProductos($codigo,$cantidad) {

    

 $this->db->set('cantidad', $cantidad);
 
 $this->db->where('codigo', $codigo);

  return $this->db->update('producto');




  }

 function ObtenerCantidadInvetrio($codigo){



    

$query = $this->db->get_where('producto',
      array('codigo' => $codigo));

    return $query->result_object();






  }

  








   function save($user)
  {
    $r = $this->db->insert('usuario', $user);
    return $r;
  }

}