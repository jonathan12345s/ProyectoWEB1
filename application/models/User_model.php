<?php
class User_model extends CI_Model

  {

    ///autenticar
  function autenticar($email, $pass)
    {
    $query = $this->db->get_where('usuario', array(
      'nombre' => $email,
      'contrasena' => $pass
    ));
    return $query->result_object();
    }



///obtener usuario
  function obtener($nombre)
    {
    $query = $this->db->get_where('usuario', array(
      'nombre' => $nombre
    ));
    return $query->result();
    }


    ///obclientes
 function obtenerclientesid($id)
    {
    



    $this->db->select('nombre');
    $this->db->from('cliente');
    $this->db->where('id = ' . $id);
    $cliente = $this->db->get();
    return $cliente->result();
    }

    ///obtner productos por id

 function obtenerproductosid($codigo)
    {
    



    $this->db->select('nombre','precio');
    $this->db->from('producto');
    $this->db->where('codigo = ' . $codigo);
    $producto = $this->db->get();
    return $producto->result();
    }




/// obtner cliente





  function obtenerclientes()
    {
    $query = $this->db->get('cliente');
    return $query->result();
    }


///guardar factura
  function saveFactura($Codigo, $Cliente, $CodigoProducto, $cantidad)
    {
    $this->db->set('codigo', $Codigo);
    $this->db->set('idCliente', $Cliente);
    $this->db->set('codigoproducto', $CodigoProducto);
    $this->db->set('cantidad', $cantidad);
    $r = $this->db->insert('factura');
    return $r;
    }


    ////obtner producto

  function obtenerProducto()
    {
    $query = $this->db->get('producto');
    return $query->result();
    }
    ///guardar clientes 

  function savecliente($Cliente)
    {
    $r = $this->db->insert('Cliente ', $Cliente);
    return $r;
    }

    ///guardar productos

  function saveProductos($Productos)
    {
    $r = $this->db->insert('Producto ', $Productos);
    return $r;
    }
///obtner contacto
  function obtenerContacto($idContacto)
    {
    $this->db->select('nombre, contrasena,tipo,id');
    $this->db->from('usuario');
    $this->db->where('id = ' . $idContacto);
    $contacto = $this->db->get();
    return $contacto->result();
    }

    ///obtner cliente

  function obtenercliente($idContacto)
    {
    $this->db->select('nombre, edad,dirrecion,telefono,id');
    $this->db->from('cliente');
    $this->db->where('id = ' . $idContacto);
    $contacto = $this->db->get();
    return $contacto->result();
    }


////actulizar
  function update($nombre, $contrasena, $tipo, $id)
    {
    $this->db->set('nombre', $nombre);
    $this->db->set('contrasena', $contrasena);
    $this->db->set('tipo', $tipo);
    $this->db->where('id', $id);
    $this->db->update('usuario');
    }



    ////actualizar cliente

  function updateCliente($nombre, $edad, $dirrecion, $telefono, $id)
    {
    $this->db->set('nombre', $nombre);
    $this->db->set('edad', $edad);
    $this->db->set('dirrecion', $dirrecion);
    $this->db->set('telefono', $telefono);
    $this->db->where('id', $id);
    $this->db->update('cliente');
    }
////eliminar eliminar nombre
  function eliminar($nombre)
    {
    $this->db->where('nombre', $nombre);
    return $this->db->delete('usuario');
    }
///eliminar cliente
  function eliminarCliente($Cliente)
    {
    $this->db->where('nombre', $Cliente);
    return $this->db->delete('Cliente');
    }
///actualizar producto
  function actualizarProductos($codigo, $cantidad)
    {
    $this->db->set('cantidad', $cantidad);
    $this->db->where('codigo', $codigo);
    return $this->db->update('producto');
    }
///obtner inventari
  function ObtenerCantidadInvetrio($codigo)
    {
    $query = $this->db->get_where('producto', array(
      'codigo' => $codigo
    ));
    return $query->result_object();
    }
///guardar usuario
  function save($user)
    {
    $r = $this->db->insert('usuario', $user);
    return $r;
    }




///obtner factura
     function ObtenerFactura() {
    $query = $this->db->get('factura');
    return $query->result();
  }
  }